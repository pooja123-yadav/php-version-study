<?php
// / ** 
// * it is call automatically whenever we try to access or call an non-existing and private method outside
//  the class.
// */

class Test{

    private $fname;
    private $lname;

    private function SetName($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function __call($method, $args){
        echo "Trying to access an non-existing and private method '".$method."' outside of the class: Test";
        if (method_exists($this, $method)){
            call_user_func_array([$this,$method], $args);
        } else {
            echo "Method '".$method."' does not exist.";
        } 
    }

}

$obj = new Test();
$obj->SetName("Pooja", "Yadav");

echo "<pre>";
print_r($obj);
echo "</pre>";

?>