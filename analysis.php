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
  <title>Analysis - MedVision</title>
  <link rel="stylesheet" href="style.css" />
  
  <style>
    .model-desc {
      display: none;
      font-size: 12px;
      color: #666;
      margin-top: 5px;
    }
    .model-card:hover .model-desc {
      display: block;
    }
    .model-icon {
      height: 40px;
      width: auto;
      margin-bottom: 8px;
    }
  </style>
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
        <li><a href="analysis.php" class="active">Analysis</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>

  <main>
    <section class="analysis-section">
      <h1 id="pageTitle">Brain Scan Analysis</h1>

      <div class="model-selector">
        <div class="model-card active" onclick="selectModel('brain', this)" id="btn-brain">
          <img src="images/brain_icon.png" class="model-icon" alt="Brain Icon">
          <h3>Brain Tumor</h3>
          <p class="model-desc">Detects tumors in MRI scans</p>
        </div>

        <div class="model-card" onclick="selectModel('hernia', this)" id="btn-hernia">
          <img src="images/hernia_icon.png" class="model-icon" alt="Spine Icon">
          <h3>Disc Hernia</h3>
          <p class="model-desc">Identifies spinal disc herniation</p>
        </div>

        <div class="model-card" onclick="selectModel('breast', this)" id="btn-breast">
          <img src="images/breast_icon.png" class="model-icon" alt="Breast Icon">
          <h3>Breast Cancer</h3>
          <p class="model-desc">Analyzes mammograms for cancer</p>
        </div>
      </div>

      <div id="uploadBox" class="upload-container">
        <div class="upload-icon">
          <img src="images/upload_icon.png" alt="upload icon" />
        </div>
        <h2 id="uploadTitle">Upload Brain Scan</h2>
        <p>Select MRI or CT scan (DICOM format)</p>

        <input type="file" id="fileInput" accept=".dcm,.dicom,image/*" onchange="processFile()" />
        <button class="btn" onclick="document.getElementById('fileInput').click()">
          Choose File
        </button>
      </div>

      <div id="loadingBox" class="loading-container" style="display: none">
        <div class="spinner"></div>
        <h2 id="loadingText">Analyzing Brain Scan...</h2>
        <p>Processing with AI model</p>
      </div>

      <div id="resultBox" class="result-container" style="display: none">
        <div class="result-header">
          <div class="success-icon">✓</div>
          <h2>Analysis Complete</h2>
        </div>

        <div class="result-image">
          <img id="outputImage" src="images/brain-tumor-detected.png" alt="Analysis Result" />
        </div>

        <div class="result-info">
          <div class="info-item">
            <p>Model Used</p>
            <strong id="res-model">Brain Tumor Detection</strong>
          </div>
          <div class="info-item">
            <p>Status</p>
            <strong id="res-status">Tumor Detected</strong>
          </div>
          <div class="info-item">
            <p>Confidence</p>
            <strong id="res-conf">94.5%</strong>
          </div>
          <div class="info-item">
            <p>Location</p>
            <strong id="res-loc">Left temporal lobe</strong>
          </div>
        </div>

        <button class="btn" onclick="resetAnalysis()">
          Analyze Another Scan
        </button>
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
  <script src="script.js"></script>

</body>

</html>