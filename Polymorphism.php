<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Rafli");
var_dump($company);

$company->programmer = new BackendProgrammer("Rafli");
var_dump($company);

$company->programmer = new FrontendProgrammer("Rafli");
var_dump($company);

sayHelloProgrammer(new Programmer(("Ming")));
sayHelloBackendProgrammer(new BackendProgrammer(("Dila")));
sayHelloFrontendProgrammer(new FrontendProgrammer(("Muhammad")));
?>