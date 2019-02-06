<?php
echo "a: " . ($a = rand(-50, 49)) . "<br>";
echo "b: " . ($b = rand(-50, 49)) . "<br>";

if ($a >= 0 && $b >= 0) {
    echo "a - b is " . ($a - $b);
} else if ($a < 0 and $b < 0) {
    echo "a * b is " . ($a * $b);
} else {
    echo "a + b is " .  ($a + $b);
}