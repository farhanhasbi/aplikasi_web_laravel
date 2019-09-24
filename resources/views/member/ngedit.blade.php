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
					<form action="{{ route('edt.simpan') }}" method="POST">
						@csrf
						<input type="hidden" name="id" value="{{ $data->id }}">
						<div class="form-group">
						  <label for="formGroupExampleInput">Nama Member</label>
						  <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $data->nama_member }}" name="nama_member">
						</div>

						<div class="form-group">
						  <label for="formGroupExampleInput">Pilih Jenis Member</label>
						  <select class="form-control" name="jenis_member" id="formGroupExampleInput">
						  	@foreach($member as $mbr)
						  	<option value="{{ $mbr->id }}">{{ $mbr->jenis_member }}</option>
						  	@endforeach
						  </select>
						</div>
						<div class="form-group">
						  <label for="formGroupExampleInput">Email</label>
						  <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $data->email }}" name="email">
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