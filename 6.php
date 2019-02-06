<?php
$power = function ($val, $pow) use (&$power) {
    if ($pow == 1) {
        return $val;
    } else {
        return $val * $power($val, ($pow - 1));
    }
};

echo $power(12, 3);

