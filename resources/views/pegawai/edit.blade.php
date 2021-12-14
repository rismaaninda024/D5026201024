
@extends('layout.happy')
@section('title', 'Data Pegawai')



	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="judull">UBAH DATA PEGAWAI</h1>
        </div>
        <br><br>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

        <div class="form-body">
            <div class="col">
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">Nama :</label>
                            <div class='col-sm-8 input-group date' id='nama'>
                                <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
                            </div>
                    </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="jabatan" class="col-sm-4 control-label">Jabatan :</label>
                    <div class='col-sm-8 input-group date' id='jabatan'>
                        <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="umur" class="col-sm-4 control-label">Umur :</label>
                    <div class='col-sm-8 input-group date' id='umur'>
                        <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="alamat" class="col-sm-4 control-label">Alamat :</label>
                    <div class='col-sm-8 input-group date' id='alamat'>
                        <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="col-sm-6 submit-btn">
                        <input type="submit" class="btn btn-default" value="Simpan Data">
                    </div>
                    <div class="col-sm-6 submit-btn">
                        <a href="/pegawai" class="btn btn-default" role="button"> Kembali</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
	</form>

	@endforeach
</div>
@endsection
