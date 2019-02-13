<?php
function removeNb($n)
{
    $sum = $n * ($n + 1) / 2; //Sum of the arithmetic sequence
    $result = []; //Array initialization
    for ($i = 1; $i < $n; $i++) {
        for ($j = $i + 1; $j <= $n; $j++) {
            if (($i * $j >= ($sum - $n * 2 + 1)) && ($i * $j <= ($sum - 3))) {
                if ($i * $j === $sum - $i - $j) {
                    $result[] = [$i, $j]; //Similar to push()
                    $result[] = [$j, $i];
                }
            }
        }
    }
    return $result;
}