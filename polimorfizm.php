<?php

interface Flyible
{
    public function fly();
}

abstract class Animal  {
    
    static function getName() {
        echo self::class . PHP_EOL;
    }
    
    abstract protected function performMove();
    
    public function move() {
        echo static::class . PHP_EOL;
        $this->performMove();
    }
}

class Duck extends Animal {
    protected function performMove() {
        echo "Fly in sky" . PHP_EOL;
  
    }
}

class Rabbit extends Animal {
    
    abstract function test();
    
    const TEST = '1';
    
    protected function performMove() {
        echo "Run in forest" . PHP_EOL;
    }
    
}

echo Duck::getName() . PHP_EOL;

$animal1 = new Duck();
$animal1->move();

$animal2 = new Rabbit();
$animal2->move();