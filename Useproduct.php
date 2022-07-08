<?php

require_once "data/Product.php";

use Data\Product;

$bebas = new Product("Iphone", 2000);

echo $bebas->getName() . PHP_EOL;

$bebas->name = "Android";
$bebas->price = 1000;
?>