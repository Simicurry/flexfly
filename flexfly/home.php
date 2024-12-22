<?php
session_start();

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
  header('Location: index.html');
  exit();
}

// User is logged in, display home page
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <style>
    /* CSS styles */
  </style>
</head>
<body>
  <div class="container">
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is your home page.</p>
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>