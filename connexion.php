<?php
session_start();
if (isset($_SESSION["user"])) {
  header("Location: acceuil.php");
  exit;
}

$emailErr = $mdpErr = "";
$email = $mdp = "";
$loginErr = "";

require_once("models/function.php");

if (isset($_POST["login"])) {
  if (empty($_POST["email"])) {
    $emailErr = "L'email est obligatoire.";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Format d'email invalide.";
    }
  }

  if (empty($_POST["mdp"])) {
    $mdpErr = "Le mot de passe est obligatoire.";
  } else {
    $mdp = test_input($_POST["mdp"]);
  }

  if (empty($emailErr) && empty($mdpErr)) {
    require_once("db/db.php");

    $sql = "SELECT * FROM `users` WHERE `email` = :email";
    $requete = $db->prepare($sql);
    $requete->bindValue(":email", $email, PDO::PARAM_STR);
    $requete->execute();
    $user = $requete->fetch();

    if (!$user) {
      $loginErr = "Adresse email ou mot de passe incorrect.";
    } else if (!password_verify($mdp, $user["mdp"])) {
      $loginErr = "Adresse email ou mot de passe incorrect.";
    } else {
      $_SESSION["user"] = [
        "prenom" => $user["prenom"],
        "nom" => $user["nom"],
        "email" => $user["email"],
      ];

      header("Location: acceuil.php");
      exit();
    }
  }
}
?>

<?php
$titre = "Connexion";

require_once("includes/headerLogin.php");
?>

<div class="container mt-4">
  <form id="form" method="post" action="">
    <h1 class="mb-4">Connexion</h1>
    <div class="input-control">
      <label for="email">Adresse email</label>
      <input id="email" name="email" value="<?= htmlspecialchars($email); ?>" type="text" />
      <span class="error"><?= $emailErr; ?></span>
    </div>
    <div class="input-control">
      <label for="password">Mot de passe</label>
      <input id="password" name="mdp" type="password" />
      <span class="error"><?= $mdpErr; ?></span>
    </div>
    <button type="submit" name="login">Se connecter</button>
    <a href="inscription.php" id="lien">Inscription</a>
  </form>
</div>


<?php require_once("includes/footerLogin.php"); ?>