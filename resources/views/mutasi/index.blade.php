@extends('layout.happy')
@section('title', 'Data Mutasi')

@section('konten')
    <div class="rounded border cont-ktn">
        <br>
    <div class="judul">
        <h1 id="judull">DATA PEGAWAI</h1>
    </div>

    <div>
        <form action="/mutasi/cari" method="GET" style=" margin-top: 1rem">
            <input type="text" class="form-control" name="cari" placeholder="Cari ID . . ." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-primary" value="Cari" style="margin-top: 1rem">
        </form>
    </div>

	<table border="1">
        <br/>
        <br/>
    <div class="col-tabel">
    <table class="table table-striped table-hover table-bordered align-middle">
		<tr>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $p)
		<tr>
			<td>{{ $p->mutasi_idpegawai }}</td>
			<td>{{ $p->mutasi_departemen }}</td>
			<td>{{ $p->mutasi_subdepartemen}}</td>
			<td>{{ $p->mutasi_mulaibertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $p->mutasi_id }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $p->mutasi_id }}">Hapus</a>
                |
				<a href="/mutasi/view/{{ $p->mutasi_id }}">Detail</a>

			</td>
		</tr>
	@endforeach
        <div class="add-btn">
            <a href="/mutasi/tambah" class="btn btn-default" role="button"> + Tambah </a>
        </div>


    </table>
    {{ $mutasi->links() }}
</div>
</div>
@endsection
