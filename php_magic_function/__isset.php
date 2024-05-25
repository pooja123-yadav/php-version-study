<?php
// it is call when an class object check isset for private property from outside the class it is always  show false
// to do this we use __isset() which is used to check the isset on private property of a class

class student{
    
    public $course = "PHP";
    private $first_name;
    private $last_name;
    
    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    
    public function __isset($property){
     return isset($this->$property);
    }
   
}

$obj = new student();
$obj->setName("Pooja", "Yadav");
echo isset($obj->course);
echo isset($obj->first_name);

