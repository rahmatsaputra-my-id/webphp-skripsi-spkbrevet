<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">t
  <title>Sistem Penunjang Keputusan SAW</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ;?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url() ;?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url() ;?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ;?>assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ;?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ;?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ;?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!--   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'> -->
  <link href="<?php echo base_url() ;?>assets/css/style_login.css">
  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url() ;?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header" class= "bg-header d-lg-block">

    <div id="topbar">
      <div class="container clearfix">
        <div>
          <div class="contact-info float-left">
          <i class="fa fa-envelope-o"></i> <a href="mailto:ardhip63@gmail.com">rahmatsaputra.ug@gmail.com</a>
          <i class="fa fa-phone"></i> +62 81210197870
        </div>
        </div>

        <div class="social-links float-right">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>SPK<strong>Brevet</strong></span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li ><a href="<?php echo base_url('dashboard');?>">Dashboard</a></li>
          <!-- <li><a href="#about">About App</a></li> -->
          <li class="active"><a href="#services">Perhitungan</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a href="#team">About Developer</a></li> -->

          <li class="drop-down"><a href="#"><?php echo $this->session->userdata("nama"); ?></a>
            <ul>
              <li><a href="<?php echo base_url('logout');?>">Logout</a></li>
              <!-- <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li> -->
            </ul>
          </li>
          <li><a href="#team">About Developer</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <!-- <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first ">
          <h2>Sistem <span>Penunjang</span><br>Keputusan</h2>
          
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section> --><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <!-- <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>About Calculation</h2>
              <h3>Perhitungan dalam aplikasi ini menggunakan metode <i>Simple Weighting Additive (SAW)</i>.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p>Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut quidem alias veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto vel quisquam. Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum iste qui et ut ab alias.</p>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section> --><!-- #about -->


    <!--==========================
      Services Section
    ============================-->

    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <br>
          <br>
          <br>
          <br>  
          <h3><a href="<?php echo base_url('dashboard');?>">MENU APLIKASI</h3>
          <p>Berisikan beberapa fitur untuk menjalankan aplikasi SPKBrevet.</p>
        </header>

        <div class="row">


          <div class=" wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="">Setting Alternatif Data</a></h4>
              <p class="description"><br><br>Pada Menu alternatif data ini merupakan penetuan pencocokan rating setiap data alternatif dengan setiap data kriteria. Pada menu alternatif ini terdapat empat buah kolom yaitu Id Alternatif, Nama Alternatif, Penilaian Kriteria, dan Action.<br><br><b> Id Alternatif</b> merupakan identitas dari setiap data peserta yang mengikuti kursus Brevet.<br><b> Nama Alternatif</b> merupakan nama peserta dari setiap peserta yang mengikuti kursus Brevet.<br><b>Penilaian Kriteria</b> yang berisi tujuh buah sub kolom diantaranya K<sub>1</sub>, K<sub>2</sub>, K<sub>3</sub>, K<sub>4</sub>, K<sub>5</sub>, K<sub>6</sub>, K<sub>7</sub> arti dari sub kolom tersebut merupakan identitas untuk setiap mata pelajaran pada kursus Brevet.<br><b>Action</b> berisikan button Ubah, dan Hapus digunakan untuk mengubah maupun menghapus setiap data.</p>
              <br><br>

              <div id="wrapper">


                <div id="content-wrapper">

                  <div class="container-fluid">

                    

                    <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                      <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>

                    <!-- Card  -->
                    <div class="card mb-3">
                      <div class="card-header text-lg-left">

                        <a class="btn btn-success" href="<?php echo site_url('setting_alternatif') ?>"><i class="fa fa-arrow-left modal-icon"></i>
                          Kembali</a>
                      </div>
                      <div class="card-body">

                          <!-- <?php   
                            foreach ($nilai as $list) {
                              $id = $list['id'];
                              $nama_alternatif = $list['nama_alternatif'];
                              $rating = $list['rating'];
                              $k1 = $list['k1'];
                              $k2 = $list['k2'];
                              $k3 = $list['k3'];
                              $k4 = $list['k4'];
                              $k5 = $list['k5'];
                              $k6 = $list['k6'];
                              $k7 = $list['k7'];
                            }
                          ?> -->

                        <form action="<?php echo site_url("welcome/setting_alternatif_edit/".$id);?>" method="post" enctype="multipart/form-data" >
                             <input type="hidden" name="id" value="<?php echo site_url("welcome/setting_alternatif_edit/".$id);?>" />
                            
                            <div class="form-group text-lg-left">
                              <!--  -->
                              <input class="form-control <?php echo form_error('id') ? 'is-invalid':'' ?>"
                               type="text" name="id" hidden placeholder="ID Alternatif" readonly value="<?php echo $id ?>"/>
                              <div class="invalid-feedback">
                                <?php echo form_error('id') ?>
                              </div>
                            </div>

                            <div class="form-group text-lg-left">
                              <!-- <label for="id_alternatif">ID Alternatif*</label> -->
                              <input class="form-control <?php echo form_error('id_alternatif') ? 'is-invalid':'' ?>"
                               type="text" name="id_alternatif" hidden placeholder="ID Alternatif" readonly value="<?php $a='A'; echo $a."".$id ?>"/>
                              <div class="invalid-feedback">
                                <?php echo form_error('id_alternatif') ?>
                              </div>
                            </div>

                            <div class="form-group text-lg-left">
                              <label for="nama_alternatif">Nama Alternatif*</label>
                              <input class="form-control <?php echo form_error('nama_alternatif') ? 'is-invalid':'' ?>"
                               type="text" name="nama_alternatif"  placeholder="Nama Alternatif" value="<?php echo $nama_alternatif ?>"/>
                              <div class="invalid-feedback">
                                <?php echo form_error('nama_alternatif') ?>
                              </div>
                            </div>

                            <!-- <div class="form-group text-lg-left">
                              <input class="form-control <?php echo form_error('n1') ? 'is-invalid':'' ?>"
                               type="hidden" name="rating" placeholder="Nilai Akhir" value="<?php echo $rating ?>"/>
                              <div class="invalid-feedback">
                                <?php echo form_error('n1') ?>
                              </div>
                            </div>
 -->
                            <br>
                            <div class="form-group text-lg-center">
                              <label><u>Silakan Masukkan Nilai Kriteria</u></label>
                            </div>

                            <div class="form-group text-lg-left">
                              <label for="n1">K<sub>1</sub></label>
                              <input class="form-control <?php echo form_error('n1') ? 'is-invalid':'' ?>"
                               type="number" name="k1" min="1" max="100" placeholder="Nilai Kriteria K1" value="<?php echo $k1 ?>" required=""/>
                              <div class="invalid-feedback">
                                <?php echo form_error('n1') ?>
                              </div>
                            </div>

                            <div class="form-group text-lg-left">
                              <label for="n2">K<sub>2</sub></label>
                              <input class="form-control <?php echo form_error('n2') ? 'is-invalid':'' ?>"
                               type="number" name="k2" min="1" max="100" placeholder="Nilai Kriteria K2" value="<?php echo $k2 ?>" required=""/>
                              <div class="invalid-feedback">
                                <?php echo form_error('n2') ?>
                              </div>
                            </div>

                            <div class="form-group text-lg-left">
                              <label for="n3">K<sub>3</sub></label>
                              <input class="form-control <?php echo form_error('n3') ? 'is-invalid':'' ?>"
                               type="number" name="k3" min="1" max="100" placeholder="Nilai Kriteria K3" value="<?php echo $k3 ?>" required=""/>
                              <div class="invalid-feedback">
                                <?php echo form_error('n3') ?>
                              </div>
                            </div>

                            <div class="form-group text-lg-left">
                              <label for="n4">K<sub>4</sub></label>
                              <input class="form-control <?php echo form_error('n4') ? 'is-invalid':'' ?>"
                               type="number" name="k4"  min="1" max="100" placeholder="Nilai Kriteria K4" value="<?php echo $k4 ?>" required=""/>
                              <div class="invalid-feedback">
                                <?php echo form_error('n4') ?>
                              </div>
                            </div>

                            <div class="form-group text-lg-left">
                              <label for="n5">K<sub>5</sub></label>
                              <input class="form-control <?php echo form_error('n5') ? 'is-invalid':'' ?>"
                               type="number" name="k5" min="1" max="100" placeholder="Nilai Kriteria K5" value="<?php echo $k5 ?>" required=""/>
                              <div class="invalid-feedback">
                                <?php echo form_error('n5') ?>
                              </div>
                            </div>

                            <div class="form-group text-lg-left">
                              <label for="n6">K<sub>6</sub></label>
                              <input class="form-control <?php echo form_error('n6') ? 'is-invalid':'' ?>"
                               type="number" name="k6" min="1" max="100" placeholder="Nilai Kriteria K6" value="<?php echo $k6 ?>" required=""/>
                              <div class="invalid-feedback">
                                <?php echo form_error('n6') ?>
                              </div>
                            </div>

                            <div class="form-group text-lg-left">
                              <label for="n7">K<sub>7</sub></label>
                              <input class="form-control <?php echo form_error('n7') ? 'is-invalid':'' ?>"
                               type="number" name="k7" min="1" max="100" placeholder="Nilai Kriteria K7" value="<?php echo $k7 ?>" required=""/>
                              <div class="invalid-feedback">
                                <?php echo form_error('n7') ?>
                              </div>
                            </div>

                            <!-- <label for="maxk1">maxk1</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control" type="number" step="any" name="maxk1" min="0.0" hidden max="100.0" placeholder="maxk1" value="<?php echo $k['k1'];?>"/>  
                            </div>

                              <!-- <label for="maxk2">maxk2</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control" type="number" step="any" name="maxk2" min="0.0" hidden max="100.0" placeholder="maxk2" value="<?php echo $k['k2'];?>"/>  
                            </div>

                              <!-- <label for="maxk3">maxk3</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control" type="number" step="any" name="maxk3" min="0.0" hidden max="100.0" placeholder="maxk3" value="<?php echo $k['k3'];?>"/>  
                            </div>

                              <!-- <label for="maxk4">maxk4</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control" type="number" step="any" name="maxk4" min="0.0" hidden max="100.0" placeholder="maxk4" value="<?php echo $k['k4'];?>"/>  
                            </div>

                              <!-- <label for="maxk5">maxk5</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control" type="number" step="any" name="maxk5" min="0.0" hidden max="100.0" placeholder="maxk5" value="<?php echo $k['k5'];?>"/>  
                            </div>

                              <!-- <label for="maxk6">maxk6</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control" type="number" step="any" name="maxk6" min="0.0" hidden max="100.0" placeholder="maxk6" value="<?php echo $k['k6'];?>"/>  
                            </div>

                              <!-- <label for="maxk7">maxk7</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control" type="number" step="any" name="maxk7" min="0.0" hidden max="100.0" placeholder="maxk7" value="<?php echo $k['k7'];?>"/>  
                            </div>

                              <!-- <label for="bobot1">Bobot K1</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control <?php echo form_error('bobot_kriteria') ? 'is-invalid':'' ?>"
                               type="number" step="any" name="bobot1" min="0.0" max="1.0" required="" hidden placeholder="Bobot K1" value="<?php $bbt1 =$bbtAll['bobot1']; echo $angka_format = number_format($bbt1,2)?>" />
                            </div>

                              <!-- <label for="bobot2">Bobot K2</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control <?php echo form_error('bobot_kriteria') ? 'is-invalid':'' ?>"
                               type="number" step="any" name="bobot2" min="0.0" max="1.0" required="" hidden placeholder="Bobot K2" value="<?php $bbt2 =$bbtAll['bobot2']; echo $angka_format = number_format($bbt2,2)?>" />
                            </div>

                              <!-- <label for="bobot3">Bobot K3</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control <?php echo form_error('bobot_kriteria') ? 'is-invalid':'' ?>"
                               type="number" step="any" name="bobot3" min="0.0" max="1.0" required="" hidden placeholder="Bobot K3" value="<?php $bbt3 =$bbtAll['bobot3']; echo $angka_format = number_format($bbt3,2)?>" />
                            </div>

                              <!-- <label for="bobot4">Bobot K4</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control <?php echo form_error('bobot_kriteria') ? 'is-invalid':'' ?>"
                               type="number" step="any" name="bobot4" min="0.0" max="1.0" required="" hidden placeholder="Bobot K4" value="<?php $bbt4 =$bbtAll['bobot4']; echo $angka_format = number_format($bbt4,2)?>" />
                            </div>

                              <!-- <label for="bobot5">Bobot K5</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control <?php echo form_error('bobot_kriteria') ? 'is-invalid':'' ?>"
                               type="number" step="any" name="bobot5" min="0.0" max="1.0" required="" hidden placeholder="Bobot K5" value="<?php $bbt5 =$bbtAll['bobot5']; echo $angka_format = number_format($bbt5,2)?>" />
                            </div>

                              <!-- <label for="bobot6">Bobot K6</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control <?php echo form_error('bobot_kriteria') ? 'is-invalid':'' ?>"
                               type="number" step="any" name="bobot6" min="0.0" max="1.0" required="" hidden placeholder="Bobot K6" value="<?php $bbt6 =$bbtAll['bobot6']; echo $angka_format = number_format($bbt6,2)?>" />
                            </div>

                              <!-- <label for="bobot7">Bobot K7</label> -->
                            <div class="form-group text-lg-left">
                              <input class="form-control <?php echo form_error('bobot_kriteria') ? 'is-invalid':'' ?>"
                               type="number" step="any" name="bobot7" min="0.0" max="1.0" required="" hidden placeholder="Bobot K7" value="<?php $bbt7 =$bbtAll['bobot7']; echo $angka_format = number_format($bbt7,2)?>" />
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Update" />
                          </form>

                        </div>

                        <div class="card-footer small text-muted text-lg-left">
                          * required fields
                        </div>


                      </div>
                      <!-- /.container-fluid -->

                      <!-- Sticky Footer -->
                      <!-- <?php $this->load->view("admin/_partials/footer.php") ?> -->

                    </div>
                    <!-- /.content-wrapper -->

                  </div>
                  <!-- /#wrapper -->


                  <?php $this->load->view("admin/_partials/js.php") ?>

            </div>
          </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <!-- <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">
        
        <header class="section-header">
          <h3>Why choose This App?</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <div class="why-us-img">
              <img src="<?php echo base_url() ?>assets/img/why-us.jpg" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>
              <p>
                Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
                et temporibus. Labore est odio.

                Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
              </p>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4>Corporis dolorem</h4>
                <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum. Soluta at enim modi ut incidunt dolor et.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Eum ut aspernatur</h4>
                <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
              </div>
              
              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-language" style="color: #589af1;"></i>
                <h4>Voluptates dolores</h4>
                <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>
              </div>
              
            </div>

          </div>

        </div>

      </div>

      <div class="container">
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
          </div>
  
        </div>

      </div>
    </section> -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">PETUNJUK PENGGUNAAN</h3>
            <p class="cta-text"> <b><i>Bingung Cara Menggunakan Aplikasi Ini?</i></b><br> Pada aplikasi SPKBrevet ini dilengkapi dengan petunjuk penggunaan yang akan menjelaskan bagaimana alur dan bagaimana cara kerja aplikasi ini agar dapat dijalankan dengan benar. Didalam petunjuk penggunaan ini juga terdapat apa saja fungsi dari setiap menu yang terdapat dalam aplikasi ini.</p>
          </div>

          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle collapsed" data-toggle="collapse" href="#faq7">Read More</a>
          </div>

          <div id="faq7" class="collapse col-lg-9 text-center text-lg-left cta-text" data-parent="#manual-list">
              <p>
               Pada Aplikasi SPKBrevet ini kita akan menggunakan metode SAW (Simple Weighting Additive) untuk perhitungan menggunakan data dari alternatif data, kriteria data, dan hasil normalisasi data. Pada Metode SAW ini terdapat 4 buah langkah.
              </p>
          

            <ul id="manual-list" class="wow fadeInUp container">
            
              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq8">Apa Tahap Awal? </i></a>
                <div id="faq8" class="collapse" data-parent="#manual-list">
                  <p class="cta-text">
                    Pada langkah awal yaitu penentuan rating kecocokan setiap alternatif data dengan setiap kriteria data. Pada Menu Alternatif Data.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq9" class="collapsed">Apa Langkah Kedua?</a>
                <div id="faq9" class="collapse" data-parent="#manual-list">
                  <p>
                    Pada langkah kedua ini yaitu Menentukan bobot tiap kriteria yaitu 'Ketentuan Umum dan Tata Cara Perpajakan', 'Pajak Penghasilan pasal 21', 'Pajak Penghasilan', 'Pemotongan Pemungutan', 'Pajak Penghasilan Orang pribadi', 'Pajak Pertambahan Nilai', 'Akuntansi Perpajakan' dapat ditentukan pada menu pembobotan. Pada Menu Kriteria Data.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq10" class="collapsed">Apa Langkah Ketiga?</a>
                <div id="faq10" class="collapse" data-parent="#manual-list">
                  <p>
                    Lalu di langkah ketiga membuat Normalisasi Matriks berdasarkan persamaan yang disesuaikan dengan jenis atribut (atribut keuntungan maupun atribut biaya) sehingga diperoleh matriks ternormalisasi R. Pada Menu Normalisasi Data.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq11" class="collapsed">Apa Saja Langkah Keempat?</a>
                <div id="faq11" class="collapse" data-parent="#manual-list">
                  <p>
                    Melakukan pengurutan data nilai dari peserta kursus Brevet Pajak Terpadu A&B di Universitas Gunadarma. Data yang digunakan dalam tahap pemeringkatan diambil dari nilai yang didapat dari penentuan rating kecocokan dalam fitur alternatif data, kemudian penentuan bobot kriteria yang terdapat dalam fitur kriteria data, lalu pemeringkatan data ternormalisasi yang terdapat pada fitur normalisasi yang dimana datanya sudah dikalikan pada setiap bobot dan juga sudah dijumlahkan dengan setiap data pada kolom yang sama. Pada Menu Ranking Data.
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Features Section
    ============================-->
    <!-- <section id="features">
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
            <p>
              Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
            </p>
            <p>
              Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
            </p>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/features-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
            <p>
             Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt. 
            </p>
            <p>
              Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
            </p>
            <p>
              Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
            </p>
          </div>
          
        </div>

      </div>
    </section> --><!-- #about -->

    <!--==========================
      Portfolio Section
    ============================-->
    <!-- <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/mg/portfolio/app3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src=<?php echo base_url() ?>assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section> --><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>PENGEMBANG APLIKASI</h3>
          <p align='justify'>Seorang <i>Programmer</i> yang menciptakan aplikasi SPKBrevet berbasis web dengan menggunakan bahasa pemrograman PHP <i>framework CI</i>.</p>
        </div>

        

          <div class="col-lg-3 col-md-6 container wow fadeInUp">
            <div class="member">
              <img src="<?php echo base_url() ?>assets/img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rahmat Saputra</h4>
                  <span>IT Programmer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="<?php echo base_url() ?>assets/img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="<?php echo base_url() ?>assets/img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="<?php echo base_url() ?>assets/img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-1.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-2.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-3.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-4.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-5.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-6.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-7.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-8.png" alt="">
        </div>

      </div>
    </section> --><!-- #clients -->


    <!--==========================
      Pricing Section
    ============================-->
    <!-- <section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h3>Pricing</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
      
          
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>19<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Basic Plan
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Odio animi voluptates</li>
                  <li class="list-group-item">Inventore quisquam et</li>
                  <li class="list-group-item">Et perspiciatis suscipit</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
          
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>29<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Regular Plan
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Odio animi voluptates</li>
                  <li class="list-group-item">Inventore quisquam et</li>
                  <li class="list-group-item">Et perspiciatis suscipit</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
          
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>39<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Premium Plan
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Odio animi voluptates</li>
                  <li class="list-group-item">Inventore quisquam et</li>
                  <li class="list-group-item">Et perspiciatis suscipit</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
        </div>
      </div>

    </section> --><!-- #pricing -->

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <!-- <section id="faq">
      <div class="container">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section> --><!-- #faq -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2019 <strong>Rahmat Saputra</strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url() ;?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?php echo base_url() ;?>assets/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ;?>assets/lib/lightbox/js/lightbox.min.js"></script>

<!--   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
  <script src="<?php echo base_url() ;?>assets/js/login.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url() ;?>assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url() ;?>assets/js/main.js"></script>

</body>
</html>
