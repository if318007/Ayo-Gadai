<?php

namespace App\Http\Controllers;
use App\KategoriBarang;
use Auth;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    public function index(){
        if(Auth::user()->role == 'Admin'){
            $kategori = KategoriBarang::all();
            return view('layouts/kategori_barang/index',compact('kategori'));
        }else if(Auth::user()->role == 'Nasabah'){
            $kategori = KategoriBarang::all();
            return view('layouts/customer/gadai/index',compact('kategori'));
        }else if(Auth::user()->role == 'Karyawan'){
            $kategori = KategoriBarang::all();
            return view('layouts/kategori_barang/index',compact('kategori'));
        }
    	
    }

    public function hapus($id){
        KategoriBarang::find($id)->delete();
        return redirect('kategori_barang')->with('hapus','Barang sudah berhasil dihapus');
        // dd($id);
    }

    public function create(Request $request){
    	$post = KategoriBarang::create($request->all());

        if($request->hasFile('foto_barang')){
            $request->file('foto_barang')->move('images/',$request->file('foto_barang')->getClientOriginalName());
            $post->foto_barang = $request->file('foto_barang')->getClientOriginalName();
            $post->save();
        }
    	return redirect(route('kategori_barang'))->with('sukses','Berhasil menambahkan kategori barang');
    }

    public function edit($id){
    	$kategori = KategoriBarang::find($id);
    	return view('layouts/kategori_barang/edit',compact('kategori'));
    }

    public function update(Request $request, $id){
        $kategori = KategoriBarang::find($id);
        $kategori->update($request->all());
       if($request->hasFile('foto_barang')){
            $request->file('foto_barang')->move('images/',$request->file('foto_barang')->getClientOriginalName());
            $kategori->foto_barang = $request->file('foto_barang')->getClientOriginalName();
            $kategori->save();
        }

        return redirect(route('kategori_barang'))->with('update','Data berhasil di update');
    }
}
