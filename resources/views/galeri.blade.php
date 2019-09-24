@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gallery</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="../../css/mdb.min.css" rel="stylesheet">

</head>


           
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->

    <!--Main layout-->
    <main>

        <div class="container-fluid text-center">

            <!--Card-->
            <div class="card card-cascade wider reverse my-4 pb-5">

                <!--Card image-->
                <div class="view view-cascade overlay wow fadeIn">
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/78.jpg" class="img-fluid">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/Card image-->
                @guest
                @else
                <!--Card content-->
                <div class="card-body card-body-cascade text-center wow fadeIn" data-wow-delay="0.2s">
                    <!--Title-->
                    <h4 class="card-title"><strong>Posting</strong></h4>
                    <h5 class="blue-text"><strong>Your Image</strong></h5>
                    <a href="{{url('menugaleri')}}" class="btn btn-primary btn-lg">Posting</a>
                </div>
                <!--/.Card content-->
                @endguest

            </div>
            <!--/.Card-->

        </div>

        <div class="container mt-3">
            <div class="row">
                @foreach($galeri as $gallery)
                <div class="col-md-4">
                    <div class="image border shadow mb-4">
                        <img src="{{ asset('uploadimg/'.$gallery->gambar) }}" alt="gambar" style="width:100%;"
                            class="rounded">
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </main>
    <!--/Main layout-->

    <!--Footer-->
    

       

        

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        new WOW().init();

    </script>

</body>

</html>
@endsection
