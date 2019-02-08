<?php

$i = 0;
while ($i <= 10) {
    if ($i === 0){
        echo $i . " - это ноль<br>";
    } else if ($i & 1) {
        echo $i . " - нечетное число<br>";
    } else {
        echo $i . " - четное число<br>";
    }

    $i++;
}