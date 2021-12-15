<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Data Karyawan 1</h3>

	<a href="/karyawan1/tambah"> + Tambah </a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $p)
		<tr>
			<td>{{ $p->NIP }}</td>
			<td>{{ $p->Nama }}</td>
			<td>{{ $p->Pangkat }}</td>
			<td>{{ $p->Gaji }}</td>
			<td>
				<a href="/karyawan1/edit/{{ $p->NIP }}">Edit</a>
				|
				<a href="/karyawan1/hapus/{{ $p->NIP }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
