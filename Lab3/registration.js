// Function to validate the form inputs
function validateForm() {
  const fullName = document.getElementById("username").value;
  const email = document.getElementById("email").value;
  const dob = document.getElementById("dob").value;
  const phoneNumber = document.getElementById("phoneNumber").value;
  const homeAddress = document.getElementsByName("homeAddress")[0].value;
  const city = document.getElementsByName("city")[0].value;
  const country = document.getElementsByName("country")[0].value;
  const animalSpecies = document.getElementsByName("animalSpecies")[0].value;
  const password = document.getElementById("password").value;
  const form = document.getElementById("adoptionForm");
  const adoptionPackage = document.querySelector('input[name="adoptionPackage"]:checked');
  const additionalComments = document.getElementsByName("additionalComments")[0].value;
  const tncCheckbox = document.getElementsByName("TnC")[0];

  // Check if any field is empty
  if (
    fullName === "" ||
    email === "" ||
    dob === "" ||
    phoneNumber === "" ||
    homeAddress === "" ||
    city === "" ||
    country === "" ||
    animalSpecies === "" ||
    adoptionPackage === null ||
    additionalComments === "" ||
    !tncCheckbox.checked
  ) {
    alert("Please fill in all fields and agree to the terms and conditions.");
    return false;
  }

  // Check if the age is greater than or equal to 18
  const currentDate = new Date();
  const selectedDate = new Date(dob);
  const ageInMilliseconds = currentDate - selectedDate;
  const ageInYears = ageInMilliseconds / (1000 * 60 * 60 * 24 * 365);
  if (ageInYears < 18) {
    alert("You must be at least 18 years old to register for adoption.");
    return false;
  }

  // Check if the username contains only alphabets
  if (!/^[a-zA-Z]+$/.test(fullName)) {
    alert("Username should contain only alphabets.");
    return false;
  }

  // Function to validate the password field
function validatePassword() {

  // Check if the password contains only uppercase letters and numbers
  if (!/^[A-Z0-9]+$/.test(password)) {
    alert("Password should contain only uppercase letters and numbers.");
    return false;
  }

  return true;
}


  // If all validations pass, show success message using a dialog box
  const selectedAccount = adoptionPackage.value === "digitalAdoption" ? "Digital Adoption" : "Physical Adoption";
  const successMessage = `You ${fullName} have successfully registered as ${selectedAccount}.`;
  alert(successMessage);
  return true;
}

// Attach the validation function to the form submission event
const form = document.getElementById("form");
form.addEventListener("submit", function (event) {
  event.preventDefault();
  validateForm();
});
