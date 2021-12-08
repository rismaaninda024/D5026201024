<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
@extends('layout.happy')
@section('title', 'Data Absen')


@section('konten')
<div class="rounded border cont-ktn">
    <br>
<div class="judul">
    <h1 id="judull">DATA ABSEN</h1>
</div>



	<br/>
	<br/>

	<table border="1">
    <div class="col-tabel">
	<table class="table table-striped table-hover table-bordered align-middle">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $abs)
		<tr>
			<td>{{ $abs->IDPegawai }}</td>
			<td>{{ $abs->Tanggal }}</td>
			<td>{{ $abs->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $abs->ID }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $abs->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
        <div class="add-btn">
            <a href="/absen/tambah/" class="btn btn-default" role="button"> + Tambah Absensi Baru</a>
        </div>
	</table>


</body>
</html>
    </div>
</div>
@endsection
