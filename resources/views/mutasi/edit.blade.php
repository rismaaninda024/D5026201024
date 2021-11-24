<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $p)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->mutasi_id }}"> <br/>
		ID Pegawai <input type="number" name="idpegawai" required="required" value="{{ $p->mutasi_idpegawai }}"> <br/>
		Departemen <input type="text" name="departemen" required="required" value="{{ $p->mutasi_departemen }}"> <br/>
		Sub Departemen <input type="text" name="subdepartemen" required="required" value="{{ $p->mutasi_subdepartemen }}"> <br/>
		Mulai Bertugas <input type="datetime-local" name="mulaibertugas" required="required">{{ $p->mutasi_mulaibertugas }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
