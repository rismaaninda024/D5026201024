
@extends('layout.happy')
@section('title', 'Data Mutasi')

	<br/>
	<br/>
@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="judull">UBAH DATA MUTASI</h1>
        </div>
        <br><br>

	@foreach($mutasi as $p)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->mutasi_id }}"> <br/>

        <div class="form-body">
            <div class="col">
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">ID Pegawai :</label>
                            <div class='col-sm-8 input-group date' id='idpegawai'>
                                <input type="number" class="form-control" name="idpegawai" required="required" value="{{ $p->mutasi_idpegawai }}"> <br/>
                            </div>
                    </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="jabatan" class="col-sm-4 control-label">Departemen :</label>
                    <div class='col-sm-8 input-group date' id='departemen'>
                        <input type="text"  class="form-control" name="departemen" required="required" value="{{ $p->mutasi_departemen }}">  <br/>
                    </div>
                </div>
            </div>
             <div class="col">
                <div class="form-group">
                    <label for="jabatan" class="col-sm-4 control-label"> Sub Departemen :</label>
                    <div class='col-sm-8 input-group date' id='subdepartemen'>
                        <input type="text"  class="form-control" name="subdepartemen" required="required" value="{{ $p->mutasi_subdepartemen }}">  <br/>
                    </div>
                </div>
            </div>
			<div class="col">
                <div class="form-group">
                    <label for="jabatan" class="col-sm-4 control-label"> Mulai Bertugas :</label>
                    <div class='col-sm-8 input-group date' id='bertugas'>
                        <input type="datetime-local" name="mulaibertugas" required="required" value="{{ $p->mutasi_mulaibertugas }}">  <br/>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <div class="col-sm-6 submit-btn">
                        <input type="submit" class="btn btn-default" value="Simpan Data">
                    </div>
                    <div class="col-sm-6 submit-btn">
                        <a href="/mutasi" class="btn btn-default" role="button"> Kembali</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
	</form>

	@endforeach
</div>
@endsection
