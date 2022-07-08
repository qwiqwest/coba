<?php

$dateTime = new DateTime();

//ini ganti date/time harus semuanya
// $dateTime->setDate(1990, 1, 20);
// $dateTime->setTime(10,10,10,0);


//ini bisa ganti salah satunya
// $dateTime->add(new DateInterval("P1Y"));

//ini untuk mengurangi salah satunya
$dateYear = new DateInterval("P12Y");
$dateYear->invert = 1;

$dateInterval = new DateInterval("P1M");
$dateInterval->invert = 1;

$dateTime->add($dateInterval);
$dateTime->add($dateYear);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);

$now->setTimezone(new DateTimeZone("America/Vancouver"));
$vancouver = $now->format("Y-m-d H:i:s"). PHP_EOL;

echo "Waktu di Vancouver saat ini : $vancouver". PHP_EOL;

$jakarta = new DateTime();
$jakarta = DateTime::createFromFormat("Y-m-d H:i:s", "2022-7-6 6:20:10",
    new DateTimeZone("Asia/Jakarta"));

var_dump($jakarta)

?>