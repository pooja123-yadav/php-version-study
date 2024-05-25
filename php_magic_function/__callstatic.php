<?php
/*
it is call automatically whenever we try to access or call an non-existing and private static method outside
 the class.
*/

class Test{

    private $fname;
    private $lname;

    private static function hello(){
        echo "This is private static method";
    }

    public static function __callStatic($method, $args){
        if (method_exists(__class__, $method)){
            call_user_func_array([__class__,$method], $args);
        } else {
            echo "Method '".$method."' does not exist.";
        } 
    }

}

Test::hello();

?>