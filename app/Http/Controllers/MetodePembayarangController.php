<?php

namespace App\Http\Controllers;
use App\MetodePembayaran;
use Illuminate\Http\Request;

class MetodePembayarangController extends Controller
{
    public function index(){
    	$metode = MetodePembayaran::all();
    	return view('layouts/pembayaran/metode_pembayaran/index',compact('metode'));
    }

    public function create(Request $request){
    	$post = MetodePembayaran::create($request->all());

        if($request->hasFile('foto_file_pembayaran')){
            $request->file('foto_file_pembayaran')->move('images/',$request->file('foto_file_pembayaran')->getClientOriginalName());
            $post->foto_file_pembayaran = $request->file('foto_file_pembayaran')->getClientOriginalName();
            $post->save();
        }
    	return redirect(route('metode_pembayaran'))->with('sukses','Berhasil menambahkan metode pembayaran');
    }

    public function edit($id){
    	$detail = MetodePembayaran::find($id);
    	return view('layouts/pembayaran/metode_pembayaran/edit',compact('detail'));
    }

    public function hapus($id){
        MetodePembayaran::find($id)->delete();
        return redirect('metode_pembayaran')->with('hapus','Metode Pembayaran sudah berhasil dihapus');
        // dd($id);
    }

    public function update(Request $request, $id){
        $metode = MetodePembayaran::find($id);
        $metode->update($request->all());
       if($request->hasFile('foto_file_pembayaran')){
            $request->file('foto_file_pembayaran')->move('images/',$request->file('foto_file_pembayaran')->getClientOriginalName());
            $metode->foto_file_pembayaran = $request->file('foto_file_pembayaran')->getClientOriginalName();
            $metode->save();
        }

        return redirect(route('metode_pembayaran'))->with('update','Data Pembayaran berhasil di update');
    }

    public function metode(){
        $metode = MetodePembayaran::all();
        return view('/layouts/customer/pembayaran/index',compact('metode'));
    }
}
