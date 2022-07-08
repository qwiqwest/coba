<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Joko");
$person->hello("Widodo");

$person->name = "Eko";
var_dump($person);

$person->run();
?>