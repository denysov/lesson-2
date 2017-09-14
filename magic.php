<?php

class Test {
    
    private $hidden = 'hidden value';
    
    private $duck;
    
    public function __call($varName, $varValue) {
        return $this->$varName;
    }
    
}

$test = new Test();

echo $test->hiddensadasd;
