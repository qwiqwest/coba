<?php

require_once "data/Manager.php";

$menegjer = new Manager();
$menegjer->name = "Dedi";
$menegjer->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Eko";
$vp->sayHello("Joko");

?>