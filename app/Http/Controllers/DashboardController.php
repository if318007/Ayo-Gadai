<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Gadai;
use App\Penyimpanan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	if(Auth::user()->role == 'Admin'){
    		$nasabah = User::whereRole('Nasabah')->get();
            $gadaiAktif = Gadai::whereStatus('aktif')->get();
            $gadaiTebus = Gadai::whereStatus('Selesai')->get();
            $current = Carbon::now();
            $gadaiJatuhTempo = Gadai::where('tanggal_jatuh_tempo','<',$current)->whereStatus('aktif')->get();
            $gadai = Gadai::whereDate('created_at', Carbon::today())->whereStatus('Aktif')->get();
    		return view('layouts/dashboard/index',compact('nasabah','gadaiAktif','gadaiTebus','gadai','gadaiJatuhTempo'));
    	}else if(Auth::user()->role == 'Nasabah'){
            $gadai = Penyimpanan::whereUserId(Auth::user()->id)->whereStatus('aktif')->get();
    		return view('layouts/customer/dashboard/index',compact('gadai'));
    	}else if(Auth::user()->role == 'Karyawan'){
            $gadaiAktif = Gadai::whereStatus('aktif')->get();
            $gadaiTebus = Gadai::whereStatus('Selesai')->get();
            $gadai = Gadai::whereDate('created_at', Carbon::today())->whereStatus('aktif')->get();
    		$nasabah = User::whereRole('Nasabah')->get();
            $current = Carbon::now();
            $gadaiJatuhTempo = Gadai::where('tanggal_jatuh_tempo','<',$current)->whereStatus('aktif')->get();
    		return view('layouts/dashboard/index',compact('nasabah','gadai','gadaiAktif','gadaiTebus','gadaiJatuhTempo'));
    	}else if(Auth::user()->role == 'Kurir'){
    		$nasabah = User::whereRole('Nasabah')->get();
            $gadaiAktif = Gadai::whereStatus('aktif')->get();
            $gadaiTebus = Gadai::whereStatus('Selesai')->get();
            $current = Carbon::now();
            $gadaiJatuhTempo = Gadai::where('tanggal_jatuh_tempo','<',$current)->whereStatus('aktif')->get();
            $gadai = Gadai::whereDate('created_at', Carbon::today())->whereStatus('Aktif')->get();
    		return view('layouts/dashboard/index',compact('nasabah','gadaiAktif','gadaiTebus','gadai','gadaiJatuhTempo'));
    	}
    }
}
