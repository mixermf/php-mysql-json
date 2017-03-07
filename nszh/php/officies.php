<?php
header('Content-type: application/json; charset=utf-8');

ini_set('mbstring.func_overload', 2);
ini_set('mbstring.internal_encoding', 'UTF-8');

$list = file('https://www.binbank.ru/landing/premium/iframe/data/data.csv');

if (isset($_GET['type']) && $_GET['type'] == 'cities') {
    $cities = array();
    foreach ($list as $line) {
        $l = explode(';', trim($line));
        $cities[] = mb_strtoupper($l[2]);
    }

    sort($cities);

    $citiesFirst = array(
        'МОСКВА',
        'САНКТ-ПЕТЕРБУРГ'
    );

    $sorted_cities = array_merge($citiesFirst, $cities);
    $sorted_cities = array_unique($sorted_cities);
    $sorted_cities = array_merge($sorted_cities, array());

    echo json_encode($sorted_cities);
    exit();
}

if (isset($_GET['type']) && $_GET['type'] == 'offices') {
    $city = $_GET['city'];
    $offices = array();
    foreach ($list as $line) {
        $l = explode(';', trim($line));
        if (mb_strpos(mb_strtoupper($l[2]), mb_strtoupper($city)) !== false) {
            $s = $l[0];
            $s = preg_replace("/^\"+/", '', $s);
            $s = preg_replace("/\"+$/", '', $s);
            $s = str_replace('""', '"', $s);
            if (!in_array($s, $offices)) {
                $offices[] = $s;
            }
        }
    }

    
    echo json_encode($offices);
    exit();
}


