<?php
$grades = [85, 92, 78, 88, 95];
function numbers($n)
{
    rsort($n);
    print_r($n);
}
numbers($grades);
