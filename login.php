<?php
session_start();
$error_maseg = "";

if (isset($_POST['username'])) {

$conn = new PDO("mysql:host=localhost;port=3307;dbname=medvision", "root", "");

$u = $_POST['username'];
$p = $_POST['password'];

$user = $conn->query("SELECT * FROM users WHERE username = '$u' AND password = '$p'")->fetch();

    if ($user) {
        $_SESSION['my_user'] = $user['username'];
        $_SESSION['my_name'] = $user['full_name'];
        header("Location: index.php");
        exit();
    } else {
        $error_maseg = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - MedVision</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="login-container">
    <div class="login-box">
      <div class="login-logo">
        <img src="images/logo.png" alt="MedVision Logo" />
      </div>
      <h1>MedVision</h1>
      <p>Please login to continue</p>

      <?php 
        if ($error_maseg != "") {
            echo "<p style='color: red; text-align: center;'>" . $error_maseg . "</p>";
        }
      ?>

      <form action="" method="POST">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />

          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />

        <button type="submit" class="btn login-botton">Login</button>
      </form>
    </div>
  </div>
</body>
</html>