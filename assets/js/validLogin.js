document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form");
  const email = document.getElementById("email");
  const password = document.getElementById("password");

  form.addEventListener("submit", function (e) {
    if (!validateInputs()) {
      e.preventDefault(); // Prevent form submission if inputs are not valid
    }
    // Form will submit if validateInputs() returns true
  });

  const setError = function (element, message) {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector(".error");

    errorDisplay.innerText = message;
    inputControl.classList.add("error");
    inputControl.classList.remove("success");
  };

  const setSuccess = function (element) {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector(".error");

    errorDisplay.innerText = "";
    inputControl.classList.add("success");
    inputControl.classList.remove("error");
  };

  const isValidEmail = function (email) {
    const re =
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  };

  const validateInputs = function () {
    let isValid = true;

    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    if (emailValue === "") {
      setError(email, "L'adresse email est obligatoire");
      isValid = false;
    } else if (!isValidEmail(emailValue)) {
      setError(email, "L'adresse email n'est pas valide");
      isValid = false;
    } else {
      setSuccess(email);
    }

    if (passwordValue === "") {
      setError(password, "Le mot de passe est obligatoire");
      isValid = false;
    } else {
      setSuccess(password);
    }

    return isValid;
  };
});
