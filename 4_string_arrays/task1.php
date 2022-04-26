<pre>
<?php
$number1 = rand(0, 10);
$number2 = rand(0, 10);

// 1
$sum = $number1 + $number2;
$diff = $number1 - $number2;
$mult = $number1 * $number2;
$div = $number1 / $number2;

// 2
var_dump($sum);
var_dump($diff);
var_dump($mult);
var_dump($div);

//  3
var_dump($number1 > $number2);
var_dump($number1 < $number2);
var_dump($number1 = $number2);

// 4
$ink = ++$number1;
var_dump($ink);

$decr = --$number2;
var_dump($decr);

?>
</pre>