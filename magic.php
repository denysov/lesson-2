<?php

class MethodTest {
    public function __call($name, $arguments) {
        echo "Вызов метода '$name' "
             . implode(', ', $arguments). "\n";
    }

    /**  Начиная с версии PHP 5.3.0  */
    public static function __callStatic($name, $arguments) {
        echo "Вызов статического метода '$name' "
             . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('в контексте объекта');