
@extends('layout.happy')
@section('title', 'Data Mouse')

	<br/>
	<br/>
@section('konten')
    <div class="rounded border cont-ktn">
        <br>
        <div class="judul">
            <h1 id="judull">UBAH DATA MOUSE</h1>
        </div>
        <br><br>

	@foreach($mouse as $p)
	<form action="/mouse/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodemouse }}"> <br/>

        <div class="form-body">
            <div class="col">
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">Merk Mouse :</label>
                            <div class='col-sm-8 input-group date' id='nama'>
                                <input type="text" class="form-control" name="merk" required="required" value="{{ $p->merkmouse }}"> <br/>
                            </div>
                    </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="jabatan" class="col-sm-4 control-label">Stok Mouse :</label>
                    <div class='col-sm-8 input-group date' id='stok'>
                        <input type="number" class="form-control"  name="stok" required="required" value="{{ $p->stockmouse }}">  <br/>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="tersedia" class="col-sm-4 control-label">Ketersediaan :</label>
                    <div class='col-sm-8 input-group date' id='radiopicker'>
                        <input type="radio" id="ada" name="tersedia" value="A" @if($p->tersedia==='A') checked="checked" @endif>
                        <label for="Ada">Ada</label><br>
                        <input type="radio" id="tidak" name="tersedia" value="T" @if($p->tersedia==='T') checked="checked" @endif>
                        <label for="Tidak">Tidak Ada</label><br>
                    </div>
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

	@endforeach
</div>
@endsection
