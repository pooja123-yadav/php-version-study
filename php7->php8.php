<?php
/*  
1. Union Types
*/
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

<?php
/*  
2. nullsafe operator Argument
*/
<?php
	// php  7
$country =  null;
$data = ["user"=>["address"=>["country"=>"India"]]];
$session = json_decode(json_encode($data, JSON_PRETTY_PRINT));

$country =  null;

if ($session !== null) {
  $user = $session->user;

  if ($user !== null) {
    $address = $user->address;
 
    if ($address !== null) {
      $country = $address->country;
    }
  }
}
echo $country;

?>

<?php
// php 8
$country =  null;
$data = ["user"=>["address"=>["country"=>"India"]]];
$session = json_decode(json_encode($data, JSON_PRETTY_PRINT));

$country = $session?->user?->address?->country;
echo $country;

?>


<?php
/* constructor property promotion  */
class BankAccount
{
	function __construct(public $accountNumber, public $balance)
	{}
}
$b = new BankAccount(12345,100);
?>

<?php
class BankAccount
{
	function __construct(public $accountNumber, public $balance){}
}

$b = new BankAccount(12345,100);
echo $b->balance;
?>
