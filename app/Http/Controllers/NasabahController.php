<?php

namespace App\Http\Controllers;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    public function index(){
    	$nasabah = User::whereRole('Nasabah')->whereStatus('aktif')->get();
    	return view('layouts/nasabah/index',compact('nasabah'));
    }

    public function show($id){
    	$profile = Profile::whereUserId($id)->first();
    	return view('layouts/nasabah/show',compact('profile'));
    }

    public function editPassword($id){
    	$nasabah = User::find($id);
    	return view('layouts/customer/profil/gantiPassword', compact('nasabah'));
    }

    public function updatePassword(Request $request, $id){
    	$nasabah = User::find($id);

        if(Hash::check($request->password, $request->rePassword)){
            $nasabah->password = bcrypt($request->password);
            $nasabah->save();

            return redirect()->back()->with('sukses','Password berhasil diganti!');
        }else{
            return redirect()->back()->with('gagal','Password gagal diganti!, silahkan coba lagi');
        }
    	
    }
}
