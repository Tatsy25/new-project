<?php

//1
$isGood = true;
$smallNumber = 3;
var_dump($isGood+$smallNumber);

//2
$firstDay = 'Понедельник';
$secondDay = 'Вторник';
$Day3 = 'Среда';

var_dump($firstDay . ' ' . $secondDay . ' ' . $Day3);

//3
$catsCount = 6;
var_dump("Во дворе котов: $catsCount");

//4
$currentDate = '2022-01-23';
var_dump("Шла зима. Календарь неумолимо показывает $currentDate. Эх, скорей бы лето");
var_dump('Шла зима. Календарь неумолимо показывает $currentDate. Эх, скорей бы лето');

//5
$catName = 'Мурзик';
$legsCount = 4;
$earsCount = 2;
$tailLenght = 27;
$catColor = 'черного';
$legsColor = 'белого';
$oilColor = 'черного';
$basin = 'тазик';
$oil = 'с мазутом';

var_dump("Жил был кот по имени $catName");
var_dump("У него было $legsCount лапы, $earsCount уха и хвост длинной $tailLenght см");
var_dump("Сам он был $catColor цвета, но лапки были $legsColor цвета");
var_dump("Однажды он пошел гулять и упал в $basin $oil");
var_dump("Теперь и лапы нашего кота тоже $oilColor цвета");