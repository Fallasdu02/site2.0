<?php
session_start();
$name = $_SESSION['user']['prenom'] ?? null;
?>

<?php
$pageTitle = "Accueil";
require_once './assets/php/includes/header.php';
require_once './assets/php/includes/navbar.php';
?>


<section class="container-fluid my-5 text-center">
<h1 class="fw-bold">Bienvenue <?= ($name ?? '') ?> au Basket Club Hayange-Marspich !</h1>

</section>

<?php include './assets/php/includes/hr_separator.php'; ?>

  <!-- ============================= -->
  <!--      SLIDER ACTUALITÉS       -->
  <!-- ============================= -->
  <section class="container-fluid px-4 mx-auto" style="max-width: 1000px;">
    <h2 class="text-center mb-4">Actualités</h2>
    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row align-items-center text-center text-md-start">
            <div class="col-md-6">
              <h3>Détection des joueurs U21<br>Championnat Régional<br>Basket Club Hayange-Marspich</h3>
              <p>
                Les U21 du club évoluent en championnat régional, un niveau où l’intensité et la stratégie sont clés.
                Nous sélectionnons des joueurs ayant une maîtrise avancée du basket et une mentalité de gagnant.
              </p>
            </div>
            <div class="col-md-6">
              <img src="./assets/img/u21_bchm.jpg" alt="Détection U21" class="img-fluid rounded">
            </div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row align-items-center text-center text-md-start">
            <div class="col-md-6">
              <h3>Détection des joueurs U18<br>Championnat Régional<br>Basket Club Hayange-Marspich</h3>
              <p>
                Notre club recrute des joueurs U18 pour le championnat régional.
                Nous recherchons des jeunes motivés avec une solide technique et un fort sens du collectif.
              </p>
            </div>
            <div class="col-md-6">
              <img src="./assets/img/u18_equipe.jpg" alt="Détection U18" class="img-fluid rounded">
            </div>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row align-items-center text-center text-md-start">
            <div class="col-md-6">
              <h3>Détection des joueurs U15<br>Championnat Régional<br>Basket Club Hayange-Marspich</h3>
              <p>
                Pour les joueurs U15, notre club met en place des tests de sélection afin de repérer les jeunes talents.
                Les critères sont exigeants : maîtrise des fondamentaux, esprit d’équipe et engagement total.
                Nous cherchons des joueurs prêts à relever le défi et à porter fièrement les couleurs du club.
              </p>
            </div>
            <div class="col-md-6">
              <img src="./assets/img/u15_demi-finale.jpg" alt="Détection U15" class="img-fluid rounded">
            </div>
          </div>
        </div>
        <!-- Slide 4 -->
        <div class="carousel-item">
          <div class="row align-items-center text-center text-md-start">
            <div class="col-md-6">
              <h3>Détection des joueurs U13<br>Championnat Régional<br>Basket Club Hayange-Marspich</h3>
              <p>
                Le club organise une journée de détection pour les joueurs U13 afin de constituer une équipe compétitive et passionnée.
                Pour intégrer le groupe, il est essentiel d'avoir un bon niveau technique, une solide compréhension du jeu
                et une motivation sans faille.
              </p>
            </div>
            <div class="col-md-6">
              <img src="./assets/img/u13_sluc.jpg" alt="Détection U13" class="img-fluid rounded">
            </div>
          </div>
        </div>
      </div>
      <!-- Boutons de navigation -->
      <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </section>


<?php include './assets/php/includes/hr_separator.php'; ?>


  <!-- ============================= -->
  <!-- SECTION "UNE AVENTURE HUMAINE ET SPORTIVE" -->
  <!-- ============================= -->
  <section class="container-fluid my-5">
    <div class="row align-items-center text-center">
      <div class="col-lg-3 mx-auto">
        <img src="./assets/img/u15_st-marie.jpg" alt="Notre club en action" class="img-fluid rounded">
      </div>
      <div class="col-lg-3 mx-auto">
        <h2 class="mb-3">Une aventure humaine et sportive</h2>
        <p class="lead">
          Depuis sa création, BCHM est bien plus qu’un simple club de basket.<br>
          C’est une communauté où se croisent passionnés, jeunes talents et entraîneurs dédiés, tous unis par l’amour du jeu.
        </p>
        <a href="#" class="btn btn-success btn-lg mt-3">En savoir plus</a>
      </div>
    </div>
  </section>

<?php include './assets/php/includes/hr_separator.php'; ?>


  <!-- ============================= -->
  <!--    SECTION "BRAVO AUX U13 !"    -->
  <!-- ============================= -->
  <section class="container-fluid my-5">
    <div class="row align-items-center text-center">
      <div class="col-lg-3 mx-auto">
        <h2 class="mb-3">🔥 Bravo aux U13 !</h2>
        <p class="lead">
          Une saison exemplaire qui ouvre la voie vers de nouveaux succès !
        </p>
        <a href="#" class="btn btn-success btn-lg mt-3">En savoir plus</a>
      </div>
      <div class="col-lg-3 mx-auto">
        <img src="./assets/img/u13_sluc.jpg" alt="Détection U13" class="img-fluid rounded">
      </div>
    </div>
  </section>


  
<?php
include 'assets/php/includes/hr_separator.php';
include 'assets/php/includes/newsletter_section.php';
include 'assets/php/includes/hr_separator.php'; 
include 'assets/php/includes/sponsors_section.php';
require_once 'assets/php/includes/footer.php';
?>
