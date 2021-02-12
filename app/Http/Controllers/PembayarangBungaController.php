<?php

namespace App\Http\Controllers;
use App\PembayaranBunga;
use App\AliranDana;
use App\Gadai;
use App\Kas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PembayarangBungaController extends Controller
{
    public function index(){
    	$bunga = PembayaranBunga::latest()->get();
    	return view('layouts/pembayaran/bunga/index',compact('bunga'));
    }

    public function create(Request $request, $id){
    	$current = Carbon::now();
    	$post = new PembayaranBunga();
    	$post->gadai_id = $request->input('gadai_id');
    	$post->metode_id = $request->input('metode_id');
    	$post->jumlah = $request->input('jumlah');
    	$post->status = $request->input('status');
    	$post->tanggal_pembayaran_bunga = $current->toDateString();
        if($request->hasFile('foto_file_pembayaran')){
            $request->file('foto_file_pembayaran')->move('images/',$request->file('foto_file_pembayaran')->getClientOriginalName());
            $post->foto_file_pembayaran = $request->file('foto_file_pembayaran')->getClientOriginalName();
            $post->save();
        }
    	return redirect('/data-barang_gadai/riwayat')->with('sukses','Berhasil menambahkan metode pembayaran');
    	// dd($request->all());
    }

    public function show($id){
    	$bunga = PembayaranBunga::find($id);
    	return view('layouts/pembayaran/bunga/show',compact('bunga'));
    }

    public function terimaPembayaranBunga($id){
    	//update status pembayaran bunga
    	$bunga = PembayaranBunga::find($id);
    	$bunga->status = 'Terima';
    	$bunga->save();

    	//update tanggal jatuh tempo gadai
    	//dapatkan gadai_id
    	$gadai_id = $bunga->gadai_id; 
    	//dapatkan tanggal jatuh tempo berdasarkan gadai_id tersebut
    	// $tanggal_jatuh_tempo_cari = $bunga->gadai->tanggal_jatuh_tempo;
    	$tanggal_jatuh_tempo_cari = Carbon::createFromFormat('Y-m-d', $bunga->gadai->tanggal_jatuh_tempo)->addMonth();
    	//dapatkan perpanjangan ke berapa sekarang

    	// dd($tanggal_jatuh_tempo_cari);
    	$perpanjangan_ke_cari = $bunga->gadai->perpanjangan_ke;

        //Cari tanggal jatuh tempo tenggang
        $gadai_cari = Gadai::find($gadai_id);
        $cari1 = Carbon::createFromFormat('Y-m-d', $gadai_cari->tanggal_jatuh_tempo_tenggang)->addMonth();

    	//cari data baris gadai tersebut
    	$dt = Carbon::now();
    	$gadai = Gadai::find($gadai_id);
    	$gadai->tanggal_jatuh_tempo = $tanggal_jatuh_tempo_cari;
    	$gadai->perpanjangan_ke = $perpanjangan_ke_cari + 1;
        $gadai->tanggal_jatuh_tempo_tenggang = $cari1;
    	$gadai->save();

    	//tambah pendanaan masuk
    	//dapatkan penyimpanan id
    	$penyimpanan_id_cari = $bunga->gadai->penyimpanan_id;
    	//dapatkan kas id
    	$kas_id = 1;
    	//dapatkan jumlah bunga perbulan
    	$bunga_per_bulan_dapat = $bunga->jumlah;
    	//buat ke aliran dana
    	$aliran_dana = AliranDana::create([
    		'penyimpanan_id' => $penyimpanan_id_cari,
    		'kas_id' => $kas_id,
    		'jumlah' => $bunga_per_bulan_dapat,
    		'jenis_dana' => 'Masuk',
    		'keterangan' => 'Bunga per Bulan',
    		'tanggal' => $dt->toDateString()
    	]);

    	return redirect('/pembayaran_bunga')->with('sukses','Berhasil menerima bunga perbulan');	
	}
}
