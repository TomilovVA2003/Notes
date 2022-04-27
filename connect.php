<?php
$connect = mysqli_connect('localhost', 'root', '', 'notes');
if(!$connect) {
  die('Ошибка подключения к БД');
}