document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form");
  const prenom = document.getElementById("prenom");
  const nom = document.getElementById("nom");
  const email = document.getElementById("email");
  const password = document.getElementById("password");
  const password2 = document.getElementById("password2");

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

    const prenomValue = prenom.value.trim();
    const nomValue = nom.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if (prenomValue === "") {
      setError(prenom, "Le prénom est obligatoire");
      isValid = false;
    } else if (!prenomValue.match(/^[a-zA-ZÀ-ÿ ]+$/)) {
      setError(
        prenom,
        "Le prénom doit contenir que des lettres et des espaces"
      );
      isValid = false;
    } else {
      setSuccess(prenom);
    }

    if (nomValue === "") {
      setError(nom, "Le nom est obligatoire");
      isValid = false;
    } else if (!nomValue.match(/^[a-zA-ZÀ-ÿ ]+$/)) {
      setError(nom, "Le nom doit contenir que des lettres et des espaces.");
      isValid = false;
    } else {
      setSuccess(nom);
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

    if (passwordValue === "") {
      setError(password, "Le mot de passe est obligatoire");
      isValid = false;
    } else if (passwordValue.length < 8) {
      setError(password, "Le mot de passe doit contenir au moins 8 caractères");
      isValid = false;
    } else if (!/[A-Z]/.test(passwordValue)) {
      setError(password, "Le mot de passe doit contenir au moins 1 majuscule");
      isValid = false;
    } else if (!/[a-z]/.test(passwordValue)) {
      setError(password, "Le mot de passe doit contenir au moins 1 minuscule");
      isValid = false;
    } else if (!/[0-9]/.test(passwordValue)) {
      setError(password, "Le mot de passe doit contenir au moins 1 chiffre");
      isValid = false;
    } else {
      setSuccess(password);
    }

    if (password2Value === "") {
      setError(password2, "Veuillez confirmer le mot de passe");
      isValid = false;
    } else if (password2Value !== passwordValue) {
      setError(password2, "Les mots de passe ne correspondent pas !");
      isValid = false;
    } else {
      setSuccess(password2);
    }

    return isValid;
  };
});
