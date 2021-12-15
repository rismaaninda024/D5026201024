<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    //
    public function index()
    {
       // $absen = DB::table('absen')->paginate(3);
       $absen = DB::table('absen')
       ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
       ->select('absen.*', 'pegawai.pegawai_nama')
       ->paginate() ;
        return view('absen.index', ['absen' => $absen]);
    }
    // method untuk menampilkan view form tambah absen
    public function tambah()
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        // memanggil view tambah
        return view('absen.tambah', ['pegawai' => $pegawai]);
    }
    public function store(Request $request)
    {
        DB::table('absen')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'Status' => $request->Status
        ]);
        return redirect('/absen');
    }
    // method untuk edit data absen
    public function edit($id)
    {
        // mengambil data absen berdasarkan id yang dipilih
        $absen = DB::table('absen')->where('ID', $id)->get();

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        $status = "Sedang Mengedit";

        // passing data absen yang didapat ke view edit.blade.php
        return view('absen.edit', ['absen' => $absen, 'pegawai' => $pegawai, 'status' => $status]);
    }
    public function update(Request $request)
    {
        DB::table('absen')->where('ID', $request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'Status' => $request->Status
        ]);
        return redirect('/absen');
    }
    public function hapus($id)
    {
        DB::table('absen')->where('ID', $id)->delete();
        return redirect('/absen');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$absen = DB::table('absen')
		->where('IDPegawai','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('absen.index',['absen' => $absen]);

	}


}
