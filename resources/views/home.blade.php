@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="{{asset('css/welcome.css')}}" rel="stylesheet">
    <title></title>
</head>
<body style="background:url({{ asset('image/fall.jpg') }} );background-size: cover;
background-repeat: no-repeat;
position: relative;
display: flex;
justify-content: center;
align-items: center;
background-attachment: fixed;
height: 100vh;">
<section>
    <div class="box">
        <h2>Welcome To my Website</h2>
        <h3><b>Enjoy My Website</b></h3>
    </div>
</section>
</body>
</html>
@endsection