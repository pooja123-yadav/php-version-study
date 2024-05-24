

<?php 
// this introduce in php 5.6
// PHP 5.6 introduced the ... operator. When you place the ... operator in front of a function parameter,
// the function will accept a variable number of arguments, and the parameter will become an array inside the function. For example:

function test(...$numbers){
  return array_sum($numbers);
}

echo test(1,2,3);

// this introduce in php 7.4
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$combinedArray = [...$array1, ...$array2];

print_r($combinedArray);
