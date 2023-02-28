 <!--Funktioner för registrering-->

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

 <!--Formulär för registreringen -->
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body>
  <div class="container">
    <form action="" method="POST">
      <h1>Register</h1>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
  </div>
</body>
</html>