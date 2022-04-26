<pre>
<?php

//1
$animals = [
    'mouse' => 'это животное грызун',
    'horse' => 'скачет по полям',
    'pig' => 'кушает желуди'
];

//2
$animals['mouse'] = [
    'feature' => 'это животное грызун',
    'legs' => 4,
    'tail' => 'лысый'
];
$animals['horse'] = [
    'feature' => 'скачет по полям',
    'legs' => 4,
    'tail' => 'пушистый'
];
$animals['pig'] = [
    'feature' => 'кушает желуди',
    'legs' => 4,
    'tail' => 'крючком'
];

$animals = [
    'mouse' => [
        'description' => 'это животное грызун',
        'legsCount' => 4,
        'tail' => 'лысый',
    ],
    'horse' => [
        'description' => 'скачет по полям',
        'legsCount' => 4,
        'tail' => 'крючком',
    ],
    'pig' => [
        'description' => 'кушает желуди',
        'legsCount' => 4,
        'tail' => 'крючком',
    ],
];

//3
$animals['mouse']['tail'] = [
    'type' => 'лысый',
    'length' => 10
];
$animals['horse']['tail'] = [
    'type' => 'пушистый',
    'length' => 50
];
$animals['pig']['tail'] = [
    'type' => 'крючком',
    'length' => 4
];

$animals = [
    'mouse' => [
        'description' => 'это животное грызун',
        'legsCount' => 4,
        'tail' => [
            'type' => 'лысый',
            'length' => 10
        ],
    ],
    'horse' => [
        'description' => 'скачет по полям',
        'legsCount' => 4,
        'tail' => [
            'type' => 'пушистый',
            'length' => 50
        ],
    ],
    'pig' => [
        'description' => 'кушает желуди',
        'legsCount' => 4,
        'tail' => [
            'type' => 'крючком',
            'length' => 4
        ],
    ],
];

//4
$buildings = [
    'livingHouse' => [
        'name' => 'Жилой дом',
        'stages' => 2,
        'color' => 'blue'
    ],
    'stables' => [
        'name' => 'Стойла',
        'stages' => 1,
        'color' => 'green'
    ],
    'booth' => [
        'name' => 'Будка',
        'stages' => 1,
        'color' => 'red'
    ],
    'eliteGarage' => [
        'name' => 'Элитный-гараж',
        'stages' => 5,
        'color' => 'black'
    ],
]; 

//5
$animals['mouse']['address'] = 'livingHouse';
$animals['horse']['address'] = 'stable';
$animals['pig']['address'] = 'stable';

//6
$farm = [
    'animals' => $animals,
    'buildings' => $buildings
];

//7
var_dump($farm['animals']['pig']['legs']);
var_dump($farm['buildings']['booth']['color']);
var_dump($farm['animals']['horse']['tail']['length']);

$animal = 'pig';

var_dump($animals[$animal]);

var_dump($animals['mouse']['address']);

?>
</pre>