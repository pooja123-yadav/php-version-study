<?php
	class test{
	  public function abc(string $name, int $age, int $height): int {
	    return $age;
	    }
	}
	$obj = new test();
	echo $obj->abc("pooja","pooja",5.3);
?>

<?php
	class test{
	  public function abc(string $name, int $age, int|float $height): int|float {
	    return $age;
	    }
	}
	$obj = new test();
	$res = $obj->abc("pooja",32,5.3);
	echo $res;
	
?>
