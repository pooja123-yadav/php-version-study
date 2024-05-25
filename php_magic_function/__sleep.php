<?php
/*
it is call automatically whenever we serialize an object of a class. we use it ti clean serialized data then we can save
this serialized data into file, session, database 
*/

class Test{

    public $name = "pooja";
    public $course = "PHP";

    public function __sleep(){
        return ["name","course"];
    }

}

$obj = new Test();
$serialized_data = serialize($obj);
print_r($serialized_data);
?>