<?php

require_once "data/Belajar.php";

$dila = new Belajar();
$dila->name = "Dila";
$dila->sayHello("Ming");

$abdi = new Belajar();
$abdi->name = "Abdi";
$abdi->sayHello(null);
?>
