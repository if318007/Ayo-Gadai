<?php

namespace App\Http\Controllers;
use App\PembayaranLunas;
use App\Gadai;
use App\Kas;
use App\AliranDana;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PembayarangLunasController extends Controller
{
    public function index(){
    	$lunas = PembayaranLunas::all();
    	return view('layouts/pembayaran/lunas/index',compact('lunas'));
    }

    public function show($id){
    	$lunas = PembayaranLunas::find($id);
    	return view('layouts/pembayaran/lunas/show',compact('lunas'));
    }

    public function create(Request $request, $id){
    	$current = Carbon::now();
    	$post = new PembayaranLunas();
    	$post->gadai_id = $request->input('gadai_id');
    	$post->metode_id = $request->input('metode_id');
    	$post->jumlah = $request->input('jumlah');
    	$post->status = $request->input('status');
    	$post->tanggal_pembayaran_lunas = $current->toDateString();
        if($request->hasFile('foto_file_pembayaran')){
            $request->file('foto_file_pembayaran')->move('images/',$request->file('foto_file_pembayaran')->getClientOriginalName());
            $post->foto_file_pembayaran = $request->file('foto_file_pembayaran')->getClientOriginalName();
            $post->save();
        }
    	return redirect('/data-barang_gadai/riwayat')->with('sukses','Berhasil menambahkan metode pembayaran');
    	// dd($request->all());
    }

    public function terimaPembayaranLunas($id){
    	//update status pembayaran lunas
    	$lunas = PembayaranLunas::find($id);
    	$lunas->status = 'Lunas';
    	$lunas->save();

    	//update tanggal jatuh tempo gadai
    	//dapatkan gadai_id
    	$gadai_id = $lunas->gadai_id; 
    	//dapatkan tanggal jatuh tempo berdasarkan gadai_id tersebut
    	// $tanggal_jatuh_tempo_cari = $lunas->gadai->tanggal_jatuh_tempo;
    	// $tanggal_jatuh_tempo_cari = Carbon::createFromFormat('Y-m-d', $lunas->gadai->tanggal_jatuh_tempo)->addMonth();
    	//dapatkan perpanjangan ke berapa sekarang

    	// dd($tanggal_jatuh_tempo_cari);
    	// $perpanjangan_ke_cari = $lunas->gadai->perpanjangan_ke;
    	//cari data baris gadai tersebut
    	$dt = Carbon::now();
    	$gadai = Gadai::find($gadai_id);
    	$gadai->tanggal_pelunasan = $dt->toDateString();
    	$gadai->status = 'Selesai';
    	$gadai->save();

    	//tambah pendanaan masuk
    	//dapatkan penyimpanan id
    	$penyimpanan_id_cari = $lunas->gadai->penyimpanan_id;
    	//dapatkan kas id
    	$kas_id = 1;
    	//dapatkan jumlah lunas perbulan
    	$jumlah_pelunasan = $lunas->jumlah;
    	//buat ke aliran dana
    	$aliran_dana = AliranDana::create([
    		'penyimpanan_id' => $penyimpanan_id_cari,
    		'kas_id' => $kas_id,
    		'jumlah' => $jumlah_pelunasan,
    		'jenis_dana' => 'Lunas',
    		'keterangan' => 'Pembayaran Lunas Barang',
    		'tanggal' => $dt->toDateString()
    	]);

    	$kasSekarang = Kas::find(1);
    	$kasSekarang->saldo_akhir = $kasSekarang->saldo_akhir + $jumlah_pelunasan;
    	$kasSekarang->save();

    	return redirect('/pembayaran_lunas')->with('sukses','Berhasil menerima pembayaran lunas barang');	
	}
}
