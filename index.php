<?php  
  include 'conectare.php'; 
  // $cod = $_GET['codagent']
  // $cod = $_GET['codprop'];
   ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Imob - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open Sans:300,400,500,600,700" rel="stylesheet">

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

<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

<div class="swiper-wrapper">

  <?php
 $interogareimobil = "SELECT fotografie1, slide, cod_postal, localitate, judet, adresa, statut, pret, marime, nr_camere, nr_baie, nr_garaj from imobil, localitate, statut, camere, baie, garaj, judet WHERE imobil.cod_localitate=localitate.cod_localitate AND imobil.cod_status=statut.cod_status AND imobil.cod_camere=camere.cod_camere AND imobil.cod_baie=baie.cod_baie AND imobil.cod_garaj=garaj.cod_garaj AND localitate.cod_judet=judet.cod_judet AND nr_camere='4'";
 //  Execut comanda SQL
 $trimitimobil = mysqli_query($cnx, $interogareimobil) or die("Eroare: " . mysqli_error($cnx));
 while($rezim = mysqli_fetch_assoc($trimitimobil)) :?>

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/<?= $rezim['slide'] ?>)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top"><Judetul><?= $rezim['judet'] ?>
                      <br> <?= $rezim['cod_postal'] ?>
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b"><?= $rezim['adresa'] ?></span> 
                      <br> <?= $rezim['localitate'] ?>
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a"><?= $rezim['statut'] ?> | <?= $rezim ['pret'] ?></span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php endwhile; ?>



    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->


  

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Servicii</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-cart"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Licitații</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Dacă vrei să cumperi o proprietate, ai posibilitatea să te consulți cu familia înainte de a trimite o ofertă. Oferta de cumpărare poate fi apoi trimisă în mod sigur, online, fără presiune de timp.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon">Mai departe
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-calendar4-week"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Credite</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Te ajutăm să faci pasul către casa ta, fie că este prima casă sau ai nevoie de o nouă locuință, mai spațioasă! Creditele imobiliare de la Imob sunt soluția dacă vrei să renovezi, modernizezi sau să îți extinzi locuința.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon">Mai departe
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-card-checklist"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Evaluări</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Un aspect important în demararea unei tranzacții imobiliare îl reprezintă evaluarea corectă a proprietății. Atunci când identifici prețul estimativ pe care piața îl poate oferi, ai șanse mai mari să poți vinde într-un timp mai scurt.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon">Mai departe
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->


 <!-- ======= Latest Properties Section ======= -->
 <section class="section-property section-t8">
      <div class="container">
        <div class="row">
                    <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Cele mai recente</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.html">Toate imobilele
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        
        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">
        <?php
 $interogaretea = "SELECT cod_imobil, fotografie1, cod_postal, localitate, adresa, statut, pret, marime, nr_camere, nr_baie, nr_garaj from imobil, localitate, statut, camere, baie, garaj WHERE imobil.cod_localitate=localitate.cod_localitate AND imobil.cod_status=statut.cod_status AND imobil.cod_camere=camere.cod_camere AND imobil.cod_baie=baie.cod_baie AND imobil.cod_garaj=garaj.cod_garaj AND nr_camere='4'";
 //  Execut comanda SQL
 $trimittea = mysqli_query($cnx, $interogaretea) or die("Eroare: " . mysqli_error($cnx));
 while($reztea = mysqli_fetch_assoc($trimittea)) :?>

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/<?= $reztea['fotografie1'] ?>" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                    <a href="proprietati.php?codprop=<?=$reztea['cod_imobil'] ?>"> <?=$reztea['cod_postal'].' '. $reztea['localitate'] ?>
                          <br /> <?=$reztea['adresa'] ?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?= $reztea['statut'] ?> | <?= $reztea['pret'] ?></span>
                      </div>
                      <a href="#" class="link-a">Detalii
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Mărime</h4>
                          <span><?= $reztea['marime'] ?>
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Camere</h4>
                          <span><?= $reztea['nr_camere'] ?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baie</h4>
                          <span><?= $reztea['nr_baie'] ?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garaj</h4>
                          <span><?= $reztea['nr_garaj'] ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <?php endwhile; ?>

                                
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

 <!-- ======= Agents Section ======= -->
 <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Agenții noștri</h2>
              </div>
              <div class="title-link">
                <a href="agents-grid.html">Vezi toate
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
       <div class="row">

        <?php
 $interogareteam = "SELECT cod_agent, nume, prenume, abilitate, imagine, telefon, mobil, email, facebook, twitter, instagram, linkedin from agenti";
 //  Execut comanda SQL
 $trimitteam = mysqli_query($cnx, $interogareteam) or die("Eroare: " . mysqli_error($cnx));
 while($rezteam = mysqli_fetch_assoc($trimitteam)) :?>


          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="assets/img/<?= $rezteam['imagine'] ?>" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="detalii.php?codagent=<?= $rezteam['cod_agent'] ?>" class="link-two"><?= $rezteam['prenume'].' '. $rezteam['nume'] ?></a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                  <?= $rezteam['abilitate'] ?>
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Telefon: </strong> <?= $rezteam['telefon'] ?>
                    </p>
                    <p>
                      <strong>Email: </strong> <?= $rezteam['email'] ?>
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="<?= $rezteam['facebook'] ?>" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="<?= $rezteam['twitter'] ?>" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="<?= $rezteam['instagram'] ?>" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="<?= $rezteam['linkedin'] ?>" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
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
    </section><!-- End Agents Section -->

    
     <!-- ======= Testimonials Section ======= -->
     <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Testimoniale</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">

          <?php
 $interogaret = "SELECT testimonial, imagine_mare, imagine_mica, nume FROM testimoniale";
 //  Execut comanda SQL
 $trimitt = mysqli_query($cnx, $interogaret) or die("Eroare: " . mysqli_error($cnx));
 while($rezt = mysqli_fetch_assoc($trimitt)) :?>

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/<?= $rezt['imagine_mare'] ?>" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                      <?= $rezt['testimonial'] ?>
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="assets/img/<?= $rezt['imagine_mica'] ?>" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author"><?= $rezt['nume'] ?></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <?php endwhile; ?>

           
          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->


   
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