let currentTab = 0;
const tabs = document.querySelectorAll(".tab");
const steps = document.querySelectorAll(".step");

function showTab(n) {
  // Show the correct tab
  tabs.forEach((tab, index) => {
    tab.classList.toggle("active", index === n);
  });

  // Highlight the correct step
  steps.forEach((step, index) => {
    step.classList.toggle("active", index === n);
  });

  // Button text and visibility
  document.getElementById("prevBtn").style.display = n === 0 ? "none" : "inline-block";
  document.getElementById("nextBtn").textContent = n === (tabs.length - 1) ? "Submit" : "Next";
}

function nextPrev(n) {
  // Validate the current tab before moving to the next
  if (n === 1 && !validateForm()) return false;

  // Move to the next tab
  currentTab += n;

  // If reached the last tab, submit the form
  if (currentTab >= tabs.length) {
    document.getElementById("regForm").submit();
    return false;
  }

  // Show the next tab
  showTab(currentTab);
}

function validateForm() {
  // Get all input elements from the current tab
  const inputs = tabs[currentTab].querySelectorAll("input, select, textarea");
  let isValid = true;

  // Validate each input element
  inputs.forEach(input => {
    const errorElement = input.nextElementSibling; // Assuming the error message is right after the input

    // Clear any previous error message
    if (errorElement && errorElement.classList.contains("error-message")) {
      errorElement.remove();
    }

    if (!input.checkValidity()) {
      isValid = false;
      const errorMessage = document.createElement("div");
      errorMessage.classList.add("error-message");

      // Create a custom error message based on the validation type
      if (input.validity.valueMissing) {
        errorMessage.textContent = `${input.name} required`;
      } else if (input.validity.typeMismatch) {
        errorMessage.textContent = `Please enter a valid ${input.name}`;
      } else if (input.validity.patternMismatch) {
        errorMessage.textContent = `Please match the required format for ${input.name}`;
      } else if (input.validity.tooShort) {
        errorMessage.textContent = `${input.name} is too short`;
      }

      input.parentNode.insertBefore(errorMessage, input.nextSibling);
    }
  });

  return isValid; // Return false if any field is invalid
}

// Initialize the form display
showTab(currentTab);
