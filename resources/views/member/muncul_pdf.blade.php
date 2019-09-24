<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	q
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
<table class="table table-striped table-bordered mt-3" border="1" cellpadding="8" id="myTable">
							<thead>
								<tr>
									<td>Nama Member</td>
									<td>Jenis Member</td>
									<td>Tanggal</td>
									<td>Email</td>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $d)
								<tr>
									<td>{{ $d->nama_member }}</td>
									<td>{{ $d->jenis_member }}</td>
									<td>{{ $d->created_at->format('d M Y') }}</td>
									<td>{{ $d->email }}</td>
								</tr>
								@endforeach
							</tbody>
							<form accept-charset="UTF-8" action="" method="POST"><input name="_method" type="hidden" value="delete"></form>
							<form accept-charset="UTF-8" action="" method="POST"><input name="_method" type="hidden" value="put"></form>
						</table>
			</body>
</html>