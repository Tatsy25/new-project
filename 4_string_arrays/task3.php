<pre>
<?php
$result1 = [
    'author' => [
        'fullName' => 'Пушкин А.А.',
        'email' => 'sanekpyshka@gmail.com'
    ],
    'book' => [
        'title' => 'Капитанская дочка',
        'email' => 'sanekpyshka@gmail.com'
    ],
];

var_dump($result1['author']['fullName'] . ' написал книгу, которая называется ' . '"' . $result1['book']['title'] . '"');
var_dump('Автор ' . $result1['author']['fullName'] . ' ждет ваших отзывов, напишите ему на электронную почту ' . $result1['book']['email']);
?>
</pre>