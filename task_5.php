<?php
$length = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
function generatePassword($n)
{
    echo substr(str_shuffle($n), 2, 12);
}
generatePassword($length);
