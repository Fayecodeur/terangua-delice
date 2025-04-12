<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $titre ?></title>
    <!-- icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!--  swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="assets/css/reservation.css" />
    <!-- style css  -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body class="body-fixed">
    <!-- Debut header  -->
    <header class="site-header py-4 py-lg-2">

        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="acceuil.php">
                            <img src="assets/images/logo1.png" width="100" height="60" alt="Logo" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <?php if (!isset($_SESSION["user"])) : ?>
                                    <li><a href="connexion.php">Connéxion</a></li>
                                    <li><a href="inscription.php">Inscription</a></li>
                                <?php else : ?>
                                    <li><a href="acceuil.php">Acceuil</a></li>
                                    <li><a href="menu.php">Nos Menu</a></li>
                                    <li><a href="equipe.php">Notre équipe</a></li>
                                    <li><a href="reservation.php">Réservation</a></li>
                                    <li><a href="logout.php">Déconnexion</a></li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Fin header  -->

    <div id="viewport">
        <div id="js-scroll-content">