<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Hasbi Personal Blog - My Blog</title>



	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

</head>
<body>
		
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<table class="table table-striped table-bordered mt-3" id="myTable">
							<thead>
								<tr>
									<td width="300">ID</td>
									<td width="300">Nama</td>
									<td width="300">Email</td>
								</tr>
							</thead>
					@foreach($data as $d)
                    <tr class="bg-light">
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->email }}</td>
                    </tr>
                    @endforeach
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" ></script>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



	
</body>

</html>