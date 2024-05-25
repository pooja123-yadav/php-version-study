<?php
// / ** 
// * it is call automatically whenever we try to set an non-existing and private property outside of the class.
// */

class Test{

    private $name = null;

    public function __get($property){
        echo "Trying to access an non-existing and private property '".$property."' of the class: Test";
        if (property_exists($this, $property)) {
            return $this->$property;
        } else {
            echo "Property '".$property."' does not exist.";
        }

    }

    public function __set($property, $value){
        echo "Trying to set an non-existing and private property '".$property."' ofoutside of the class: Test";
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            echo "Property '".$property."' does not exist.";
        } 

    }

}

$obj = new Test();
$obj->name = "pooja";
echo $obj->name;

?>