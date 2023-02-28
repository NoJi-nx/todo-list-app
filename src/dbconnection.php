<?php

//Anslutning till databasen

$conn = mysqli_connect('db', 'root', 'example', 'todo_list');

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}
?>

