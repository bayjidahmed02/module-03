<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function checkNumbers($n)
{
    $oddNumbers = array_filter($n, function ($number) {
        return $number % 2 !== 0;
    });
    print_r($oddNumbers);
}
checkNumbers($numbers);
