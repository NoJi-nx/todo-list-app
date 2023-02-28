<?php
session_start();
if (isset($_SESSION['username'])) {
  header('location: index.php');
}
include 'dbConnection.php';
if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  if (mysqli_query($conn, $query)) {
  $_SESSION['username'] = $username;
  $_SESSION['user_id'] = mysqli_insert_id($conn);
  header('location: index.php');
  } else {
  echo '<p>Error creating account</p>';
  }
  }
  ?>