<?php
session_start();
if (isset($_SESSION['username'])) {
  header('location: index.php');
}
include 'dbConnection.php';
if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['user_id'] = $row['id'];
    header('location: index.php');
  } else {
    echo '<p>Incorrect username or password</p>';
  }
}
?>