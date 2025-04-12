<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: connexion.php");
  exit;
}
$titre = "Nos menu";

require_once("includes/navbar.php");
?>
<!-- MENU -->
<section style="background-image: url(assets/images/menu-bg.png)" class="our-menu section bg-light repeat-img" id="menu">
  <div class="sec-wp">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sec-title text-center mb-5">
            <p class="sec-sub-title mb-3">Nos menu</p>
            <h2 class="h2-title">
              Découvrez l'authenticité de la cuisine sénégalaise à
              travers <span>nos spécialités savoureuses.</span>
            </h2>
            <div class="sec-title-shape mb-4">
              <img src="assets/images/title-shape.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="menu-tab-wp">
        <div class="row">
          <div class="col-lg-12 m-auto">
            <div class="menu-tab text-center">
              <ul class="filters">
                <div class="filter-active"></div>
                <li class="filter" data-filter=".all, .breakfast, .lunch, .dinner">
                  <img src="assets/images/menu-1.png" alt="" />
                  Tout
                </li>
                <li class="filter" data-filter=".breakfast">
                  <img src="assets/images/menu-2.png" alt="" />
                  Petit-déjeuner
                </li>
                <li class="filter" data-filter=".lunch">
                  <img src="assets/images/menu-3.png" alt="" />
                  Déjeuner
                </li>
                <li class="filter" data-filter=".dinner">
                  <img src="assets/images/menu-4.png" alt="" />
                  Dîner
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="menu-list-row">
        <div class="row g-xxl-5 bydefault_show" id="menu-dish">
          <!-- DEBUT PETIT DEJEUNER -->

          <!-- Thiébou dieune -->
          <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/thieb_khonk.jpg" alt="" />
              </div>
              <div class="dish-rating">
                4
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Thiébou dieune bou khonk</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 3000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <!-- Thiébou dieune -->
          <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/thieb_wekh.jpg" alt="" />
              </div>
              <div class="dish-rating">
                4
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Thiébou dieune bou wékh</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 3000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- sur le plats -->
          <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/sur_le_plat.jpg" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Sur le plat</h3>
              </div>
              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 2000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>



          <!-- Yassa poulet -->
          <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/yassa_poulet.jpg" alt="" />
              </div>
              <div class="dish-rating">
                4
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Yassa poulet</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 4000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Crêpes -->
          <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/crepe.jpg" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">10 Crêpes</h3>
              </div>
              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 2000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Beignet -->
          <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/beignet.jpg" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Beignets</h3>
              </div>
              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 1500 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Fataya -->

          <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/fataya_complet.jpg" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Fataya complet</h3>
              </div>
              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 2500 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Croissant et Café  -->

          <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/croissant_caffe.jpg" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Croissant et Café</h3>
              </div>
              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 2500 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Tartine -->
          <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/tartine.jpg" alt="" />
              </div>
              <div class="dish-rating">
                4.3
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Tartine</h3>
              </div>
              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 3000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Lakh -->
          <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/lakh.jpg" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Lakh</h3>
              </div>
              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 2000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>






          <!-- DEBUT DEJEUNER -->





          <!-- Thiébou yapp -->
          <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/thiep_yap.jpg" alt="" />
              </div>
              <div class="dish-rating">
                4
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Thiébou yapp</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 4000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Maffé -->
          <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/maffe.jpg" alt="" />
              </div>
              <div class="dish-rating">
                4
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Maffé</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 2000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <!-- Soupe kandia -->
          <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/soupe_kandia.jpg" alt="" />
              </div>
              <div class="dish-rating">
                4
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Soupe Kandia</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 3500 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <!-- Lak dieune kandia -->
          <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/lak_dieune.png" alt="" />
              </div>
              <div class="dish-rating">
                4
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Lak dieune</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 3500 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Cébon -->
          <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/cebon.png" alt="" />
              </div>
              <div class="dish-rating">
                4
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Cébon</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 3500 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- FIN DEJEUNER -->

          <!-- ------------------------------------------------------------------------------------------------- -->


          <!-- DEBUT DINER -->

          <!-- Shawarma -->
          <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/shawarma.jpg" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Shawarma</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 2000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Pizza -->
          <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/pizza.jpg" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Pizza</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 3000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Burger -->
          <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/burger.png" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Burger</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 3000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Couscous -->
          <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/couscous.jpg" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Couscous</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 3000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Spaghetti -->
          <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/spaghetti.png" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Spaghetti</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 3000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Dibi -->
          <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/dibi (1).jpg" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Dibi</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 3000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>



          <!-- Boeuf grillé -->
          <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/boeuf.jpg" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Boeuf grillé</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 6000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Vermicelles -->
          <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
            <div class="dish-box text-center">
              <div class="dist-img">
                <img src="assets/images/plats/vermicelle.jpg" alt="" />
              </div>
              <div class="dish-rating">
                5
                <i class="uil uil-star"></i>
              </div>
              <div class="dish-title">
                <h3 class="h3-title">Vermicelles</h3>
              </div>

              <div class="dist-bottom-row">
                <ul>
                  <li>
                    <b>Prix : 3000 <span> &#8355;</span></b>
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <!-- Fin DINER -->
          <!-- ------------------------------------------------------------------------------------------------- -->
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once("includes/footer.php");
?>