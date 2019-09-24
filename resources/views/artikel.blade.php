@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Artikel</title>
	
	
	
	<script type="text/javascript" src="https://www.indosmartdigital.com/templates/indosmartdigital/scripts/shBrushJScript.js"></script>
	<script src="https://www.indosmartdigital.com/templates/indosmartdigital/scripts/shBrushPhp.js" type="text/javascript"></script>
	<script src="https://www.indosmartdigital.com/templates/indosmartdigital/scripts/shBrushSql.js" type="text/javascript"></script>
	<script src="https://www.indosmartdigital.com/templates/indosmartdigital/scripts/shBrushCss.js" type="text/javascript"></script>
	<script src="https://www.indosmartdigital.com/templates/indosmartdigital/scripts/shBrushXml.js" type="text/javascript"></script>
	<script src="https://www.indosmartdigital.com/templates/indosmartdigital/scripts/shBrushJava.js" type="text/javascript"></script>

	<link href="https://www.indosmartdigital.com/templates/indosmartdigital/styles/shCoreDefault.css" rel="stylesheet" type="text/css" />
	<link href="https://www.indosmartdigital.com/templates/indosmartdigital/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />

	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript">SyntaxHighlighter.all();</script>
	
    <!--[if lte IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]--> -->
  
  
  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  
  <!-- Facebook Pixel Code -->
  <script>
  	!function(f,b,e,v,n,t,s)
  	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  		n.queue=[];t=b.createElement(e);t.async=!0;
  		t.src=v;s=b.getElementsByTagName(e)[0];
  		s.parentNode.insertBefore(t,s)}(window, document,'script',
  			'https://connect.facebook.net/en_US/fbevents.js');
  		fbq('init', '234978537252352');
  		fbq('track', 'PageView');
  	</script>
  	<noscript><img height="1" width="1" style="display:none"
  		src="https://www.facebook.com/tr?id=234978537252352&ev=PageView&noscript=1"
  		/></noscript>
  		<!-- End Facebook Pixel Code -->

  	</head>

  	<body style="background-color: rgb(248, 249, 250);">
  		<header>			
  		</nav>
  	</header>
  	


  	
  	<!-- SEARCH -->

  	<!-- Intro Section -->
  	<div class="card" style="width: 18rem; float: right; margin-right: 10%; width: 20%; margin-top: 5%;">
  		<div class="card-header">
  			<h2>Kategori</h2>
  		</div>
  		<ul class="list-group list-group-flush">
  			@foreach($kategori as $kt)
  			<li class="list-group-item"><h5><a href="{{ route('kategori', $kt->id) }}">{{ $kt->nama }}</a></h5></li>
  			@endforeach
  		</ul>
  	</div>
  	<section class="artikel">
  		<div class="container">
  			<div class="row">
  				<div class="col">
  					<div class="wrap-left-content menukiri">
  						<div class="wrap-fullartikel |  | clearfix">
  							<div class="row">
  								@foreach($data as $g)
  								<div class="card" style="width: 95%; background-color: white; margin-bottom: 30px;">
  									<div class="card-body">
  										<h1 class="card-title ml-4">{{ $g->judul }}</h1>
  										<span style="color: #888888; font-size: x-small; float: right; margin-top: -3%; margin-right: 5%;">{{ $g->author }}</span>
  										<hr>
  										<div class="col-md-9">
  											<h5 class="card-text">{{ str_limit($g->desc, 100) }}</h5>
  											<br>
  											<a style="font-size: 13px;" href="{{ url('/readmore/' .$g->id) }}">Read More</a>
  										</div>
  										<div class="col-md-3">
  											<img style="width: 100%;" src="{{ asset('img/'.$g->foto) }}">
  										</div>
  									</div>
  								</div>
  								@endforeach	
  							</div><!-- END ROW ARTIKEL -->
  						</div><!-- END CONTAINER ARTIKEL -->
  					</section>

  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  <!-- SUBSCRIBE NEWSLETTER -->
  <!-- JS -->
  <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://www.indosmartdigital.com/templates/indosmartdigital/js/formpencarian.js"></script>
  
  <!-- FB PAGE -->
  <div id="fb-root"></div>
  <script>
  	(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=1502997376616969";
  		fjs.parentNode.insertBefore(js, fjs);
  	}(document, 'script', 'facebook-jssdk'));
  </script>
  
  <script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-39670368-22', 'auto');
  	ga('send', 'pageview');

  </script>
  
  <script id="dsq-count-scr" src="//indosmartdigital.disqus.com/count.js" async></script>
</body>

</html>
@endsection
