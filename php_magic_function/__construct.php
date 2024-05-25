<?php
/ ** 
* it is call automatically whenever an object created at the runtime

*/

class Test{

    public function __construct(){
        echo "construct function calling"
    }
}

$obj = new Test();


?>