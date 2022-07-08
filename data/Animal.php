<?php

namespace Data;

abstract class Animal
{
    public string $nama;

    abstract public function run(): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "$this->name(Cat) is running" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "$this->name(Dog) is running" . PHP_EOL;
    }
}
?>