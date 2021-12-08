<!DOCTYPE html>
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
            <h1 id="jdl">TAMBAH DATA ABSEN</h1>
        </div>
        <br><br>

	<a href="/absen"> Kembali</a>
    <form action="/absen/simpan" method="post">
        {{ csrf_field() }}

	<br/>
	<br/>
        <div class="form-body">
            <div class="col">
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">Nama Pegawai :</label>
                        <div class='col-sm-8 input-group date' id='nama'>
                            <select class="form-control" name="IDPegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

</body>
</html>
            <div class="col">
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-4 control-label">Tanggal :</label>
                        <div class='col-sm-8 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="Tanggal" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : "id"
                        });
                    });
                </script>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Status :</label>
                        <div class='col-sm-8 input-group date' id='radiopicker'>
                            <input type="radio" id="h" name="Status" value="H">
                            <label for="h">HADIR</label><br>
                            <input type="radio" id="a" name="Status" value="A" checked="checked">
                            <label for="a">TIDAK HADIR</label><br>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <div class="col-sm-6 submit-btn">
                            <input type="submit" class="btn btn-default" value="Simpan Data">
                        </div>
                        <div class="col-sm-6 submit-btn">
                            <a href="/absen" class="btn btn-default" role="button"> Kembali</a>
                        </div>
                        <br><br>
                    </div>
            </div>
        </div>
    </form>
    </div>
@endsection
