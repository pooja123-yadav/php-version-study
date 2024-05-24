<?php
// The nullable type was introduced in PHP 7.1.
function upper(?string $str): string
{
    return strtoupper($str);
}

$str = null;
echo upper($str);
