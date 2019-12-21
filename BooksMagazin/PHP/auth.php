<?php
if (!empty($_POST['login'])) {
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
} else {
    $login = null;
    echo "Error";
}
if (!empty($_POST['password'])) {
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
} else {
    $password = null;
    echo "Error";
}
if (mb_strlen($login) < 5 && mb_strlen($login) > 20) {
    echo "Недопустимая длина логина (Промежуток от 5 до 20)";
    exit();
} else if (mb_strlen($password) < 6 && mb_strlen($password) > 22) {
    echo "Недопустимая длина пароля (Промежуток от 6 до 22)";
    exit();
}
if ($password != null) {
    $password = md5($password);
}
if ($login = 'admin' && $password = 'admin') {
    echo "<!doctype html>
    <html lang='ru'>
    <head>
    <meta charset='UTF-8'>
                 <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
                             <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                 <title>Админ - Книжный город</title>
                 <link rel='stylesheet' href='../CSS/admin.css'>
    </head>
    <body>
      <div class=\"header\">
      <div class='home'><a href='/'>Вернуться на index</a></div>
      <div class='hello'><span>Добро пожаловать Администратор</span></div>
</div>

<div class='add_book'>
<form action='add_book.php' method='post'>
<div class='message_add'>
<span>Добавление книги</span>
</div>
<div>
<p>Добавьте isbn:</p>
<input type='text' name='isbn'>
</div>
<div>
<p>Добавьте title:</p>
<input type='text' name='title'>
</div>
<div>
<p>Напишите название картинки с расширенеим, заранее сохранённое в папке</p>
<input type='text' name='img'>
</div>
<div>
<p>Добавьте genre:</p>
<input type='text' name='genre'>
</div>
<div>
<p>Добавьте price:</p>
<input type='text' name='price'>
</div>
<div>
<p>Добавьте author_id</p>
<input type='text' name='author_id'>
</div>
<div>
<p>Добавьте author:</p>
<input type='text'  name='author'>
</div>
<div class='submit12'>
<input type='submit' value='Добавить'>
</div>
</form>
</div>

<div class='delete_book'>
<form action='delete_book.php' method='post'>
<div class='message_delete'>
Удаление книги
</div>
<div>
<p>Введите isbn книги которую хотите удалить</p>
<input type='text' name='delete'>
</div>
<div class='submit12'>
<input type='submit' value='Удалить'>
</div>
</form>
</div>
    </body>
    </html>
";

} else if ($login != null && $password != null) {
    $mysql = new mysqli('localhost', 'root', '', 'books');
    $result = $mysql->query("SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
    $user = $result->fetch_assoc();
    if (count($user) == 0) {
        echo "Пользователь не найден";
        exit();
    }
    setcookie('user', $user['login'], time() + 3600 * 24);
    setcookie('user', $user['password'], time() + 3600 * 24);
    $mysql->close();
    echo "Добро пожаловать " . $_COOKIE['login'];

}



