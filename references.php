<?php

class A {
    public $var;
}



$a1 = new A();
$a1->var = 10;

$a2 = $a1;
$a2->var = 20;

echo $a1->var . PHP_EOL;
echo $a2->var . PHP_EOL;