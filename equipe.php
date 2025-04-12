<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: connexion.php");
  exit;
}
$titre = "Nos chefs";

require_once("includes/navbar.php");
?>
<section class="our-team section">
  <div class="sec-wp">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sec-title text-center mb-5">
            <p class="sec-sub-title mb-3">
              Notre équipe</p>
            <h2 class="h2-title">Rencontrez Nos Chefs</h2>
            <div class="sec-title-shape mb-4">
              <img src="assets/images/title-shape.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="row team-slider">
        <div class="swiper-wrapper">
          <div class="col-lg-4 swiper-slide">
            <div class="team-box text-center">
              <div style="background-image: url(assets/images/chef/chef1.jpg)" class="team-img back-img"></div>
              <h3 class="h3-title">Dieyni Mbodj</h3>
              <div class="social-icon">
                <ul>
                  <li>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="uil uil-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="uil uil-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 swiper-slide">
            <div class="team-box text-center">
              <div style="background-image: url(assets/images/chef/chef2.jfif)" class="team-img back-img"></div>
              <h3 class="h3-title">Mouhamed Dieng</h3>
              <div class="social-icon">
                <ul>
                  <li>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="uil uil-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="uil uil-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 swiper-slide">
            <div class="team-box text-center">
              <div style="background-image: url('assets/images/chef/che3.jpg')" class="team-img back-img"></div>
              <h3 class="h3-title">Nasira Diarra</h3>
              <div class="social-icon">
                <ul>
                  <li>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="uil uil-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="uil uil-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 swiper-slide">
            <div class="team-box text-center">
              <div style="background-image: url(assets/images/chef/c5.jpg)" class="team-img back-img"></div>
              <h3 class="h3-title">Priyotosh Dey</h3>
              <div class="social-icon">
                <ul>
                  <li>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="uil uil-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="uil uil-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
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
</section>
<?php
require_once("includes/footer.php");
?>