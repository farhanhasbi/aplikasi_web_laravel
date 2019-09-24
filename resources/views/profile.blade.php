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
                <ul class="list basic_info">
                  <p>
                  <h4>Nama :Farhan Hasbi</h4><br>
                  <h4>TTL :Depok 20 januari 2002</h4><br>
                  <h4>Alamat :Perumahan Jatijajar Depok</h4><br>
                  <h4>Sekolah :SMK Taruna Bhakti</h4><br>
                  <h4>Hobi :Berenang</h4><br>
                  <h4>Cita-cita :Programmer</h4><br>
                  <h4>Makanan Favorit :Mie Goreng</h4><br>
                  <h4>Minuman Favorit :Soda</h4><br>
                </p>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  
  

  






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