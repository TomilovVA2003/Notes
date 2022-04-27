<?
include("connect.php");

$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `notes` WHERE `notes`.`id` = '$id'");

header('Location: http://localhost/Notes/Notes.php');
?>
