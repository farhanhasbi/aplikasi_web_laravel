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
		<a class="btn btn-success my-3" href="{{route('export.member') }}" style="margin-left: 125px;">EXPORT</a>
		<a class="btn btn-success my-3" href="{{route('pdf.member') }}" style="margin-left: 45px;">CETAK PDF</a>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<table class="table table-striped table-bordered mt-3" id="myTable">
							<thead>
								<tr>
									<td width="300">ID</td>
									<td width="300">Nama Member</td>
									<td width="300">Jenis Member</td>
									<td width="300">tanggal</td>
									<td width="300">Email</td>
									<td width="300">Modify</td>
								</tr>
							</thead>
					@foreach($data as $d)
                    <tr class="bg-light">
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->nama_member }}</td>
                        <td>{{ $d->jenis_member }}</td>
                        <td>{{ $d->created_at->format('d M Y') }}</td>
                        <td>{{ $d->email }}</td>
                        <td><a class="btn btn-info" href="{{ route('edit', $d->id) }}">Edit</a><a
                                class="btn btn-danger" href="{{ route('delete',$d->id) }}"
                                style="margin-left:25px;">Delete</a></td>
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

	<a class="btn btn-danger" style="margin-top: 2%; margin-left: 10%;" href="artikel">Back</a>

	<div class="card" style="width: 18rem; float: right; margin-right: 10%; margin-top: 2%;">
		<div class="card-header">
			<h4>Keterangan Jenis Member</h4>
		</div>
		<ul class="list-group list-group-flush">
			<li class="list-group-item"><h6>1 = Premium</h6></li>
			<li class="list-group-item"><h6>2 = Gold</h6></li>
			<li class="list-group-item"><h6>3 = Silver</h6></li>
		</ul>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" ></script>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



	
</body>

</html>