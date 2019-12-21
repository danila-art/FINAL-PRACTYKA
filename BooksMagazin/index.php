<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Книжный магазин</title>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
    <div class="kodvigayus-ceyesyaovu">
        <input data-function="venudam" id="venudam" type="checkbox">
        <label data-function="venudam" for="venudam"></label>
        <label data-function="venudam" for="venudam"></label>
        <div class="gamburgerom">
            <nav class="bokovoye-menyu">
                <li><a href="HTML/fantastic.php">Фантастика</a></li>
                <li><a href="HTML/adventures.php">Приключения</a></li>
                <li><a href="HTML/mysticism.php">Мистика</a></li>
                <li><a href="HTML/detectives.php">Детективы</a></li>
                <li><a href="HTML/educational_literature.php">Учебная литература</a></li>
                <li><a href="HTML/womens_novels.php">Женские романы</a></li>
                <li><a href="HTML/scientific_book.php">Научные книги</a></li>
                <li><a href="HTML/classic.php">Классика</a></li>
                <li><a href="HTML/historical_book.php">Исторические книги</a></li>
            </nav>
        </div>
    </div>
    <div class="book_city">
        <img src="images/book_city.jpeg" alt="" id="book_city">
    </div>

    <div class="autorization">
        <a href="HTML/autorization/registration.html"><img src="images/icon8.png" alt="" id="button1"></a>
    </div>
    <div class="box_busket">
        <a href=""><img src="images/busket.png" alt="" id="box_busket"></a>
    </div>
</div>
<!-----------------------------------------------------PHP------------------------------------------------>
<div class="main">
<?php
$sql = new mysqli('127.0.0.1', 'root', '', 'books');
$sql_vivod = $sql->query("SELECT * FROM `book`");
while ($result = mysqli_fetch_array($sql_vivod)){

    echo "<div class='box_book'>
          <div class='gray_line'><span id='title'>{$result['title']}</span></div>
          <div class='box_book_image'><form action='PHP/more.php' method='post'><input type='text' value='{$result['isbn']}' name='isbn' id='none'><img src='images/books/{$result['img']}' alt = 'error'><input type='submit' value='Подробнее' id='submit'></form></div>
          <div class='flex'>
          <div class='price'><span id='price'>{$result['price']} руб.</span></div>
          <div class='buy'><a href=''>Купить</a></div></div>
</div>
";
}
?>
</div>

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

</body>
</html>