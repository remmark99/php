<?php
$a = rand(0, 15);
echo $a . "<br>";

// Через goto, который никогда не надо использовать
mark:
switch ($a) {
    case (15):
        break;
    default:
        echo (++$a) . "<br>";
        goto mark;
}

// Через функцию с использованием рекурсии
//function mySwitch($var)
//{
//    switch ($var) {
//        case (15):
//            break;
//        default:
//            echo (++$var) . "<br>";
//            mySwitch($var);
//    }
//}
//
//mySwitch($a);