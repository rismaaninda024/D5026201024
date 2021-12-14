
@extends('layout.happy')
@section('title', 'Data Mouse')


@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="judull">TAMBAH DATA MOUSE</h1>
        </div>
        <br><br>

	<form action="/mouse/store" method="post">
		{{ csrf_field() }}

        <div class="form-body">
            <div class="col">
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">Merk Mouse :</label>
                            <div class='col-sm-8 input-group date' id='nama'>
		                    <input type="text" class="form-control" name="merk" required="required"> <br/>
                            </div>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="jabatan" class="col-sm-4 control-label">Stok Mouse :</label>
                        <div class='col-sm-8 input-group date' id='stok'>
                            <input type="number" class="form-control" name="stok" required="required"> <br/>
                        </div>
                    </div>
            </div>
            <div class="mt-3">
                <div class="col-sm-4"> Ketersediaan : </div>
                <div class="col-8">
                    <input type="radio" id="ada" name="tersedia" value="A">
                    <label for="Ada">Ada</label>
                    <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
                    <label for="Tidak">Tidak ada</label><br>
                </div>
                </div>

            <div class="col">
                <div class="form-group">
                    <div class="col-sm-6 submit-btn">
                        <input type="submit" class="btn btn-default" value="Simpan Data">
                    </div>
                    <div class="col-sm-6 submit-btn">
                        <a href="/mouse" class="btn btn-default" role="button"> Kembali</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
	</form>


    </div>
@endsection
