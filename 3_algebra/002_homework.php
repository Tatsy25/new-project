<pre>
<?php
// 1, 9, 10
$number = [1, 2, 3];
$numberNine = $number[2];
var_dump($number);
var_dump($numberNine);

$number[2] = 3.14;
var_dump($number[2]);


// 2
$lines = ['один', 'два', 'три'];
var_dump($lines);


// 3
$one = [
    34 => 8
];
var_dump($one);

// 4
$dictionary = [
    "мышь" => "животное грызун",
    "конь" => "скачет по полям",
    "хрюшка" => "кушает желуди"
];

// 5
$dictionary = [
    "mouse" => "животное грызун",
    "horse" => "скачет по полям",
    "pig" => "кушает желуди"
];

// 6, 7, 8
$elementMouse = $dictionary["mouse"];
$elementHorse = $dictionary["horse"];
$elementPig = $dictionary["pig"];
var_dump($dictionary);
var_dump($elementMouse);
var_dump($elementHorse);
var_dump($elementPig);


// 11. Создайте массив $days, состоящий из дней недели, сделайте ключи этого массива равными номеру дня в неделе от 1 до 7,
// а значениями сделайте строку с названием дня, 1 - Понедельник, 2 - Вторник и т.д.
$days = [
    1 => "понедельник",
    2 => "вторник",
    3 => "среда",
    4 => "четверг",
    5 => "пятница",
    6 => "суббота",
    7 => "воскресенье"
];
var_dump($days);

?>
</pre>