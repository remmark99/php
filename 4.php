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

// В задании было указано решить при помощи switch, но, честно говоря, не нашел лаконичного решения со switch'ом.
function mathOperation($first, $second, $operation)
{
    if (function_exists($operation)) {
        return $operation($first, $second);
    } else {
        return "Такой функции не существует";
    }
}

echo "First is " . ($first = rand(-10, 9)) . "<br>";
echo "Second is " . ($second = rand(-10, 9)) . "<br>";

echo mathOperation($first, $second, "sub");


