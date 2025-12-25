<?php
session_start();
if (!isset($_SESSION['my_user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MedVision - Advanced AI Medical Diagnosis</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <nav>
    <div class="container">
      <div class="logo">
        <img src="images/logo.png" alt="MedVision Logo" />
        <span>MedVision</span>
      </div>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="analysis.php">Analysis</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>

  <main>
    <section class="header">
    <h1>Welcome, <span style="color: #4fa3ff; font-weight: bold;"><?php echo $_SESSION['my_name']; ?></span></h1>
      <h1>AI-Powered Medical Diagnostics</h1>
      <p>Fast and accurate AI detection for different medical scans.</p>
      <a href="analysis.php" class="btn">Start Analysis</a>
    </section>

    <section class="features">
      <div class="features-box">
        <div class="icon">
          <img src="images/multiscan.png" alt="multi scan Icon" />
        </div>
        <h3>Supports Many Scans</h3>
        <p>Works with different types of medical images.</p>
      </div>
      <div class="features-box">
        <div class="icon">
          <img src="images/fast.png" alt="fast Icon" />
        </div>
        <h3>Fast Results</h3>
        <p>Get the report in seconds.</p>
      </div>
      <div class="features-box">
        <div class="icon">
          <img src="images/safe.png" alt="safe Icon" />
        </div>
        <h3>Safe & Private</h3>
        <p>Your uploaded files are fully protected.</p>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; MedVision</p>

    <div class="footer-social">
    <a href="logout.php" style="color: #ff7777; font-weight: bold;">Logout</a>
      <span style="color: #555;">|</span>
      <a href="https://x.com" target="_blank">X</a>
      <a href="https://instagram.com" target="_blank">Instagram</a>
      <a href="https://facebook.com" target="_blank">Facebook</a>
    </div>
  </footer>
</body>

</html>