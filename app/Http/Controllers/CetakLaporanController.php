<?php

namespace App\Http\Controllers;
use App\Gadai;
use App\Penyimpanan;
use App\AliranDana;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CetakLaporanController extends Controller
{
    public function laporanLunas($id){
    	$laporan = Gadai::find($id);
    	return view('layouts/administrasi/cetak/lunas/index',compact('laporan'));
    }

    public function laporan(){
    	$laporan = Gadai::all();
    	$aliranDana = AliranDana::all();
    	return view('layouts/administrasi/cetak/laporan/index',compact('laporan','aliranDana'));
    }
    
    public function semuaLaporanGadai(){
    	$laporan = Gadai::all();
    	return view('layouts/administrasi/cetak/laporan/gadai/semua/index',compact('laporan'));
    }

    public function laporanGadaiBulanan(){
    	$laporan = Gadai::whereMonth('created_at','=', Carbon::now()->month)->latest()->get();
    	$bulan = Carbon::now()->format('m');
    	return view('layouts/administrasi/cetak/laporan/gadai/bulanan/index',compact('laporan'));
    }

    public function laporanAliranDana(){
    	$laporan = AliranDana::all();
    	$dana_masuk = DB::table('aliran_dana')->where('jenis_dana','Masuk')->sum('jumlah');
    	$dana_keluar = DB::table('aliran_dana')->where('jenis_dana','Keluar')->sum('jumlah');
    	$dana_lunas = DB::table('aliran_dana')->where('jenis_dana','lunas')->sum('jumlah');
    	return view('layouts/administrasi/cetak/laporan/dana/semua/index',compact('laporan','dana_masuk','dana_keluar','dana_lunas'));
    }

    public function laporanAliranDanaBulanan(){
    	$laporan = AliranDana::whereMonth('created_at','=', Carbon::now()->month)->latest()->get();
    	return view('layouts/administrasi/cetak/laporan/dana/bulanan/index',compact('laporan'));
    }

    public function jatuhTempo($id){
        $laporan = Gadai::find($id);
        return view('layouts/barang/barang_jatuh_tempo/cetak',compact('laporan'));
    }

    public function tidakTebus($id){
        $laporan = Gadai::find($id);
        return view('layouts/barang/barang_tidak_ditebus/cetak',compact('laporan'));
    }

    public function lelang($id){
        $laporan = Gadai::find($id);
        return view('layouts/barang/barang_lelang/cetak',compact('laporan'));
    }
}
