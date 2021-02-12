<?php

namespace App\Http\Controllers;
use App\Kas;
use Illuminate\Http\Request;

class KasController extends Controller
{
    public function index(){
    	$kas = Kas::all();
    	return view('layouts/kas/index',compact('kas'));
    }

    public function create(Request $request){
    	$post = Kas::create([
    		'nama_kas' => $request->nama,
    		'bank' => $request->bank,
    		'no_rekening' => $request->rekening,
    		'nama_pemilik' => $request->pemilik,
    		'saldo_awal' => $request->saldo,
            'saldo_akhir' => $request->saldo,

    	]);
    	return redirect(route('kas'))->with('sukses','Berhasil menambahkan kas');
    }

    public function edit($id){
        $kas = Kas::find($id);
        return view('layouts/kas/edit',compact('kas'));
    }

    public function update(Request $request, $id){
        $kas = Kas::find($id);
        $kas->update($request->all());
        return redirect('/kas');
    }

    public function add(Request $request){
        $kasSekarang = Kas::find(1);
        $kasSekarang->saldo_akhir = $kasSekarang->saldo_akhir + $request->get('jumlah');
        $kasSekarang->save();

        return redirect('/dana')->with('sukses','Saldo berhasil ditambahkan');
    }

    public function kurang(Request $request){
        $kasSekarang = Kas::find(1);
        $kasSekarang->saldo_akhir = $kasSekarang->saldo_akhir - $request->get('jumlah');
        $kasSekarang->save();

        return redirect('/dana')->with('sukses','Saldo berhasil dikurang');
    }
}
