<?php
//Seession start, kika om användaren är inloggad
session_start();
if (!isset($_SESSION['username'])) {
  header('location: login.php');
}

include './dbConnection.php';   //Anslutning till databasen

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Lägga till uppgift
  if (isset($_POST['add_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO tasks (title, description, user_id) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $title, $description, $user_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  }

  // Ändra uppgift
  if (isset($_POST['edit_task'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "UPDATE tasks SET title=?, description=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $title, $description, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  }

  // Ta bort uppgift
  if (isset($_POST['delete_task'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM tasks WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  }

  // Markera som slutfört
  if (isset($_POST['mark_complete'])) {
    $id = $_POST['id'];
    $query = "UPDATE tasks SET completed=1 WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  }

  // Ej slutfört
  if (isset($_POST['mark_incomplete'])) {
    $id = $_POST['id'];
    $query = "UPDATE tasks SET completed=0 WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  }

  // Ta bort markerade  uppgifter
  if (isset($_POST['delete_completed'])) {
    $user_id = $_SESSION['user_id'];
    $query = "DELETE FROM tasks WHERE user_id=? AND completed=1";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $user_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  }
}

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM tasks WHERE user_id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Task List</title>
  <link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body>
<div class="header">
    <h1>Todo List</h1>
    <form action="logout.php">
      <button>Logout</button> <!--Logga utt knappen -->
    </form>
  </div>
  <div>
    <form method="POST">
      <input type="text" name="title" placeholder="Title" required>
      <textarea name="description" placeholder="Description" required></textarea>
      <button type="submit" name="add_task">Add Task</button>
    </form>
  </div>
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tasks as $task) { ?>
      <tr>
        <td><?php echo $task['title']; ?></td>
        <td><?php echo $task['description']; ?></td>
        <td>
          <?php if ($task['completed']) { ?>
            <span class="completed">Completed</span>
          <?php } else { ?>
            <span class="incomplete">Incomplete</span>
          <?php } ?>
        </td>
        <td>
          <?php if (!$task['completed']) { ?>
            <form method="POST">
              <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
              <button type="submit" name="mark_complete">Mark as Completed</button>
            </form>
          <?php } ?>
          <form method="POST">
            <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
            <input type="text" name="title" value="<?php echo $task['title']; ?>" required>
            <textarea name="description" required><?php echo $task['description']; ?></textarea>
            <button type="submit" name="edit_task">Update</button>
            <button type="submit" name="delete_task">Delete</button>
          </form>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <form method="POST">
    <button type="submit" name="delete_completed">Delete Completed Tasks</button>
  </form>
</body>
</html>



    