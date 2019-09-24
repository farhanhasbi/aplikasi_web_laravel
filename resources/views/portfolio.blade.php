@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MeetMe Personal</title>
  <!-- Bootstrap CSS -->
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/linericon/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/lightbox/simpleLightbox.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/nice-select/css/nice-select.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/animate-css/animate.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/popup/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/flaticon/flaticon.css')}}" rel="stylesheet">




  <!-- main css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<body>


  <!--================Header Menu Area =================-->
  
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->
  <section class="home_banner_area">
    <div class="container box_1620">
      <div class="banner_inner d-flex align-items-center">
        <div class="banner_content">
          <div class="media">
            <div class="d-flex">
              <img  src="{{asset('image/fh.jpg')}}">
            </div>
            <div class="media-body">
              <div class="personal_text">
                <h3>Farhan Hasbi</h3>
                <h4>pelajar di smk taruna bhakti</h4>
                <ul class="list basic_info">
                  <li><a href="#"><i class="lnr lnr-calendar-full"></i>20 januari 2002</a></li>
                  <li><a href="#"><i class="lnr lnr-phone-handset"></i>089656260749</a></li>
                  <li><a href="#"><i class="lnr lnr-envelope"></i>farhanhasbi512@gmail.com</a></li>
                  <li><a href="#"><i class="lnr lnr-home"></i>perumahan jatijajar depok</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Welcome Area =================-->
  <section class="welcome_area p_120">
    <div class="container">
      <div class="row welcome_inner">
        <div class="col-lg-6">
          <div class="welcome_text">
            <h4>Tentang saya</h4>
            <p>perkenalkan saya Farhan Hasbi,saya adalah anak kedua dari 3 bersaudara,sekarang saya adalah pelajar di SMK Taruna Bhakti Depok,saya belajar tentang RPL,hobi saya adalah berenang dan saya bercita-cita menjadi programmer yang handal.</p>
            <div class="row">
              <div class="col-md-4">
                <div class="wel_item">
                  <h4>Lulusan</h4>
                  <p>SDIP Cahaya Insan</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="wel_item">
                  <h4>Lulusan</h4>
                  <p>SMPIT Al-Araf</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="wel_item">
                  <h4>pelajar di</h4>
                  <p>SMK Taruna Bhakti</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="tools_expert">
            <div class="skill_main">
              <div class="skill_item">
                <h4>HTML <span class="counter">87</span>%</h4>
                <div class="progress_br">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="skill_item">
                <h4>CSS <span class="counter">92</span>%</h4>
                <div class="progress_br">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="skill_item">
                <h4>Java <span class="counter">71</span>%</h4>
                <div class="progress_br">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="skill_item">
                <h4>PHP <span class="counter">61</span>%</h4>
                <div class="progress_br">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Welcome Area =================-->

  






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
  </body>
  </html>
  @endsection