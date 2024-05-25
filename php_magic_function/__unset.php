<?php
class student{
    
    public $course = "PHP";
    private $first_name;
    private $last_name;
    
    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    
    public function __unset($property){
      unset($this->first_name);
    }
   
}

$obj = new student();
$obj->setName("Pooja", "Yadav");
print_r($obj);

unset($obj->course); // we can unset public property outside the class
print_r($obj);

unset($obj->first_name); // we cannot unset private property outside the class 
// to do this  __unset magic function used it is called whenwver unset fucntion 
// called on private property outside the class
print_r($obj); 