<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
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

  <!-- Data Tables File -->
  <!-- <script type="text/javascript" src="<?php echo base_url() ;?>assets/DataTables/js/jquery.js"></script> 
  <script type="text/javascript" src="<?php echo base_url() ;?>assets/DataTables/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/DataTables/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/DataTables/css/dataTables.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/DataTables/css/jquery.dataTables.min.css"> -->
 
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"> -->

 <!--  <script type="text/javascript" src="<?php echo base_url() ;?>assets/cdnInternet/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ;?>assets/cdnInternet/jquery-3.3.1.js"></script> 
  <script type="text/javascript" src="<?php echo base_url() ;?>assets/cdnInternet/dataTables.scroller.min.js"></script> -->

  <!-- <link rel="stylesheet" href="<?php echo base_url() ;?>assets/cdnInternet/scroller.dataTables.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ;?>assets/cdnInternet/jquery.dataTables.min.css"> -->

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
          <i class="fa fa-envelope-o"></i> <a href="mailto:rahmatsaputra.ug@gmail.com">rahmatsaputra.ug@gmail.com</a>
          <i class="fa fa-phone"></i> +62 81210197870
        </div>
        </div>

        <div class="social-links float-right">
          <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="" class="instagram"><i class="fa fa-instagram"></i></a>
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
          <li class="active"><a href="<?php echo base_url('dashboard');?>">Dashboard</a></li>
          <!-- <li><a href="#about">About App</a></li> -->
          <li><a href="#services">Perhitungan</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a href="#team">About Developer</a></li> -->

          <li class="drop-down"><a href=""><?php echo $this->session->userdata("nama"); ?></a>
            <ul>
              <li><a href="<?php echo base_url('logout');?>">Keluar</a></li>
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
          <li><a href="#team">Pengembang Aplikasi</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->