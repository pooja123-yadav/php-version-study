<?php
//  it is call automatically whenever we try to call an non-existing and private property of a class.


class Test{

    private $name = "abc";

    public function __get($property){
        echo "Trying to access an non-existing and private property '".$property."' of the class: Test";
        if (property_exists($this, $property)) {
            return $this->$property;
        } else {
            echo "Property '".$property."' does not exist.";
        }

    }

}

$obj = new Test();
echo $obj->name;

?>