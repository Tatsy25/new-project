<?php

// 1
/* $a = 6;
$b = 10 * rand(1, 3);

if ($a * $b < 100) {
    echo "меньше 100";
} elseif ($a * $b < 200) {
    echo "меньше 200";
} else {
    echo "все остальное";
} */

$a = rand(1, 9);
$b = 10 * rand(1, 3);
$c = $a * $b;

if ($a * $b < 100) {
    echo "меньше 100";
} elseif ($a * $b < 200) {
    echo "меньше 200";
} else {
    echo "все остальное!";
}