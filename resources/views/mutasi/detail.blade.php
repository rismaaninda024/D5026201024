@extends('layout.happy')
<style>
    .isi-tabel{
        padding: 10px;

    }
     h2 {
         font-family: 'Droid serif', serif;
         font-size: 36px; font-weight: 400;
         line-height: 44px;
         margin:auto;
     }
     </style>


@section('konten')

	 <center><h2 >View Mutasi</h2></center>

	@foreach($mutasi as $p)

        <table style="margin:auto">
            <tr>
                <td class="isi-tabel">Kode Mouse</td>
                <td class="isi-tabel"> {{ $p->mutasi_id }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Merk Mouse</td>
                <td class="isi-tabel"> {{ $p->mutasi_idpegawai }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Stock Mouse</td>
                <td class="isi-tabel"> {{ $p->mutasi_departemen}} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Tersedia</td>
                <td class="isi-tabel"> {{ $p->mutasi_mulaibertugas }} </td>
            </tr>

        </table>


                    <center><button style="margin-top:1rem" type="reset" id="reset" value="reset" class="btn btn-warning">
                      <a href="/mouse"> Kembali</a>
                    </button></center>


	@endforeach

@endsection
