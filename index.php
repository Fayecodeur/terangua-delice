<?php
session_start();
$titre = "Térangua";

require_once("includes/navbar.php");
?>
<section class="main-banner">
  <div class="sec-wp">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="banner-text">
            <h1 class="h1-title">
              Bienvenue Chez
              <span>Térangua Délice</span>
            </h1>
            <p>
              Découvrez l'authenticité de la cuisine sénégalaise, où
              chaque plat est préparé avec passion et tradition. Bon
              appétit !
            </p>
            <div class="banner-btn mt-4">
              <a href="menu.php" class="sec-btn">Découvrir nos plats</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="banner-img-wp">
            <div class="banner-img" style="background-image: url(assets/images/background/cebon.jpg); height:400px ;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- A propos -->
<section class="about-sec section" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="sec-title text-center mb-5">
          <p class="sec-sub-title mb-3">À propos</p>
          <h2 class="h2-title">
            Découvrez notre <span>restaurant</span>
          </h2>
          <div class="sec-title-shape mb-4">
            <img src="assets/images/title-shape.svg" alt="" />
          </div>
          <p>
            Téranga Délice est né de notre passion pour la cuisine
            sénégalaise authentique. Nous avons créé cet espace pour
            partager avec vous les saveurs uniques et les traditions
            culinaires du Sénégal. Venez découvrir notre restaurant et
            laissez-vous séduire par l'accueil chaleureux et les plats
            délicieux qui font la renommée de notre culture.
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="about-video">
          <div class="about-video-img" style="background-image: url(assets/images/background/Thieboudiene.webp); "></div>
          <div class="play-btn-wp">
            <a href="https://youtu.be/BzmEjhspu3s?si=zFbtFHY06yTEXx5p" data-fancybox="video" class="play-btn">
              <i class="uil uil-play"></i>
            </a>
            <span>Voir la recette</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section class="two-col-sec section bg-white" id="service">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="sec-img mt-5">
          <img src="assets/images/background/thieb_bou_khonk.jpg" class="rounded" alt="" />
        </div>
      </div>
      <div class="col-lg-7">
        <div class="sec-text">
          <h2 class="xxl-title">Nos services</h2>
          <p>
            Chez Térangue Délice, nous vous offrons une expérience culinaire exceptionnelle avec des plats sénégalais authentiques et savoureux. Notre restaurant vous accueille dans une ambiance chaleureuse et conviviale.
          </p>
          <p>
            Pour votre confort, nous proposons un service de réservation en ligne, vous permettant de réserver facilement votre table et de profiter pleinement de votre repas.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="book-table section bg-light">
  <div class="book-table-shape">
    <img src="assets/images/table-leaves-shape.png" alt="" />
  </div>

  <div class="book-table-shape book-table-shape2">
    <img src="assets/images/table-leaves-shape.png" alt="" />
  </div>

  <div class="sec-wp">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sec-title text-center mb-5">
            <p class="sec-sub-title mb-3">Réservation</p>
            <div class="sec-title-shape mb-4">
              <img src="assets/images/title-shape.svg" alt="" />
            </div>
          </div>
        </div>
      </div>

      <div class="book-table-info">
        <div class="row align-items-center">
          <div class="col-lg-4">
            <div class="table-title text-center">
              <h3>Du lundi au Vendredi</h3>
              <p>8:00 h - 22:00 h</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="call-now text-center">
              <i class="uil uil-restaurant"></i>
              <a href="reservation.php">Réserver une table</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="table-title text-center">
              <h3>Du samedi au Dimanche</h3>
              <p>11:00 h - 00:00 h</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Gallery plats -->
      <div class="row" id="gallery">
        <div class="col-lg-10 m-auto">
          <div class="book-table-img-slider" id="icon">
            <div class="swiper-wrapper">
              <a href="assets/images/background/thieb_bou_khonk.jpg" data-fancybox="table-slider" class="book-table-img back-img swiper-slide" style="background-image: url(assets/images/background/thieb_bou_khonk.jpg);"></a>

              <a href="assets/images/background/cebon.jpg" data-fancybox="table-slider" class="book-table-img back-img swiper-slide" style="background-image: url(assets/images/background/cebon.jpg);"></a>

              <a href="assets/images/background/thieb_bou_guinar.jpg" data-fancybox="table-slider" class="book-table-img back-img swiper-slide" style="background-image: url(assets/images/background/thieb_bou_guinar.jpg);"></a>

              <a href="assets/images/background/mafe.jpeg" data-fancybox="table-slider" class="book-table-img back-img swiper-slide" style="background-image: url(assets/images/background/mafe.jpeg);"></a>

              <a href="assets/images/background/couscous.jpeg" data-fancybox="table-slider" class="book-table-img back-img swiper-slide" style="background-image: url(assets/images/background/couscous.jpeg);"></a>

              <a href="assets/images/background/fataya.jpg" data-fancybox="table-slider" class="book-table-img back-img swiper-slide" style="background-image: url(assets/images/background/fataya.jpg);"></a>

              <a href="assets/images/background/caffe.jpg" data-fancybox="table-slider" class="book-table-img back-img swiper-slide" style="background-image: url(assets/images/background/caffe.jpg);"></a>

              <a href="assets/images/background/lakh2.jpeg" data-fancybox="table-slider" class="book-table-img back-img swiper-slide" style=" background-image: url(assets/images/background/lakh2.jpeg);"></a>
            </div>
            <div class="swiper-button-wp">
              <div class="swiper-button-prev swiper-button">
                <i class="uil uil-angle-left"></i>
              </div>
              <div class="swiper-button-next swiper-button">
                <i class="uil uil-angle-right"></i>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once("includes/footer.php");
?>