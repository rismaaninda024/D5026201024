
@extends('layout.happy')
@section('title', 'Data Absen')


@section('konten')


<div class="rounded border cont-ktn">
    <br>
    <div class="judul">
        <h1 id="judull">UBAH DATA ABSEN</h1>
    </div>
    <br>
    <h4 id="status">{{ $status }}</h4>
    <br>
	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}


		<input type="hidden" name="id" value="{{ $a->ID }}">
            <div class="form-body">
                <div class="col">
                        <div class="form-group">
                            <label for="nama" class="col-sm-4 control-label">Nama Pegawai :</label>
                            <div class='col-sm-8 input-group date' id='nama'>
                            <select class="form-control" name="IDPegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$a->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-4 control-label">Tanggal :</label>
                        <div class='col-sm-8 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="Tanggal" required="required" value="{{ $a->Tanggal }}" />
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
                            <input type="radio" id="h" name="Status" value="H" @if($a->Status==='H') checked="checked" @endif>
                            <label for="h">HADIR</label><br>
                            <input type="radio" id="a" name="Status" value="A" @if($a->Status==='A') checked="checked" @endif>
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
                    </div>
                </div>
            </div>
	</form>
    @endforeach
</div>
    @endsection
