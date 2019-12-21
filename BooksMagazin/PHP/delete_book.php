<?php
if (!empty($_POST['delete'])) {
    $delete = ($_POST['delete']);
    $sql2 = new mysqli('127.0.0.1', 'root', '', 'books');
    $sql2->query("DELETE FROM `book` WHERE `book`.`isbn` = '$delete'");
    $sql2->close();
    echo "$delete";
} else {
    $delete = null;
    echo "Error";
}

?>