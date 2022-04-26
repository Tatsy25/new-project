<pre>
<?php
$result2 = [
    'authors' => [
        [
            'fullName' => 'Достоевский Ф.М.',
            'email' => 'sanekpyshka@gmail.com'
        ],
        [
            'fullName' => 'Грибоедов А.С.',
            'email' => 'alexandrgrib@mail.ru'
        ],
    ],
    'books' => [
        [
            'title' => 'Братья Казамазовы',
            'email' => 'info@dostoevskyi.ru'
        ],
        [
            'title' => 'Горе от ума',
            'email' => 'alexandrgrib@mail.ru'
        ]
    ],
];

var_dump('В нашей библиотеке точно есть две книги, которые вы ищете: ' . $result2['books']['title']['title']);
var_dump('Пожалуйста, перестаньте писать гневные письма на адрес нашего любимого автора ' . $result2['authors']['fullName'] . ' (' . $result2['authors']['email'] . ')');
var_dump('Пишите их лучше другому нашему автору — ' . $result2['authors']['fullName'] . ' (' . $result2['authors']['email'] . ')' . ' , мы его любим поменьше.');

?>
</pre>