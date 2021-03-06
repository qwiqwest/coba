<?php

class Programmer
{

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{
}
class FrontendProgrammer extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer){
    echo "Hello Programmer $programmer->name" . PHP_EOL;
}
function sayHelloBackendProgrammer(BackendProgrammer $programmer){
    echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
}
function sayHelloFrontendProgrammer(Programmer $programmer){
    echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
}

?>