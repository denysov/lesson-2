<?php

interface Mail {
    /**
     * Send email
     * @param - $to
     */
    public function send($to, $from, $subject);
}

interface Flyible
{
    public function fly();
}

interface Swimable
{
    public function swim();
}

class Duck implements Flyible, Swimable {
    
    public function fly() {
        echo "Duck fly";
    }
    
    public function swim() {
        echo "Duck swim";
    }
}

class Client {
    
    private $duck;
    
    public function __construct(Flyible $duck) {
        $this->duck = $duck;
    }
    
    public function doFly() {
        $this->duck->fly();
    }
}

$duck = new Duck();

$client = new Client($duck);
$client->doFly();