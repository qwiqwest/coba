<?php

namespace {
    require_once "data/Conflict.php";
    require_once "data/Helper.php";

    $contol1 = new \Data\One\Conflict();
    $contol2 = new \Data\Two\Conflict();


    echo Helper\APPLICATION . PHP_EOL;

    Helper\helpMe();    
}
?>