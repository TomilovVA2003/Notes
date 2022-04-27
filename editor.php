<?php 
include("connect.php");

$id = ($_GET['id']);

$name = mysqli_query($connect, "SELECT * FROM `notes` WHERE `id`='$id'");
$text = mysqli_fetch_assoc($name);
?>

<!DOCTYPE html>
<html>

<head>

  <title>Ваши заметки</title>
  <link rel="stylesheet" href="style.cs">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
</head>

<body>

<h2 class="is-h">Изменение заметки</h2>

<form action="update.php" method="post">

  <input type="hidden" name="id" value="<?=$id?>">
  <input type="text" name="name" value ="<?=$text['name']?>" placeholder="Название ..." class="form-control"><br>
  <input type="text" name="text" value ="<?=$text['text']?>" placeholder="Текст ..." class="form-control"><br>
  <button type="submit" name="sendTask" class="btn btn-success">Изменить</button>

</form>

