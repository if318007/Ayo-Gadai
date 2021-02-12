<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyaratKetentuanController extends Controller
{
    public function index(){
    	return view('layouts/customer/syarat_ketentuan/index');
    }

    public function kontakKami(){
    	return view('layouts/customer/kontak_kami/index');
    }
}
