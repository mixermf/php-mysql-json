<?

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include 'config.php';

$return_object = array();
$list = file('https://www.binbank.ru/landing/premium/iframe/data/data.csv');
$emails = array();
$cfuCode = '';
foreach ($list as $line) {
    $l = explode(';', $line);

    $city = trim($l[2]);
    $office = $l[0];
    $office = preg_replace("/^\"+/", '', $office);
    $office = preg_replace("/\"+$/", '', $office);
    $office = str_replace('""', '"', $office);

    if (strtoupper($city)==$_REQUEST['city'] && trim($office)==$_REQUEST['office']) {
        if ($l[1]) {
            $emails[] = $l[1];
        }
        if ($l[3]) {
            $emails[] = $l[3];
        }
        if ($l[4]) {
            $cfuCode = $l[4];
        }
    }
}

$pdo = new PDO(DSN, USER, PASSWORD);
$pdo->exec('set names utf8');

$stmt = $pdo->prepare(
    'INSERT INTO premium_land '
    . '(name, city, office, phone, email, utm_source, utm_medium, utm_campaign, utm_term, utm_content, cfu_code, product) '
    . 'VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)'
//. 'VALUES (:name, :city, :email, :phone, :utm_source, :utm_medium, :utm_campaign, :utm_term, :utm_content, :date, :product)'
);

// var_dump(array(
//     $_REQUEST['name'],
//     $_REQUEST['city'],
//     $_REQUEST['office'],
//     $_REQUEST['phone'],
//     $emails[0],
//     isset($_REQUEST['utm_source']) ? $_REQUEST['utm_source'] : null,
//     isset($_REQUEST['utm_medium']) ? $_REQUEST['utm_medium'] : null,
//     isset($_REQUEST['utm_campaign']) ? $_REQUEST['utm_campaign'] : null,
//     isset($_REQUEST['utm_term']) ? $_REQUEST['utm_term'] : null,
//     isset($_REQUEST['utm_content']) ? $_REQUEST['utm_content'] : null )); exit();



$stmt->execute(
    array(
        $_REQUEST['name'],
        $_REQUEST['city'],
        $_REQUEST['office'],
        $_REQUEST['phone'],
        $emails[0],
        isset($_REQUEST['utm_source']) ? $_REQUEST['utm_source'] : null,
        isset($_REQUEST['utm_medium']) ? $_REQUEST['utm_medium'] : null,
        isset($_REQUEST['utm_campaign']) ? $_REQUEST['utm_campaign'] : null,
        isset($_REQUEST['utm_term']) ? $_REQUEST['utm_term'] : null,
        isset($_REQUEST['utm_content']) ? $_REQUEST['utm_content'] : null,
        $cfuCode,
        "premium - ИСЖ"
    )
);

// echo "\nPDO::errorInfo():\n";
// print_r($pdo->errorInfo());
// exit();
$subject = 'Zayavka na premium';

$message = <<<EOF
<p>Уважаемый сотрудник!</p>

<p>Клиент оставил заявку на получение ПУ Премиум через сайт Банка.</p>

<p>Просьба связаться с клиентом в самое ближайшее время</p>

<table>
<tr>
    <td>Имя:</td>
    <td>{$_REQUEST['name']}</td>
</tr>
<tr>
    <td>Город:</td>
    <td>{$_REQUEST['city']}</td>
</tr>
<tr>
    <td>Телефон:</td>
    <td>{$_REQUEST['phone']}</td>
</tr>
<tr>
    <td>E-mail:</td>
    <td>{$_REQUEST['email']}</td>
</tr>
</table>
EOF;

foreach ($emails as $email) {
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $headers .= 'To: ' . $email . "\r\n";
    $headers .= 'From: Binbank <premium@binbank.ru>' . "\r\n";

    mail($to, $subject, $message, $headers);
}

// BEGIN: SMS SENDING
if ($_REQUEST['phone']) {
    $phone = preg_replace('/[^0-9]/', '', $_REQUEST['phone']);

    if (strlen($phone) == 11) {
        $greeting_male = "Уважаемый ";
        $greeting_female = "Уважаемая ";
        $greeting_reptilians = "Уважаемый(ая) ";

        $sms_template = "!\n\nБлагодарим Вас за выбор БИНБАНКа и заявку на продукт \"Инвестиционное страхование жизни\". В ближайшее время с Вами свяжется специалист для подробной консультации. \nВаш БИНБАНК Премиум.\n\npremium.binbank.ru\n8 800 555 5577\nПАО \"БИНБАНК\"";

        $gender = $_REQUEST['gender'];

        $name = mb_convert_case($_REQUEST['name'], MB_CASE_TITLE, 'UTF-8');

        switch ($gender) {
            case 'MALE':
                $sms = $greeting_male . $name . $sms_template;
                break;

            case 'FEMALE':
                $sms = $greeting_female . $name . $sms_template;
                break;

            default:
                $sms = $greeting_reptilians . $name . $sms_template;
                break;
        }

        $context = stream_context_create(array(
            'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded' . PHP_EOL,
            'content' => 'phone=' . urlencode("+".$phone) . '&key=47bfbc88-6c09-423b-bebb-c6d92af22765' . '&cnt=' . urlencode($sms),
            ),
        ));

        file_get_contents(
            $file = "https://app.binbank.ru/sms_gate",
            $use_include_path = false,
            $context);

    }
}


$return_object['status'] = 'success';
echo json_encode($return_object);