
@extends('layout.happy')
@section('title', 'Data Mutasi')



	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>
@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="judull">TAMBAH DATA MUTASI</h1>
        </div>
        <br><br>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}

        <div class="form-body">
            <div class="col-sm-4 control label" >
                <label>Nama Pegawai</label>
            </div>
            <div class="col-sm-4 form-group " >
                <select id="idpegawai" name="idpegawai" required="required">
                    @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="jabatan" class="col-sm-4 control-label">Departemen :</label>
                        <div class='col-sm-8 input-group date' id='departemen'>
                            <input type="text" class="form-control" name="departemen" required="required"> <br/>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="umur" class="col-sm-4 control-label">Sub Departemen :</label>
                        <div class='col-sm-8 input-group date' id='subdepartemen'>
                           <input type="text" class="form-control" name="subdepartemen" required="required"> <br/>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="alamat" class="col-sm-4 control-label">mulai Bertugas :</label>
                        <div class='col-sm-8 input-group date' id='mulai'>
                            <input type="datetime-local" class="form-control" name="mulaibertugas" required="required"> <br/>
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


    </div>
@endsection
