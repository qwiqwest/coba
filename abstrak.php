<?php
//Parents Class
abstract class Car{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}


//Child Class
class Ferrari extends Car{
    public function intro(): string
    {
        return "$this->name is the best Sports Car in the World!\n";

    }
}

class Mercedes extends Car{
    public function intro(): string
    {
        return "$this->name is the best Racing Car in the World\n";
    }
}

class Honda extends Car{
    public function intro(): string
    {
        return "$this->name is the best Family Car in the World\n";
    }
}

//Create objects from the child
$ferrari = new Ferrari("Ferrari");
echo $ferrari->intro();

$mercedes = new Mercedes("Mercedes");
echo $mercedes->intro();

$honda = new Honda("Honda");
echo $honda->intro();
?>