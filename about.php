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
  <title>MedVision - About</title>
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
        <li><a href="index.php">Home</a></li>
        <li><a href="analysis.php">Analysis</a></li>
        <li><a href="about.php" class="active">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>

  <main class="about-main">

  <!-- Header Section -->
  <div class="header">
    <img id="about-picture" src="images/about-photo.png"  />
    <h1>About MedVision</h1>
    <p>
      MedVision is an AI-powered medical tool built to help analyze medical images using AI.  
      Our system supports three types of analysis:
      <strong>Brain Tumor Detection</strong>, <strong>Spinal Disc Hernia Detection</strong>, and
      <strong>Breast Cancer Detection</strong>.  
      We created this platform to make medical image analysis easier, faster, and clearer.
    </p>
  </div>



  <!-- Features Section -->
  <div class="features">
    <div class="features-box">
      <h3>Our Mission</h3>
      <p>
        Our goal is to build a simple tool that helps doctors analyze different medical scans
        with better accuracy and less time.
      </p>
    </div>

    <div class="features-box">
      <h3>Our Vision</h3>
      <p>
        We hope that MedVision can grow to support more types of medical images and become a helpful
        learning tool for healthcare workers.
      </p>
    </div>

    <div class="features-box">
      <h3>Why MedVision?</h3>
      <p>
        MedVision combines three different AI models in one place, making it easy to upload images and get
        fast predictions for brain, spine, and breast scans.
      </p>
    </div>
  </div>


  <!-- Values / Items Section -->
  <div class="about-values">
    <h2>Our Core Values</h2>
    <ul class="about-list">
      <li>Making medical image analysis easier for students and doctors.</li>
      <li>Using AI to support learning and decision-making.</li>
      <li>Focusing on simplicity and clear results.</li>
      <li>Improving the models step by step as we learn more.</li>
    </ul>
  </div>

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