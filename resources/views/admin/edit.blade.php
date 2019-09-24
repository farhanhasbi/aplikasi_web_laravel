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
					<form action="{{ route('edit.spn') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="id" value="{{ $data->id }}">
						<div class="form-group">
						  <label for="formGroupExampleInput">Judul</label>
						  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul" name="judul" value="{{ $data->judul }}">
						</div>

						<div class="form-group">
						  <label for="exampleFormControlTextarea1">Deskripsi</label>
						  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Deskripsi" name="desc">{{ $data->desc }}</textarea>
						</div>

						<div class="form-group">
						 <label for="formGroupExampleInput">Kategori</label>
						 <select class="form-control" name="id_kategori">
						 	<option value="{{ $data->blog['id'] }}">{{ $data->blog['nama'] }}</option>
						 	@foreach($kt as $k)
						 	<option value="{{ $k->id }}">{{ $k->nama }}</option>
						 	@endforeach
						 </select>
						</div>
						
						<div class="form-group">
						  <label for="formGroupExampleInput">Author</label>
						  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Author" name="author" value="{{ $data->author }}">
						</div>

						<div class="form-group">
							
							<label for="formGroupExampleInput">Gambar</label>
							<input type="file" name="foto" class="form-control p-1 mb-2">
						</div>
						
						<button class="btn btn-success">Edit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>