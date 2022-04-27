<?php
require_once 'connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$text = $_POST['text'];

mysqli_query($connect, "UPDATE `notes` SET `name` = '$name', `text` = '$text' WHERE `notes`.`id` = '$id'");

header('Location: http://localhost/Notes/Notes.php');
?>