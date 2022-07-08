<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Dino";
$cat->run();

$dog = new Dog();
$dog->name = "Blacky";
$dog->run();

?>