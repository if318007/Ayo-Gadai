<?php

namespace App\Http\Controllers;
use App\Penyimpanan;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function editJumlahPinjaman(Request $request, $id){
    	$simpanan = Penyimpanan::find($id);
    	$simpanan->update(['jumlah_pinjaman' => $request->value]);

    	// return $request->all();
    }
}
