<?php
/*
it is call automatically whenever we try to echo or print an object of a class
*/

class Test{

    public function __toString(){
        return "Can't print object as a string of class: ".get_class($this);
    }

}

$obj = new Test();
echo $obj;

?>