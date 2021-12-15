@extends('layout.happy')
@section('title', 'Data Pegawai')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
    <div class="judul">
        <h1 id="judull">DATA PEGAWAI</h1>
    </div>

    <div>
        <form action="/pegawai/cari" method="GET" style=" margin-top: 1rem">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai . . ." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-primary" value="Cari" style="margin-top: 1rem">
        </form>
    </div>

	<table border="1">
        <br/>
        <br/>
    <div class="col-tabel">
    <table class="table table-striped table-hover table-bordered align-middle">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                |
				<a href="/pegawai/view/{{ $p->pegawai_id }}">Detail</a>
			</td>
		</tr>
		@endforeach
        <div class="add-btn">
            <a href="/pegawai/tambah" class="btn btn-default" role="button"> + Tambah Pegawai Baru</a>
        </div>


    </table>
    {{ $pegawai->links() }}
</div>
</div>
@endsection
