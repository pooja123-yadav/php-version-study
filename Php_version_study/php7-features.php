<?php
// The nullable type was introduced in PHP 7.1.
function upper(?string $str): string
{
    return strtoupper($str);
}

$str = null;
echo upper($str);

// Starting from PHP 7.0, if a function doesn’t return a value, you use the void type

function dd($data):void
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}
// Use the PHP strict_types directive to enable strict typing or strict mode.
// In strict mode, PHP accepts only values corresponding to the type declarations and issue a TypeError exception if there’s a mismatch.
// When you include code from another file, PHP uses the mode of the caller.