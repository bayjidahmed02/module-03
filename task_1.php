<?php
$text = 'The quick brown fox jumps over the lazy dog';
function modifiedText($brownToRed)
{
    $lower = strtolower($brownToRed);
    $replaceText = str_replace('brown', 'red', $lower);
    echo $replaceText;
}
modifiedText($text);
