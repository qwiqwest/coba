// THIS IS A PHP OOP CLASS
<?php

class Rafli{
    public $ming;
    public $fli;

    function set_ming($ming){
        $this->ming = $ming;
    }
    function get_ming() {
        return $this->ming;
      }
    }

      $awal = new Rafli();
      $aku = new Rafli();
      $asli = new Rafli();

      $awal->set_ming('Muhammad');
      $aku->set_ming('Rafli');
      $asli->set_ming('Abdillah');
      
      echo "Nama lengkap saya adalah ";

      echo $awal->get_ming();
      echo " ";
      echo $aku->get_ming();
      echo " ";
      echo $asli->get_ming() . PHP_EOL;

?>

//This is an Inheritance PHP OOP CLASS
<?php
// Parents class
class Parents {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function intro() {
        echo "Parents name are {$this->name} and {$this->age} years old\n";
    }

}

// Children class inherited from Parents
class Child extends Parents {

    public function massage() {
        echo "Am I old or not?\n";
    }

    public function ifelse() {
        $a = $this->age;

    if ($a <= 22){
        echo "You're a young parents\n\n";
    } elseif ($a >= 23 && $a == 40) {
        echo "You're well age parents\n\n";
    } elseif ($a >= 40 && $a <= 99) {
        echo "You're Old!!!\n\n";
    } else{
        echo "You should be greatful because god give you that age\n\n";
    }
        }

}
$child = new Child("Sierra", 19);
$child->massage();
$child->intro();
$child->ifelse();

$child2 = new Child("Alexandra", 41);
$child2->massage();
$child2->intro();
$child2->ifelse();


?>