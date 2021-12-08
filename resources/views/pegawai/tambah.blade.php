<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
@extends('layout.happy')
@section('title', 'Data Absen')



	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="judull">TAMBAH DATA PEGAWAI</h1>
        </div>
        <br><br>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="form-body">
            <div class="col">
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">Nama :</label>
                            <div class='col-sm-8 input-group date' id='nama'>
		                    <input type="text" class="form-control" name="nama" required="required"> <br/>
                            </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="jabatan" class="col-sm-4 control-label">Jabatan :</label>
                        <div class='col-sm-8 input-group date' id='jabatan'>
                            <input type="text" class="form-control" name="jabatan" required="required"> <br/>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="umur" class="col-sm-4 control-label">Umur :</label>
                        <div class='col-sm-8 input-group date' id='umur'>
                            <input type="number" class="form-control" name="umur" required="required"> <br/>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="alamat" class="col-sm-4 control-label">Alamat :</label>
                        <div class='col-sm-8 input-group date' id='alamat'>
                            <textarea name="alamat" class="form-control" required="required"></textarea>
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

</body>
</html>
    </div>
@endsection
