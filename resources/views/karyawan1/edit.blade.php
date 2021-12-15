<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>


	<h3>Edit Karyawan 1</h3>

	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		NIP <input type="text" name="Nip" required="required" value="{{ $p->NIP }}"> <br/>
		Nama <input type="text" name="Nama" required="required" value="{{ $p->Nama }}"> <br/>
		Pangkat <input type="text" name="Pangkat" required="required" value="{{ $p->Pangkat }}"> <br/>
		Gaji  <input type="number" name="Gaji" required="required" value="{{ $p->Gaji }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
