<?php
session_start();
require_once __DIR__ . '/env.php';
loadEnv(__DIR__ . '/.env');


// Définir les variables et les initialiser à des valeurs vides
$fullNameErr = $emailErr = $dateErr = $timeErr = $numPeopleErr = "";
$fullName = $email = $date = $time = $numPeople = "";

// Inclusion des fonctions nécessaires
require_once("models/function.php");

// Inclure les fichiers PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Vérifier si le formulaire a été soumis
if (isset($_POST["book_table"])) {
    // Valider les champs du formulaire
    if (empty($_POST["full_name"])) {
        $fullNameErr = "Le nom complet est obligatoire.";
    } else {
        $fullName = test_input($_POST["full_name"]);
        if (!preg_match("/^[a-zA-ZÀ-ÿ' -]*$/", $fullName)) {
            $fullNameErr = "Le nom complet n'est pas valide.";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "L'email est obligatoire.";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Format de l'email invalide.";
        }
    }

    if (empty($_POST["date"])) {
        $dateErr = "La date est obligatoire.";
    } else {
        $date = test_input($_POST["date"]);
        if (new DateTime($date) < new DateTime()) {
            $dateErr = "La date ne doit pas être dans le passé.";
        }
    }

    if (empty($_POST["time"])) {
        $timeErr = "L'heure est obligatoire.";
    } else {
        $time = test_input($_POST["time"]);
    }

    if (empty($_POST["num_people"])) {
        $numPeopleErr = "Le nombre de personnes est obligatoire.";
    } else {
        $numPeople = test_input($_POST["num_people"]);
    }

    // Si tous les champs sont valides, on envoie l'email
    if (empty($fullNameErr) && empty($emailErr) && empty($dateErr) && empty($timeErr) && empty($numPeopleErr)) {
        // Créer une instance ; en passant `true`, on active les exceptions
        $mail = new PHPMailer(true);

        try {
            // Paramètres du serveur
            $mail->isSMTP();                                            // Utiliser SMTP
            $mail->SMTPAuth   = true;                                   // Activer l'authentification SMTP
            $mail->Host       = 'smtp.gmail.com';                       // Définir le serveur SMTP
            $mail->Username   = $_ENV['MAIL_USERNAME'];              // Nom d'utilisateur SMTP
            $mail->Password   = $_ENV['MAIL_PASSWORD'];                    // Mot de passe SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Activer le cryptage STARTTLS
            $mail->Port       = 587;                                    // Port TCP à utiliser

            // Destinataires
            $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
            $mail->addAddress($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']); // Ajouter un destinataire

            // Contenu
            $mail->isHTML(true);                                  // Définir le format de l'email en HTML
            $mail->Subject = 'Reservation de table';
            $mail->Body    = generateEmailBody($email, $fullName, $date, $time, $numPeople);

            // Envoyer l'email
            $mail->send();
            $_SESSION['status'] = "Votre demande de réservation a été prise en compte.";
            $_SESSION['status_type'] = "success"; // Type de message
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit();
        } catch (Exception $e) {
            $_SESSION['status'] = "Une erreur s'est produite : {$mail->ErrorInfo}";
            $_SESSION['status_type'] = "error"; // Type de message
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit();
        }
    }
}

if (!isset($_SESSION["user"])) {
    header("Location: connexion.php");
    exit;
}
$titre = "Réservation";

require_once("includes/navbar.php");
?>

<section class="py-2">
    <div class="containere">
        <div class="container-time">
            <h2 class="heading">Heures d'Ouverture</h2>
            <h3 class="heading-days">Lundi-Vendredi</h3>
            <p>8h - 13h (petit déjeuner)</p>
            <p>13h - 22h (déjeuner/dîner)</p>
            <h3 class="heading-days">Samedi et Dimanche</h3>
            <p>9h - 13h (petit déjeuner)</p>
            <p>13h - 00h (déjeuner/dîner)</p>
            <hr />
            <h4 class="heading-phone">Appelez-nous : (+221) 77-624-45-75</h4>
        </div>
        <div>
            <form id="form" method="post" class="container-form">
                <h2 class="heading-table">Réservation en Ligne</h2>
                <div class="input-control">
                    <label for="name">Nom complet</label>
                    <input id="full_name" name="full_name" type="text" value="<?php echo htmlspecialchars($fullName); ?>">
                    <span class="error"><?php echo $fullNameErr; ?></span>
                </div>
                <div class="input-control">
                    <label for="email">Votre Email</label>
                    <input id="email" name="email" type="email" value="<?php echo htmlspecialchars($email); ?>">
                    <span class="error"><?php echo $emailErr; ?></span>
                </div>
                <div class="input-control">
                    <label for="date">Date</label>
                    <input id="date" name="date" type="date" value="<?php echo htmlspecialchars($date); ?>">
                    <span class="error"><?php echo $dateErr; ?></span>
                </div>
                <div class="input-control">
                    <input id="time" name="time" type="time" value="<?php echo htmlspecialchars($time); ?>">
                    <span class="error"><?php echo $timeErr; ?></span>
                </div>

                <div class="input-control">
                    <label for="num_people">Combien de personnes ?</label>
                    <select id="num_people" name="num_people">
                        <option value="">Sélectionner</option>
                        <option value="1 personne" <?php echo $numPeople == '1 personne' ? 'selected' : ''; ?>>1 personne</option>
                        <option value="2 personnes" <?php echo $numPeople == '2 personnes' ? 'selected' : ''; ?>>2 personnes</option>
                        <option value="3 personnes" <?php echo $numPeople == '3 personnes' ? 'selected' : ''; ?>>3 personnes</option>
                        <option value="4 personnes" <?php echo $numPeople == '4 personnes' ? 'selected' : ''; ?>>4 personnes</option>
                        <option value="5 personnes" <?php echo $numPeople == '5 personnes' ? 'selected' : ''; ?>>5 personnes</option>
                    </select>
                    <span class="error"><?php echo $numPeopleErr; ?></span>
                </div>

                <button type="submit" name="book_table" class="btn">
                    Réserver
                </button>
            </form>
        </div>
</section>

<?php
require_once("includes/footer.php");
