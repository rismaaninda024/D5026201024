@extends('layout.happy')
@section('title', 'Data Mouse')


@section('konten')
    <div class="rounded border cont-ktn">
        <br>
    <div class="judul">
        <h1 id="judull">DATA MOUSE</h1>
    </div>
    <div>
        <form action="/mouse/cari" method="GET" style=" margin-top: 1rem">
            <input type="text" class="form-control" name="cari" placeholder="Cari Mouse . . ." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-primary" value="Cari" style="margin-top: 1rem">
        </form>
    </div>
	<br/>
	<br/>
	<table border="1">
        <div class="col-tabel">
        <table class="table table-striped table-hover table-bordered align-middle">
            <tr>
			<th>Merk Mouse</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>
		</tr>
		@foreach($mouse as $p)
		<tr>
			<td>{{ $p->merkmouse }}</td>
			<td>{{ $p->tersedia }}</td>

			<td>
				<a href="/mouse/edit/{{ $p->kodemouse }}">Edit</a>
				|
				<a href="/mouse/hapus/{{ $p->kodemouse }}">Hapus</a>
                |
                <a href="/mouse/view/{{ $p->kodemouse }}">Detail</a>
			</td>
		</tr>
		@endforeach
        <div class="add-btn">
            <a href="/mouse/tambah/" class="btn btn-default" role="button"> + Tambah </a>
        </div>
	</table>
    {{ $mouse->links() }}

    </div>
</div>
@endsection
