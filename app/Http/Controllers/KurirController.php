<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    public function index(){
    	$kurir = User::whereRole('Kurir')->get();
    	return view('layouts/kurir/index',compact('kurir'));
    }

    public function create(Request $request){
    	// dd($request->all());
    	$post = User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
    		'status' => 'tidak aktif',
    		'role' => 'Kurir'

    	]);
    	return redirect(route('data_kurir'))->with('sukses','Berhasil menambahkan kurir');
    }

    public function statusNonAktif(Request $request, $id){
    	$user = User::find($id);
	    $user->status = 'tidak aktif';
	    $user->save();

    	return redirect(route('data_kurir'));
    }

    public function statusAktif(Request $request, $id){
    	$user = User::find($id);
	    $user->status = 'aktif';
	    $user->save();

    	return redirect(route('data_kurir'));
    }

    public function edit($id){
    	$kurir = User::find($id);
    	return view('/layouts/kurir/edit',compact('kurir'));
    }

    public function update(Request $request, $id){
    	$user = User::find($id);
    	$user->name = $request->nama;
    	$user->email = $request->email;
    	$user->save();

    	return redirect(route('data_kurir'))->with('update','Data kurir berhasil diupdate');
    }
}
