<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Profile;
use DB;
use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function index(){
		return view('auth/login');
	}

	public function postlogin(Request $request){
		// dd($request->all());

		$this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

		if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'aktif'])){
    		return redirect('/');
        }
    	return redirect('login')->with('gagal','Login Gagal, Silahkan coba lagi');
	}

    public function register(){
        return view('auth/register');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    public function store(Request $request){
        // dd($request->all());

        $post = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => 'aktif',
            'role' => 'Nasabah'

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

        return redirect('/login')->with('sukses','Anda berhasil mendaftar, silahkan login');
    }
}
