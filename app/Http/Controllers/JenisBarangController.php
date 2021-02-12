<?php

namespace App\Http\Controllers;
use App\JenisBarang;
use App\KategoriBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    public function index(){
    	$jenis = JenisBarang::all();
    	$kategori = KategoriBarang::all();
    	return view('layouts/jenis/index',compact('jenis','kategori'));
    }

    public function create(Request $request){
    	// dd($request->all());
    	$post = JenisBarang::create([
    		'kategori_id' => $request->kategori_id,
    		'nama_jenis_kategori_barang' => $request->nama_jenis_kategori_barang,
    		'bunga' => $request->bunga,
    		'waktu_tenggang' => $request->waktu_tenggang

    	]);
    	return redirect(route('jenis_kategori_barang'))->with('sukses','Berhasil menambahkan jenis kategori barang');
    }

    public function edit($id){
    	$jenis = JenisBarang::find($id);
    	$kategori = KategoriBarang::all();
    	return view('layouts/jenis/edit',compact('jenis','kategori'));
    }

    public function update(Request $request, $id){
        $jenis = JenisBarang::find($id);
        $jenis->kategori_id = $request->kategori_id;
        $jenis->nama_jenis_kategori_barang = $request->nama_jenis_kategori_barang;
        $jenis->bunga = $request->bunga;
        $jenis->waktu_tenggang = $request->waktu_tenggang;
        $jenis->save();
       
        return redirect(route('jenis_kategori_barang'))->with('update','Data berhasil di update');
    }

    public function hapus($id){
        Jenis::find($id)->delete();
        return redirect('kategori_barang')->with('hapus','Barang sudah berhasil dihapus');
        // dd($id);
    }
}
