<?php 

require_once "data/Belajar.php";

$belajar = new Belajar();

$belajar->name = "Rafli";
$belajar->address = "Bandung";

// var_dump($belajar);

echo "Name = $belajar->name". PHP_EOL;
echo "Address = $belajar->address". PHP_EOL;
echo "Country = $belajar->country\n". PHP_EOL;


$belajar2 = new Belajar();

$belajar2->name = "Syahrul";
$belajar2->address = "Jakarta";

// var_dump($belajar2);

echo "Name = $belajar2->name". PHP_EOL;
echo "Address = $belajar2->address". PHP_EOL;
echo "Country = $belajar2->country\n". PHP_EOL;

$belajar3 = new Belajar();

$belajar3->name = "Sharliq";
$belajar3->address = "Bali";

// var_dump($belajar3);

echo "Name = $belajar3->name". PHP_EOL;
echo "Address = $belajar3->address". PHP_EOL;
echo "Country = $belajar3->country\n". PHP_EOL;
?>