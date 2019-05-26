<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class JadwalController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$jadwalbis = DB::table('jadwalbis')->get();
 
    	// mengirim data pegawai ke view index
    	return view('jadwalbis/index',['jadwalbis' => $jadwalbis]);
 
    }

    public function tambah()
{
 
	// memanggil view tambah
	return view('tambah');
 
}
}