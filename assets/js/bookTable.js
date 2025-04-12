document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form");
  const fullName = document.getElementById("full_name");
  const email = document.getElementById("email");
  const date = document.getElementById("date");
  const time = document.getElementById("time");
  const numPeople = document.getElementById("num_people");

  form.addEventListener("submit", function (e) {
    if (validateInputs()) {
      form.submit();
    } else {
      e.preventDefault();
    }
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

    const fullNameValue = fullName.value.trim();
    const emailValue = email.value.trim();
    const dateValue = date.value.trim();
    const timeValue = time.value.trim();
    const numPeopleValue = numPeople.value.trim();

    if (fullNameValue === "") {
      setError(fullName, "Le nom complet est obligatoire");
      isValid = false;
    } else if (!fullNameValue.match(/^[a-zA-ZÀ-ÿ ]+$/)) {
      setError(
        fullName,
        "Le nom complet doit contenir que des lettres et des espaces."
      );
      isValid = false;
    } else {
      setSuccess(fullName);
    }

    if (emailValue === "") {
      setError(email, "L'adresse email est obligatoire");
      isValid = false;
    } else if (!isValidEmail(emailValue)) {
      setError(email, "L'adresse email n'est pas valide");
      isValid = false;
    } else {
      setSuccess(email);
    }

    if (dateValue === "") {
      setError(date, "La date est obligatoire");
      isValid = false;
    } else if (new Date(dateValue) < new Date().setHours(0, 0, 0, 0)) {
      setError(date, "La date ne doit pas être dans le passé");
      isValid = false;
    } else {
      setSuccess(date);
    }

    if (timeValue === "") {
      setError(time, "L'heure est obligatoire");
      isValid = false;
    } else {
      setSuccess(time);
    }

    if (numPeopleValue === "") {
      setError(numPeople, "Le nombre de personnes est obligatoire");
      isValid = false;
    } else {
      setSuccess(numPeople);
    }

    return isValid;
  };
});
