//طه
// File upload handler
const fileInput = document.getElementById('fileInput');
if (fileInput) {
  fileInput.addEventListener('change', function () {
    if (this.files.length > 0) {
      startAnalysis();
    }
  });
}

// Start analysis function
function startAnalysis() {
  document.getElementById('uploadBox').style.display = 'none';
  document.getElementById('loadingBox').style.display = 'block';

  setTimeout(function () {
    document.getElementById('loadingBox').style.display = 'none';
    document.getElementById('resultBox').style.display = 'block';
  }, 5000);
}

// Reset analysis function
function resetAnalysis() {
  document.getElementById('uploadBox').style.display = 'block';
  document.getElementById('loadingBox').style.display = 'none';
  document.getElementById('resultBox').style.display = 'none';
  document.getElementById('fileInput').value = '';
}

// 1. CONFIGURATION: Define the "Fake" data for each model
const models = {
  brain: {
    title: "Brain Scan Analysis",
    uploadTitle: "Upload Brain Scan",
    resultImg: "images/brain-tumor-detected.png", // Existing image
    modelName: "Brain Tumor Detection",
    status: "Tumor Detected",
    location: "Left temporal lobe"
  },
  hernia: {
    title: "Spine Scan Analysis",
    uploadTitle: "Upload Spine MRI",
    resultImg: "images/lumbar.png", // CHANGE THIS PATH LATER
    modelName: "Disc Hernia Detection",
    status: "Herniation Detected",
    location: "L4-L5 Lumbar Disc"
  },
  breast: {
    title: "Mammogram Analysis",
    uploadTitle: "Upload Mammogram",
    resultImg: "images/breast.png", // CHANGE THIS PATH LATER
    modelName: "Breast Cancer Detection",
    status: "Abnormality Detected",
    location: "Upper Outer Quadrant"
  }
};

let currentModelKey = 'brain'; // Default

// 2. FUNCTION: Handle Model Selection
function selectModel(key, element) {
  currentModelKey = key;
  const data = models[key];

  // Update UI Text
  document.getElementById('pageTitle').innerText = data.title;
  document.getElementById('uploadTitle').innerText = data.uploadTitle;

  // Update Active Class on Buttons
  document.querySelectorAll('.model-card').forEach(card => card.classList.remove('active'));
  element.classList.add('active');

  // Reset view if result was showing
  resetAnalysis();
}

// 3. FUNCTION: Simulate Processing
function processFile() {
  const fileInput = document.getElementById('fileInput');
  if (fileInput.files.length > 0) {
    // Hide Upload, Show Loading
    document.getElementById('uploadBox').style.display = 'none';
    document.getElementById('loadingBox').style.display = 'block';
    document.getElementById('loadingText').innerText = `Analyzing ${currentModelKey} scan...`;

    // Simulate 2 second delay
    setTimeout(() => {
      showResults();
    }, 2000);
  }
}

// 4. FUNCTION: Show Specific Results
function showResults() {
  const data = models[currentModelKey];

  document.getElementById('loadingBox').style.display = 'none';
  document.getElementById('resultBox').style.display = 'block';

  // Inject Dynamic Data
  document.getElementById('outputImage').src = data.resultImg;
  document.getElementById('res-model').innerText = data.modelName;
  document.getElementById('res-status').innerText = data.status;
  document.getElementById('res-loc').innerText = data.location;

  // Randomize confidence slightly for effect
  const randomConf = (Math.random() * (99 - 85) + 85).toFixed(1);
  document.getElementById('res-conf').innerText = randomConf + "%";
}

// 5. FUNCTION: Reset
function resetAnalysis() {
  document.getElementById('fileInput').value = ""; // Clear file
  document.getElementById('resultBox').style.display = 'none';
  document.getElementById('loadingBox').style.display = 'none';
  document.getElementById('uploadBox').style.display = 'block';
}



// عبدالكريم 
function validateForm() {
  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let subject = document.getElementById("subject").value.trim();
  let message = document.getElementById("message").value.trim();
  let errorBox = document.getElementById("error");

  if (name === "" || email === "" || subject === "" || message === "") {

    // prompt the message
    errorBox.style.display = "block";
    errorBox.textContent = "Please fill in all fields before sending.";

    return;
  }

  // hide the message if everything right
  errorBox.style.display = "none";
  errorBox.textContent = "";

  // reset user information
  document.getElementById("contactForm").reset();


  alert("Your message has been sent successfully!");
}
