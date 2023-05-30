 
// Get references to the back and forward buttons
const backButton = document.getElementById("backButton");
const forwardButton = document.getElementById("forwardButton");

// Add event listeners to the buttons
backButton.addEventListener("click", goBack);
forwardButton.addEventListener("click", goForward);

// Function to navigate back
function goBack() {
  window.history.back();
}

// Function to navigate forward
function goForward() {
  window.history.forward();
}
 