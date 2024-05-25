<?php
// It is call automaticaaly whenever we call an object of a class as function it is called.


class Calculator{
   
    public function __construct(public int $a, public int $b){

    }

    public function Sum(){
        echo $this->a + $this->b;
    }
    
    public function __invoke(){
        echo $this->a + $this->b;
        echo "Your are calling object as a method";
    }
}

$obj = new Calculator(10,20);
// $obj->Sum();
$obj();