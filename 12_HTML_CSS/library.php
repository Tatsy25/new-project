<?php

$library = [
    'authors' => [
        'john_makkormik@example.com' => [
            'name' => 'Джон Маккормик',
            'email' => 'john_makkormik@example.com',
            'birthYear' => 1972,
        ],
        'martin_robert@example.com' => [
            'name' => 'Мартин Роберт',
            'email' => 'martin_robert@example.com',
            'birthYear' => 1952,
        ],
        'martin_fauler@example.com' => [
            'name' => 'Мартин Фаулер',
            'email' => 'martin_fauler@example.com',
            'birthYear' => 1963,
        ],
    ],
    'books' => [
        [
            'title' => 'Чистый код: создание, анализ и рефакторинг',
            'author' => 'martin_robert@example.com',
            'year' => 2013,
        ],
        [
            'title' => 'Девять алгоритмов, которые изменили будущее',
            'author' => 'john_makkormik@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Идеальный программист',
            'author' => 'martin_robert@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Шаблоны корпоративных приложений',
            'author' => 'martin_fauler@example.com',
            'year' => 2002,
        ],
    ],
];

$title = 'Библиотека программиста';
$red = (bool) rand(0, 1);
$allAuthors = count($library['authors']);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1 <?= $red ? 'class="red"' : ''; ?>><?= $title; ?></h1>
<div>Авторов на портале <?= $allAuthors; ?></div>
<!-- Выведите все книги -->
<?php foreach ($library['authors'] as $author) : ?>
    <?php foreach ($library['books'] as $book) : ?>
        <p>Книга <b id="size"><?=$book['title']?></b>, ее написал <?=$author['name']?> <?=$author['birthYear']?> (<a href="url"><?=$author['email']?></a>).</p>
    <?php endforeach ?>
<?php endforeach ?>
</body>
</html>











