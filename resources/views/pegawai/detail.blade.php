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

	 <center><h2 >View Pegawai</h2></center>

	@foreach($pegawai as $p)

        <table style="margin:auto">
            <tr>
                <td class="isi-tabel">ID Pegawai</td>
                <td class="isi-tabel"> {{ $p->pegawai_id }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Nama</td>
                <td class="isi-tabel"> {{ $p->pegawai_nama}} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Jabatan</td>
                <td class="isi-tabel"> {{ $p->pegawai_jabatan }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Umur</td>
                <td class="isi-tabel"> {{ $p->pegawai_umur }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Alamat</td>
                <td class="isi-tabel"> {{ $p->pegawai_alamat }} </td>
            </tr>
        </table>


                    <center><button style="margin-top:1rem" type="reset" id="reset" value="reset" class="btn btn-warning">
                      <a href="/mouse"> Kembali</a>
                    </button></center>


	@endforeach

@endsection
