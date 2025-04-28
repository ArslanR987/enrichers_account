// // Utility function to validate a single field
// function validateField(field, pattern = null) {
//     let value = field.value.trim();
//     let isValid = false;

//     if(pattern) {
//         isValid = pattern.test(value);
//     } else {
//         isValid = value !== '';
//     }

//     if(!isValid) {
//         field.classList.add('is-invalid');
//         field.classList.remove('is-valid');
//     } else {
//         field.classList.remove('is-invalid');
//         field.classList.add('is-valid');
//     }

//     return isValid;
// }

// // Main function to validate Tab 1 fields
// function validateTab1() {
//     let isValid = true;

//     const fullName = document.getElementById('fullName');
//     const cnic = document.getElementById('cnicNo');
//     const email = document.querySelector('input[type="email"]');
//     const mobile = document.querySelector('input[placeholder="Enter mobile no"]');

//     // Validation patterns
//     const cnicPattern = /^[0-9]{5}-[0-9]{7}-[0-9]{1}$/;
//     const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
//     const mobilePattern = /^[0-9]{11}$/;

//     // Validate each field individually
//     if(!validateField(fullName)) isValid = false;
//     if(!validateField(cnic, cnicPattern)) isValid = false;
//     if(!validateField(email, emailPattern)) isValid = false;
//     if(!validateField(mobile, mobilePattern)) isValid = false;

//     return isValid;
// }

// // Handle Next Button Click
// document.getElementById('nextButtonTab1').addEventListener('click', function(e) {
//     e.preventDefault(); 

//     if(validateTab1()) {
//         // If validation success, move to next tab
//         console.log('Tab 1 validated. Moving to Tab 2...');
//         moveToTab('tab2');
//     } else {
//         // Show alert or error message
//         alert('Please correct the errors before proceeding.');
//     }
// });

// // Function to move to next tab
// function moveToTab(tabId) {
//     // If you are using Bootstrap tabs
//     let triggerTab = document.querySelector(`[href="#${tabId}"]`);
//     if(triggerTab) {
//         let tab = new bootstrap.Tab(triggerTab);
//         tab.show();
//     }
// }
