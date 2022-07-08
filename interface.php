<?php
//Interface Definition
interface Fruit{
    public function color();
}
// public function expl();

//Class definitions
class Apple implements Fruit{
    public function color()
    {
    echo "Red/Green \n";   
    }
}

class Orange implements Fruit{
    public function color()
    {
    echo "Orange \n";   
    }
}

class Mango implements Fruit{
    public function color()
    {
    echo "Green \n";   
    }
}

class Jla implements Fruit{
    public function color()
    {
    echo "The color of an apple is ";   
    }
}

class Jlo implements Fruit{
    public function color()
    {
    echo "The color of an orange is ";   
    }
}

class Jlm implements Fruit{
    public function color()
    {
    echo "The color of a manggo is ";   
    }
}

//Create a list of Fruits
$apple = new Apple();
$orange = new Orange();
$mango = new Mango();
$ca = new Jla();
$co = new Jlo();
$cm = new Jlm();
$fruits = array($ca, $apple, $co, $orange, $cm, $mango);

//Tell the animals to make a sound
foreach($fruits as $fruits) {
    $fruits->color();
}

?>