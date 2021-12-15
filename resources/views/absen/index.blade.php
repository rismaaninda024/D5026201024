
@extends('layout.happy')
@section('title', 'Data Absen')


@section('konten')
<div class="rounded border cont-ktn">
    <br>
<div class="judul">
    <h1 id="judull">DATA ABSEN</h1>
</div>
<div>
    <form action="/absen/cari" method="GET" style=" margin-top: 1rem">
        <input type="text" class="form-control" name="cari" placeholder="Cari  . . ." value="{{ old('cari') }}">
        <input type="submit" class="btn btn-primary" value="Cari" style="margin-top: 1rem">
    </form>
</div>


	<br/>
	<br/>

	<table border="1">
    <div class="col-tabel">
	<table class="table table-striped table-hover table-bordered align-middle">
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $p->ID }}">Hapus</a>

			</td>
		</tr>
		@endforeach
        <div class="add-btn">
            <a href="/absen/tambah/" class="btn btn-default" role="button"> + Tambah Absensi Baru</a>
        </div>
	</table>
    {{ $absen->links() }}

    </div>
</div>
@endsection
