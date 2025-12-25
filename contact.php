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
  <title>MedVision - Contact</title>
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
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
      </ul>
    </div>
  </nav>

  <main class="contact-main">
    <div class="contact-section">
      <h1 class="contact-title">Contact Us</h1>

      <div class="result-container contact-container">
        <div class="result-header contact-header">
          <img src="images/contact.png" alt="Support Team" class="contact-support-img">        </div>

        <div class="result-info contact-info-grid">
          <div class="info-item contact-info-item">
            <p>Email</p>
            <strong>support@medvision.org</strong>
          </div>

          <div class="info-item contact-info-item">
            <p>Phone</p>
            <strong>+966 11 391 9000</strong>
          </div>

          <div class="info-item contact-info-item">
            <p>Address</p>
            <strong>As-Salam Road , Al Madinah Al Munawwarah</strong>
          </div>
        </div>
        <br />
        <p style="text-align: center">
          Or you can send us a message and we will respond to you as soon as
          possible.
        </p>
        <form id="contactForm" class="contact-form">
          <div class="info-item contact-form-item">
            <p>Name</p>
            <input id="name" type="text" placeholder="Enter your full name" required />
          </div>

          <div class="info-item contact-form-item">
            <p>Email</p>
            <input id="email" type="email" placeholder="Enter your email address" required />
          </div>

          <div class="info-item contact-form-item">
            <p>Subject</p>
            <input id="subject" type="text" placeholder="Message subject" required />
          </div>

          <div class="contact-message-wrapper">
            <p style="margin-top: 10px">Message</p>
            <br />
            <textarea id="message" placeholder="Type your message..." required></textarea>
          </div>

          <button type="submit" class="btn contact-btn" onclick="validateForm()">
            Send Message
          </button>
          <p id="error" style="color: #ff4d4d; margin-top: 15px; display: none">
            Please fill in all fields before submitting.
          </p>
        </form>
      </div>
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
  <script src="script.js"></script>
</body>

</html>