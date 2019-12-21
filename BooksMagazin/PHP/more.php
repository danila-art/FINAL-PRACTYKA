<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Книжный магазин</title>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/stylesheetmore.css">
</head>
<body>
<div class="header">
    <div class="kodvigayus-ceyesyaovu">
        <input data-function="venudam" id="venudam" type="checkbox">
        <label data-function="venudam" for="venudam"></label>
        <label data-function="venudam" for="venudam"></label>
        <div class="gamburgerom">
            <nav class="bokovoye-menyu">
                <li><a href="../HTML/fantastic.php">Фантастика</a></li>
                <li><a href="../HTML/adventures.php">Приключения</a></li>
                <li><a href="../HTML/mysticism.php">Мистика</a></li>
                <li><a href="../HTML/detectives.php">Детективы</a></li>
                <li><a href="../HTML/educational_literature.php">Учебная литература</a></li>
                <li><a href="../HTML/womens_novels.php">Женские романы</a></li>
                <li><a href="../HTML/scientific_book.php">Научные книги</a></li>
                <li><a href="../HTML/classic.php">Классика</a></li>
                <li><a href="../HTML/historical_book.php">Исторические книги</a></li>
            </nav>
        </div>
    </div>
    <div class="warges">
        <div class="knopka_avd wsa_5r">
            <div>Главная</div>
            <div><a href="../index.php">Главная</a></div>
        </div>
    </div>
    <div class="book_city">
        <img src="../images/book_city.jpeg" alt="" id="book_city">
    </div>

    <div class="autorization">
        <a href="../HTML/autorization/registration.html"><img src="../images/icon8.png" alt="" id="button1"></a>
    </div>
    <div class="box_busket">
        <a href=""><img src="../images/busket.png" alt="" id="box_busket"></a>
    </div>
</div>
<!-----------------------------------------------------PHP------------------------------------------------>
<?php
$isbn = $_POST['isbn'];
$stranica = new mysqli('127.0.0.1', 'root', '', 'books');
$stranicavivod = $stranica->query("SELECT * FROM `book` INNER JOIN `interval1` ON `book`.isbn = `interval1`.isbn INNER JOIN `authors` ON `interval1`.author_id = `authors`.author_id where `book`.isbn = '$isbn'");
while ($result1 = mysqli_fetch_array($stranicavivod)){
echo "<div class='main_more'>
<div class='flex_more'>
<div id='more_box_image'><img src='../images/books/{$result1['img']}' alt=''></div>
<div class='more_title'>{$result1['title']}</div>
<div class='characteristic'>
<div class='more_oglav'>Характеристика</div>
<div class='more_isbn'>ISBN: {$result1['isbn']}</div>
<div class='more_title_2'>Название: {$result1['title']}</div>
<div class='more_genre'>Жанр: {$result1['genre']}</div>
<div class='more_price'>Цена: {$result1['price']} руб.</div>
</div>
</div>
</div>
";
break;
}

$stranicavivod = $stranica->query("SELECT * FROM `book` INNER JOIN `interval1` ON `book`.isbn = `interval1`.isbn INNER JOIN `authors` ON `interval1`.author_id = `authors`.author_id where `interval1`.isbn = '$isbn'");
$counter = 1;
while ($result1 = mysqli_fetch_array($stranicavivod)){
    echo " <div class='more_author_{$counter}'><div class='count_author'>Автор {$counter}:</div>
            <div class='more_authorsi'>{$result1['author']}</div>
            </div>";
    echo "<br>";
    $counter++;
}
?>
<!-----------------------------------------------------PHP------------------------------------------------>
<div class="futer">
    <div class="futer_flex">
        <div id="futer_box_1">
            <a href="" id="a_1"><span id="span_1">Web-design_RP31.ru</span></a><hr>

            <p>Все для Web-мастера, в системе php</p>
        </div>
        <div id="futer_box_2">
            <a href="" id="a_2">Помощь</a><hr><br>

            <a href="" id="a_3">Обратная связь</a><br><br>
            <a href="" id="a_4">Техническая поддержка</a>
        </div>
        <div id="futer_box_3">
            <a href="" id="a_5">Правила</a><hr><br>

            <a href="" id="a_6">Условия использования</a><br>
        </div>
    </div>
    <div id="black_line">
        <p>Copyright 2019 | RP-31</p>
    </div>
</div>
