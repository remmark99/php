<?php
$a = 1123;
$b = 25435;

$a ^= $b;
$b = $a ^ $b;
$a ^= $b;

echo $a, $b;