<!--Referens till dbConnection fil -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location: login.php');
}
include 'dbConnection.php';

//CRUD Metoden

//Visar uppgifter
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO tasks (title, description, user_id) VALUES ('$title', '$description', '$user_id')";
    mysqli_query($conn, $query);
  }
  
  //Ändra uppgifter
  if (isset($_POST['edit'])) {
    $task_id = $_POST['task_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "UPDATE tasks SET title='$title', description='$description' WHERE id='$user_id'";
    mysqli_query($conn, $query);
  }

  //Ta bort
if (isset($_POST['delete'])) {
    $user_id = $_POST['user_id'];
    $query = "DELETE FROM tasks WHERE id='$task_id'";
    mysqli_query($conn, $query);
  }
  
  //Markera
  if (isset($_POST['mark_complete'])) {
    $user_id= $_POST['user_id'];
    $query = "UPDATE tasks SET completed=1 WHERE id='$task_id'";
    mysqli_query($conn, $query);
  }
  
  //Ta bort markerade
  if (isset($_POST['delete_completed'])) {
    $user_id = $_SESSION['user_id'];
    $query = "DELETE FROM tasks WHERE user_id='$user_id' AND completed=1";
    mysqli_query($conn, $query);
  }
  $user_id = $_SESSION['user_id'];
  $query = "SELECT * FROM tasks WHERE user_id='$user_id'";
  $result = mysqli_query($conn, $query);
  ?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
  </head>
  <body>
    
  </body>
  </html>