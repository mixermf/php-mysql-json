<?
$gender = (isset($_COOKIE['user_gender'])) ? $_COOKIE['user_gender'] : NULL;
switch ($gender) {
  case 'MALE':
    $gender_in_russian = 'Уважаемый';
    break;
  case 'FEMALE':
    $gender_in_russian = 'Уважаемая';
    break;
  case 'UNKNOWN':
    $gender_in_russian = 'Уважаемый(ая)';
    break;
  default:
    $gender_in_russian = 'Уважаемый(ая)';
    break;
}


if(!empty($_COOKIE['user_name'])){
    $user_name = $_COOKIE['user_name'];
} else{
    $user_name = 'клиент';
}
