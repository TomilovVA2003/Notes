<?
include("connect.php");

$name = $_POST['name'];
$text = $_POST['text'];

mysqli_query($connect, "INSERT INTO `notes` (`id`, `name`, `text`) VALUES (NULL, '$name', '$text')");

header('Location: http://localhost/Notes/Notes.php');
?>
