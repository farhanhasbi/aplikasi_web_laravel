<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hasbi Personal Blog - My Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<table class="table">
						<tr>
							<td>Judul</td>
							<td>isi</td>
							<td>Kategori</td>
							<td>Author</td>
							<td>Gambar</td>
							<td style="width: 15%;"><a class="btn btn-success" href="{{ url('/tbh') }}">Tambah</a></td>
						</tr>
						@foreach($data as $dw)
						<tr>
							<td>{{ $dw->judul }}</td>
							<td>{{ str_limit($dw->desc, 20) }}</td>
							<td>{{ $dw->blog['nama'] }}</td>
							<td>{{ $dw->author }}</td>
							<td><img style="width: 130px;" src="{{ asset('img/'.$dw->foto) }}"></td>
							<td>
								<a class="btn btn-primary" href="{{ route('edit.art', $dw->id) }}">Edit</a>
								<a class="btn btn-danger" href="{{ route('del', $dw->id) }}">Delete</a>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>