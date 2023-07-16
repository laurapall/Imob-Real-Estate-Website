<?php  
  include 'conectare.php'; 
  $cod = $_GET['codagent'];
   ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EstateAgency Bootstrap Template - Agent Single</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.10.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Type</label>
              <select class="form-control form-select form-control-a" id="Type">
                <option>All Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="city">City</label>
              <select class="form-control form-select form-control-a" id="city">
                <option>All City</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bedrooms">Bedrooms</label>
              <select class="form-control form-select form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="garages">Garages</label>
              <select class="form-control form-select form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bathrooms">Bathrooms</label>
              <select class="form-control form-select form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="price">Min Price</label>
              <select class="form-control form-select form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->>

<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Im<span class="color-b">Ob</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="index.php">Acasă</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="imobile.php">Proprietăți</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link " href="agenti.php">Agenți</a>
          </li>

      
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contact</a>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
        
	 <?php
   $interogared = "SELECT cod_agent, prenume, nume, abilitate, imagine, telefon, mobil, email, skype, facebook, twitter, instagram, linkedin FROM agenti WHERE cod_agent=$cod";
   //  Execut comanda SQL
   $trimitd = mysqli_query($cnx, $interogared) or die("Eroare: " . mysqli_error($cnx));
   $rezdetalii = mysqli_fetch_assoc($trimitd) ;
   ?>

          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single"><?= $rezdetalii['prenume'].' '. $rezdetalii['nume'] ?></h1>
              <span class="color-text-a">Agent Imobiliar</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Acasă</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Agenți</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"> <?= $rezdetalii['prenume'].' '. $rezdetalii['nume'] ?>
                  
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single -->

    <!-- ======= Agent Single ======= -->
    <section class="agent-single">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-md-6">
                <div class="agent-avatar-box">
                  <img src="assets/img/<?= $rezdetalii['imagine'] ?>" alt="" class="agent-avatar img-fluid">
                </div>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="agent-info-box">
                  <div class="agent-title">
                    <div class="title-box-d">
                      <h3 class="title-d"><?= $rezdetalii['prenume'] ?>
                        <br> <?= $rezdetalii['nume'] ?>
                      </h3>
                    </div>
                  </div>
                  <div class="agent-content mb-3">
                    <p class="content-d color-text-a">
                    <?= $rezdetalii['abilitate'] ?>
                    </p>
                    <div class="info-agents color-a">
                      <p>
                        <strong>Telefon: </strong>
                        <span class="color-text-a"> <?= $rezdetalii['telefon'] ?> </span>
                      </p>
                      <p>
                        <strong>Mobil: </strong>
                        <span class="color-text-a"> <?= $rezdetalii['mobil'] ?></span>
                      </p>
                      <p>
                        <strong>Email: </strong>
                        <span class="color-text-a"> <?= $rezdetalii['email'] ?></span>
                      </p>
                      <p>
                        <strong>Skype: </strong>
                        <span class="color-text-a"> <?= $rezdetalii['skype'] ?></span>
                      </p>
                     
                    </div>
                  </div>
                  <div class="socials-footer">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="<?= $rezdetalii['facebook'] ?>" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="<?= $rezdetalii['twitter'] ?>" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="<?= $rezdetalii['instagram'] ?>" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="<?= $rezdetalii['linkedin'] ?>" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
            
        
    <div class="col-md-12 section-t8">
<div class="title-box-d">
<h3 class="title-d">Imobile listate</h3>
</div>
</div>
<div class="row property-grid grid">
<div class="col-sm-12">
<div class="grid-option">
<form>
<select class="custom-select">
<option selected>Toate</option>
<option value="1">Vânzare</option>
<option value="2">Închiriere</option>
<option value="3">Vândut</option>
</select>
</form>
</div>
</div>

<?php
$interogareimi = "SELECT cod_imobil, imobil.cod_agent, agenti.cod_agent, fotografie1, cod_postal, localitate, adresa, statut, pret, marime, nr_camere, nr_baie, nr_garaj from imobil, localitate, statut, camere, baie, garaj, agenti WHERE imobil.cod_localitate=localitate.cod_localitate AND imobil.cod_status=statut.cod_status AND imobil.cod_camere=camere.cod_camere AND imobil.cod_baie=baie.cod_baie AND imobil.cod_garaj=garaj.cod_garaj AND imobil.cod_agent=agenti.cod_agent AND agenti.cod_agent=$cod";
// Execut comanda SQL
$trimittei = mysqli_query($cnx, $interogareimi) or die("Eroare: " . mysqli_error($cnx));
while($reztei = mysqli_fetch_assoc($trimittei)) :?>


<div class="col-md-4">
<div class="card-box-a card-shadow">
<div class="img-box-a">
<img src="assets/img/<?= $reztei['fotografie1'] ?>" alt="" class="img-a img-fluid">
</div>
<div class="card-overlay">
<div class="card-overlay-a-content">
<div class="card-header-a">
<h2 class="card-title-a">
<a href="proprietati.php?codprop=<?=$reztei['cod_imobil'] ?>"> <?=$reztei['cod_postal'].' '. $reztei['localitate'] ?>
                          <br /> <?=$reztei['adresa'] ?></a>

</h2>
</div>
<div class="card-body-a">
<div class="price-box d-flex">
<span class="price-a"><?= $reztei['statut'] ?> | <?= $reztei['pret'] ?></span>
</div>
<a href="#" class="link-a">Detalii
<span class="bi bi-chevron-right"></span>
</a>
</div>
<div class="card-footer-a">
<ul class="card-info d-flex justify-content-around">
<li>
<h4 class="card-info-title">Mărime</h4>
<span><?= $reztei['marime'] ?>
<sup>2</sup>
</span>
</li>
<li>
<h4 class="card-info-title">Camere</h4>
<span><?= $reztei['nr_camere'] ?></span>
</li>
<li>
<h4 class="card-info-title">Baie</h4>
<span><?= $reztei['nr_baie'] ?></span>
</li>
<li>
<h4 class="card-info-title">Garaj</h4>
<span><?= $reztei['nr_garaj'] ?></span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<?php endwhile; ?>

</div>
        </div>
      </div>
    </section><!-- End Agent Single -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">ImOb</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Suntem agenți profesioniști din zona ta, care folosesc instrumente online pentru a lucra mai inteligent și mai repede.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Nr.tel.:</span> +40264 500 300
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email:</span> contact@imob.ro
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Despre noi</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Harta site</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Înregistrare Agent</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Cariere</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Afiliere</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Politica de confidențialitate</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Punct de lucru</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Cluj-Napoca</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Brașov</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Târgu Mureș</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Oradea</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Râmnicu Vâlcea</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Sibiu</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.php">Acasă</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Despre noi</a>
              </li>
              <li class="list-inline-item">
                <a href="imobile.php">Proprietăți</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">EstateAgency</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>