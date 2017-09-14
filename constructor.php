<?php
class Person {
    
    private $name;
    
    public function getName() {
        echo $this->name . PHP_EOL;
    }
    
    public function __construct($name) {
        $this->name = $name;
    }
}

$person1 = new Person("Petya");
$person1->getName();