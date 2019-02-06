<?php

function add($first, $second)
{
    return $first + $second;
}

function sub($first, $second)
{
    return $first - $second;
}

function mult($first, $second)
{
    return $first * $second;
}

// Не целочисленный
function div($first, $second)
{
    return ($second !== 0) ? $first / $second : "Error!";
}

echo "First is " . ($first = rand(-10, 9)) . "<br>";
echo "Second is " . ($second = rand(-10, 9)) . "<br>";

echo "Addition: " . add($first, $second) . "<br>";
echo "Substraction: " . sub($first, $second) . "<br>";
echo "Multiplication: " . mult($first, $second) . "<br>";
echo "Division: " . div($first, $second) . "<br>";