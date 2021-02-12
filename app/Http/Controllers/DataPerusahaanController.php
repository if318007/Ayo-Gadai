<?php

namespace App\Http\Controllers;
use App\DataPerusahaan;
use Illuminate\Http\Request;

class DataPerusahaanController extends Controller
{
    public function index(){
    	$data = DataPerusahaan::find(1);
    	return view('layouts/data_perusahaan/index',compact('data'));
    }

    public function edit(Request $request, $id){
    	$data = DataPerusahaan::find($id);
    	$data->update($request->all());
    	return redirect('/data_perusahaan');
    }
}
