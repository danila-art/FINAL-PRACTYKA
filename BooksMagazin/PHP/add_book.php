<?php
if (!empty($_POST['isbn'])) {
    $isbn = filter_var(trim($_POST['isbn']), FILTER_SANITIZE_STRING);
} else {
    $isbn = null;
    echo "Error";
}
if (!empty($_POST['title'])) {
    $title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
} else {
    $title = null;
    echo "Error";
}
if (!empty($_POST['img'])) {
    $img = filter_var(trim($_POST['img']), FILTER_SANITIZE_STRING);
} else {
    $img = null;
    echo "Error";
}
if (!empty($_POST['genre'])) {
    $genre = filter_var(trim($_POST['genre']), FILTER_SANITIZE_STRING);
} else {
    $genre = null;
    echo "Error";
}
if (!empty($_POST['price'])) {
    $price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
} else {
    $price = null;
    echo "Error";
}
if (!empty($_POST['$author_id'])) {
    $author_id = filter_var(trim($_POST['$author_id']), FILTER_SANITIZE_STRING);
} else {
    $author_id = null;
    echo "Error";
}
if (!empty($_POST['author'])) {
    $author = filter_var(trim($_POST['author']), FILTER_SANITIZE_STRING);
} else {
    $author = null;
    echo "Error";
}
$sql1 = new mysqli('127.0.0.1', 'root', '', 'books');
$sql1->query("INSERT  INTO `book`(`isbn`,`title`,`img`,`genre`,`price`,) values ('$isbn','$title','$img','$genre','$price')");
$sql1->query("INSERT INTO `interval1`(`isbn`,`author_id`) values ('$isbn','$author_id')");
$sql1->query("INSERT INTO `authors`(`author_id`,`author`) values ('$author_id','$author')");
$sql1->close();