<?php
/ ** 
* it is call automatically whenever an object deleted or goes out of the scope at the runtime

*/

class Test{

    public function __construct(){
        echo "construct function calling"
    }

    public function hello(){
        echo "Hello function calling"
    }

    public function __destruct(){
        echo "construct function calling"
    }
}

$obj = new Test();
$obj->hello();

?>