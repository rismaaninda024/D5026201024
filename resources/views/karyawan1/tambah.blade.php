<!DOCTYPE html>
<html>
<head>
	<title>5026201024_RA</title>
</head>
<body>

	<h3>Data Karyawan 1</h3>

	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan1/store" method="post">
		{{ csrf_field() }}
		NIP <input type="text" name="Nip" required="required"> <br/>
		Nama <input type="text" name="Nama" required="required"> <br/>
		Pangkat <input type="text" name="Pangkat" required="required"> <br/>
		Gaji  <input type="number" name="Gaji" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
