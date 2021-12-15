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

	 <center><h2 >View Absen</h2></center>

	@foreach($absen as $p)

        <table style="margin:auto">
            <tr>
                <td class="isi-tabel">ID</td>
                <td class="isi-tabel"> {{ $p->ID }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">ID Pegawai</td>
                <td class="isi-tabel"> {{ $p->IDPegawai }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Tanggal</td>
                <td class="isi-tabel"> {{ $p->Tanggal }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Status</td>
                <td class="isi-tabel"> {{ $p->Status }} </td>
            </tr>
        </table>


                    <center><button style="margin-top:1rem" type="reset" id="reset" value="reset" class="btn btn-warning">
                      <a href="/absen"> Kembali</a>
                    </button></center>


	@endforeach

@endsection
