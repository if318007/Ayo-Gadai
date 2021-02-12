<?php

namespace App\Http\Controllers;
use App\ALiranDana;
use App\Kas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanaController extends Controller
{
    public function index(){
    	$dana = ALiranDana::all();
    	$kas = Kas::find(1);
    	// $dana_masuk = ALiranDana::whereJenisDana('Masuk')->get();
    	$dana_masuk = DB::table('aliran_dana')->where('jenis_dana','masuk')->sum('jumlah');
    	$dana_keluar = DB::table('aliran_dana')->where('jenis_dana','keluar')->sum('jumlah');
    	$dana_lunas = DB::table('aliran_dana')->where('jenis_dana','lunas')->sum('jumlah');
    	return view('layouts/administrasi/dana/index',compact('dana','kas','dana_masuk','dana_keluar','dana_lunas'));
    }
}
