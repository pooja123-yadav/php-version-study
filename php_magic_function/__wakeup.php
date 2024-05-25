<?php
/*
it is call automatically whenever we serialize an object of a class. we use it ti clean serialized data then we can save
this serialized data into file, session, database 
*/

class Test{

    public $name = "pooja";
    public $course = "PHP";
    private $conn;
    
    public function __construct(){
        $this->conn = mysqli_connect();
    }
    

    public function __sleep(){
        $this->conn = mysqli_close();
        return ["name","course"];
    }

    public function __wakeup(){
        echo "this is wakeup method";
        $this->conn = mysqli_connect();
    }

}

$obj = new Test();
$serialized_data = serialize($obj);
$un_ser_data = unserialize($serialized_data);
print_r($un_ser_data);
?>