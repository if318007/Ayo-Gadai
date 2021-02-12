<?php

namespace App\Http\Controllers;
use App\User;
use App\Profile;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    	$user = User::where('role','Karyawan')->orWhere('role','Admin')->get();
        $totalUser = User::all();
        $totalNasabah = User::whereRole('Nasabah')->get();
        $totalKaryawan = User::whereRole('Karyawan')->get();
        $totalKurir = User::whereRole('Kurir')->get();
    	return view('layouts/user/index',compact('user','totalUser','totalKurir','totalKaryawan','totalNasabah'));
    }

    public function create(Request $request){
    	// dd($request->all());

        $this->validate($request,[
                'nama' => 'required',
                'role' =>  'required',
                'jenis_kelamin' => 'required',
                'role' => 'required',
                'email' => 'required',
                'password' => 'required',
                'nomor_hp' => 'required',
                'nomor_identitas' => 'required',
                'domisili' => 'required',
                'alamat' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'foto_kartu_identitas' => 'required',
                'foto_profile' => 'required'
                ]);

    	$post = User::create([
    		'name' => $request->nama,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
    		'status' => 'aktif',
    		'role' => $request->role

    	]);

        $profile = new Profile();
        $profile->nama = $request->nama;
        $profile->jenis_kelamin = $request->jenis_kelamin;
        $profile->nomor_hp = $request->nomor_hp;
        $profile->nomor_identitas = $request->nomor_identitas;
        $profile->domisili = $request->domisili;
        $profile->alamat = $request->alamat;
        $profile->tempat_lahir = $request->tempat_lahir;
        $profile->tanggal_lahir = $request->tanggal_lahir;
        if($request->hasFile('foto_kartu_identitas')){
                    $request->file('foto_kartu_identitas')->move('images/',$request->file('foto_kartu_identitas')->getClientOriginalName());
                    $profile->foto_kartu_identitas = $request->file('foto_kartu_identitas')->getClientOriginalName();
                }
        if($request->hasFile('foto_profile')){
                    $request->file('foto_profile')->move('images/',$request->file('foto_profile')->getClientOriginalName());
                    $profile->foto_profile = $request->file('foto_profile')->getClientOriginalName();
                }

        $post->profile()->save($profile);

    	return redirect(route('user'))->with('sukses','Berhasil menambahkan anggota');
    }

    public function edit($id){
    	$user = User::find($id);
    	return view('layouts/user/edit',compact('user'));
    }

    public function update(Request $request, $id){
    	$user = User::find($id);
    	$user->name = $request->nama;
    	$user->email = $request->email;
    	$user->role = $request->role;
    	$user->save();

    	return redirect(route('user'));
    }

    public function statusNonAktif(Request $request, $id){
    	$user = User::find($id);
	    $user->status = 'tidak aktif';
	    $user->save();

    	return redirect(route('user'));
    }

    public function statusAktif(Request $request, $id){
    	$user = User::find($id);
	    $user->status = 'aktif';
	    $user->save();

    	return redirect(route('user'));
    }

    public function reset($id){
    	$user = User::find($id);

    	return view('/layouts/user/reset',compact('user'));
    }

    public function resetPassword(Request $request, $id){
    	$user = User::find($id);
    	$user->password = bcrypt($request->password1);
    	$user->save();

    	return redirect(route('user'));
    }

    public function test(){
    	return view('/layouts/user/test');
    }

    public function add(){
        return view('layouts/profile/add');
    }
}
