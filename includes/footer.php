      <!-- footer starts  -->
      <footer class="site-footer" id="contact">
          <div class="top-footer section">
              <div class="sec-wp">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-4">
                              <div class="footer-info">
                                  <div class="footer-logo">
                                      <a href="acceuil.php">
                                          <img src="assets/images/logo1.png" width="100" height="60" alt="Logo" />
                                      </a>
                                  </div>
                                  <p>
                                      Utilisez notre système de réservation en ligne pour
                                      réserver une table rapidement et facilement.
                                  </p>
                                  <div class="social-icon">
                                      <ul>
                                          <li>
                                              <a href="#">
                                                  <i class="uil uil-facebook-f"></i>
                                              </a>
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
                          <div class="col-lg-8">
                              <div class="footer-flex-box">
                                  <div class="footer-table-info">
                                      <h3 class="h3-title">Heures d'ouverture</h3>
                                      <ul>
                                          <li>
                                              <i class="uil uil-clock"></i> Lun-Ven : 8 h - 22h
                                          </li>
                                          <li>
                                              <i class="uil uil-clock"></i> Sam-Dim : 11h - 20h
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="footer-menu food-nav-menu">
                                      <h3 class="h3-title">Pages</h3>
                                      <ul class="column-2">
                                          <?php if (!isset($_SESSION["user"])) : ?>
                                              <li><a href="index.php">Acceuil</a></li>
                                              <li><a href="connexion.php">Connéxion</a></li>
                                              <li><a href="inscription.php">Inscription</a></li>
                                          <?php else : ?>
                                              <li><a href="acceuil.php">Acceuil</a></li>
                                              <li><a href="menu.php">Nos Menu</a></li>
                                              <li><a href="equipe.php">Notre équipe</a></li>
                                              <li><a href="reservation.php">Résrvation</a></li>
                                              <li><a href="logout.php">Déconnexion</a></li>
                                          <?php endif; ?>
                                      </ul>
                                  </div>
                                  <div class="footer-menu">
                                      <h3 class="h3-title">Contact</h3>
                                      <ul>
                                          <li>Localisation : Dakar</li>
                                          <li>contact@terangua.com</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="bottom-footer">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12 text-center">
                          <div class="copyright-text">
                              <p>
                                  Copyright &copy; 2024 Téranga Délice. Tous droits
                                  réservés.
                                  <span class="name">Demba Faye</span>
                              </p>
                          </div>
                      </div>
                  </div>
                  <button class="scrolltop">
                      <i class="uil uil-angle-up"></i>
                  </button>
              </div>
          </div>
      </footer>
      </div>
      </div>

      <!-- jquery  -->
      <script src="assets/js/jquery-3.5.1.min.js"></script>
      <!-- bootstrap -->
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/popper.min.js"></script>

      <!-- fontawesome  -->
      <script src="assets/js/font-awesome.min.js"></script>

      <!-- swiper slider  -->
      <script src="assets/js/swiper-bundle.min.js"></script>

      <!-- mixitup -- filter  -->
      <script src="assets/js/jquery.mixitup.min.js"></script>

      <!-- fancy box  -->
      <script src="assets/js/jquery.fancybox.min.js"></script>

      <!-- parallax  -->
      <script src="assets/js/parallax.min.js"></script>

      <!-- gsap  -->
      <script src="assets/js/gsap.min.js"></script>

      <!-- scroll trigger  -->
      <script src="assets/js/ScrollTrigger.min.js"></script>
      <!-- scroll to plugin  -->
      <script src="assets/js/ScrollToPlugin.min.js"></script>
      <!-- rellax  -->
      <!-- <script src="assets/js/rellax.min.js"></script> -->
      <!-- <script src="assets/js/rellax-custom.js"></script> -->
      <!-- smooth scroll  -->
      <script src="assets/js/smooth-scroll.js"></script>

      <script src="assets/js/bookTable.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <script>
          let message = "<?php echo $_SESSION['status'] ?? ''; ?>";
          let statusType = "<?php echo $_SESSION['status_type'] ?? 'success'; ?>";
          if (message !== '') {
              Swal.fire({
                  title: statusType === 'success' ? 'Merci !' : 'Erreur',
                  text: message,
                  icon: statusType === 'success' ? 'success' : 'error'
              });
              <?php unset($_SESSION['status']); ?>
              <?php unset($_SESSION['status_type']); ?>
          }
      </script>

      <!-- custom js  -->
      <script src="assets/js/main.js"></script>
      </body>

      </html>