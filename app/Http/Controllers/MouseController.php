<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MouseController extends Controller
{
    public function index()
    {
    	// mengambil data dari table Mouse
    	$mouse = DB::table('mouse')->paginate(3);

    	// mengirim data mouse ke view index
    	return view('mouse.index',['mouse' => $mouse]);

    }

    // method untuk menampilkan view form tambah mouse
    public function tambah()
    {

	// memanggil view tambah
	return view('mouse.tambah');

   }
   // method untuk insert data ke table mouse
    public function store(Request $request)
{
	// insert data ke table mouse
	DB::table('mouse')->insert([
		'merkmouse' => $request->merk,
		'stockmouse' => $request->stok,
		'tersedia' => $request->tersedia,

	]);
	// alihkan halaman ke halaman mouse
	return redirect('/mouse');

   }
   // method untuk edit data muse
   public function edit($id)
   {
	// mengambil data mouse berdasarkan id yang dipilih
	$mouse = DB::table('mouse')->where('kodemouse',$id)->get();
	// passing data mouse yang didapat ke view edit.blade.php
	return view('mouse.edit',['mouse' => $mouse]);

   }
   // update data mouse
   public function update(Request $request)
   {
	// update data mouse
	DB::table('mouse')->where('kodemouse',$request->id)->update([
		'merkmouse' => $request->merk,
		'stockmouse' => $request->stok,
		'tersedia' => $request->tersedia,
	]);
	// alihkan halaman ke halaman mouse
	return redirect('/mouse');
    }
    // method untuk hapus data mouse
    public function hapus($id)
    {
	// menghapus data mouse berdasarkan id yang dipilih
	DB::table('mouse')->where('kodemouse',$id)->delete();

	// alihkan halaman ke halaman mouse
	return redirect('/mouse');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table laptop sesuai pencarian data
		$mouse = DB::table('mouse')
		->where('merkmouse','like',"%" . $cari . "%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('mouse.index',['mouse' => $mouse]);

	}
    // method untuk melihat detail data mouse
  public function detail($id)
  {
   // mengambil data mouse berdasarkan id yang dipilih
   $mouse = DB::table('mouse')->where('kodemouse', $id)->get();

   // passing data laptopyang didapat ke view edit.blade.php
    return view('mouse.detail', ['mouse' => $mouse]);
}

}

