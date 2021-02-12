<?php

namespace App\Http\Controllers;
use App\User;
use App\Profile;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index($id)
    {
        if(Auth::user()->role == 'Admin'){
        	return view('test');
        }else if(Auth::user()->role == 'Nasabah'){
        	$profile = User::find($id);
            $data = Profile::whereUserId($id)->first();
        	return view('layouts/customer/profil/index', compact('profile','data'));
        }elseif(Auth::user()->role == 'Karyawan'){
        	$profile = Profile::whereUserId($id)->first();
            $user = User::find($id);
        	return view('layouts/profile/index', compact('profile','user'));
        }
    }

    public function edit($id){
        $profile = Profile::whereUserId($id)->first();
    	return view('layouts/profile/edit',compact('profile'));
    }

    public function update(Request $request, $id){

        $admin = \App\Profile::find($id);
        $admin->update($request->all());
        // $admin->nama = $request->nama;
        // $admin->jenis_kelamin = $request->jenis_kelamin;
        // $admin->nomor_hp = $request->nomor_hp;
        // $admin->nomor_identitas = $request->nomor_identitas;
        // $admin->domisili = $request->domisili;
        // $admin->alamat = $request->alamat;
        // $admin->tempat_lahir = $request->tempat_lahir;
        // $admin->tanggal_lahir = $request->tanggal_lahir;
        if($request->hasFile('foto_profile')){
            $request->file('foto_profile')->move('images/',$request->file('foto_profile')->getClientOriginalName());
            $admin->foto_profile = $request->file('foto_profile')->getClientOriginalName();
            $admin->save();
        }
        if($request->hasFile('foto_kartu_identitas')){
            $request->file('foto_kartu_identitas')->move('images/',$request->file('foto_kartu_identitas')->getClientOriginalName());
            $admin->foto_kartu_identitas = $request->file('foto_kartu_identitas')->getClientOriginalName();
            $admin->save();
        }
        return redirect('/')->with('sukses','Profil berhasil diubah');
    }

    public function show($id){
        $profile = Profile::find($id);
        return view('layouts/profile/show',compact('profile'));
    }

    public function editProfil($id){
        $profil = Profile::whereUserId($id)->first();
        return view('layouts/customer/profil/editProfil',compact('profil'));
    }

    public function updateProfil(Request $request, $id){
        $profil = Profile::find($id);
        $profil->nama = $request->get('nama');
        $profil->alamat = $request->get('alamat');
        $profil->nomor_hp = $request->get('nomor_hp');
        $profil->nomor_identitas = $request->get('nomor_identitas');
        $profil->domisili = $request->get('domisili');
        $profil->save();

        return redirect()->back();
    }
}
