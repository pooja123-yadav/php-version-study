<?php
// the __clone method is a magic method that is called when an object is cloned using the clone keyword. 
// The purpose of the __clone method is to allow the customization of the cloning process.
// Deep Copy: If the object contains references to other objects, __clone can ensure that these references
//  are also cloned, creating a deep copy instead of a shallow copy.
// Private Clone Method: In singleton patterns or other design patterns where cloning is undesirable, 
// the __clone method is often made private to prevent cloning.


class student{
    public $name;
    public $course;
    
    public function __construct($name){
        $this->name = $name;
    }
    
    public function setCourse(Course $c){
        $this->course = $c;
    }
    
    public function __clone(){
        $this->course = clone $this->course;
    }
}

class Course{
    public $cname;

    public function __construct($cname){
        $this->cname = $cname;
    }
}

$student1 = new student("Pooja Yadav");

// $student2 = $student1;
// $student2->name = "Poonam yadav";
// echo $student2->name;
// echo $student1->name;
// Default when we copy an object to a variable it copy object by reference

// $student2 = clone $student1;
// $student2->name = "Poonam yadav";
// echo $student2->name;
// echo $student1->name;

// here clone is used to copy class object by value 

$course = new Course("PHP");
$student1->setCourse($course);

$student2 = clone $student1;
$student2->name = "Poonam yadav";
$student2->course->cname = "Python";
print_r($student1);
print_r($student2);

// but it will not work for nested object, In nested object it will copy object by reference
// to overcome this  we use __clone method
