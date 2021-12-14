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

	 <center><h2 >View Mouse</h2></center>

	@foreach($mouse as $p)

        <table style="margin:auto">
            <tr>
                <td class="isi-tabel">Kode Mouse</td>
                <td class="isi-tabel"> {{ $p->kodemouse }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Merk Mouse</td>
                <td class="isi-tabel"> {{ $p->merkmouse }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Stock Mouse</td>
                <td class="isi-tabel"> {{ $p->stockmouse }} </td>
            </tr>
            <tr>
                <td class="isi-tabel">Tersedia</td>
                <td class="isi-tabel"> {{ $p->tersedia }} </td>
            </tr>
        </table>


                    <center><button style="margin-top:1rem" type="reset" id="reset" value="reset" class="btn btn-warning">
                      <a href="/mouse"> Kembali</a>
                    </button></center>


	@endforeach

@endsection
