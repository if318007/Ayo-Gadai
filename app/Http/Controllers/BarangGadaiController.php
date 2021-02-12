<?php

namespace App\Http\Controllers;
use App\KategoriBarang;
use App\JenisBarang;
use App\Penyimpanan;
use App\Gadai;
use App\DataPerusahaan;
use App\AliranDana;
use App\Kas;
use App\MetodePembayaran;
use App\PembayaranBunga;
use App\PembayaranLunas;
use Carbon\Carbon;
use App\User;
use Auth;
use Illuminate\Http\Request;

class BarangGadaiController extends Controller
{
    public function index(){

        $gadai = Gadai::whereStatus('Aktif')->get();

        //Untuk Form Kategorinya
        $kategori = KategoriBarang::all();
        $jenis_elektronik = JenisBarang::whereKategoriId(5)->get();
        $jenis_handphone = JenisBarang::whereKategoriId(6)->get();
        $jenis_kendaraan = JenisBarang::whereKategoriId(7)->get();
        $jenis_logam_mulia = JenisBarang::whereKategoriId(8)->get();
        $jenis_perhiasan = JenisBarang::whereKategoriId(9)->get();
        $jenis_laptop = JenisBarang::whereKategoriId(10)->get();
        $jenis_perlengkapan_rumah_tangga = JenisBarang::whereKategoriId(13)->get();
        $jenis_barang_branded_lainnya = JenisBarang::whereKategoriId(14)->get();
        $jenis_sertifikat = JenisBarang::whereKategoriId(15)->get();
        $jenis_mesin = JenisBarang::whereKategoriId(16)->get();
        $jenis_emas = JenisBarang::whereKategoriId(17)->get();
    	return view('layouts/barang/barang_gadai/index',compact('kategori','jenis_elektronik','jenis_handphone','jenis_kendaraan','jenis_logam_mulia','jenis_perhiasan','jenis_laptop','jenis_perlengkapan_rumah_tangga','jenis_barang_branded_lainnya','jenis_sertifikat','jenis_mesin','jenis_emas','gadai'));
    }

    public function create($kategoriBarang){
        if(Auth::user()->role == 'Admin'){
            $kategori = KategoriBarang::all();
            $jenis = JenisBarang::whereKategoriId(5)->get();
            return view('layouts/barang/barang_gadai/create',compact('kategori','jenis'));
        }else if(Auth::user()->role == 'Nasabah'){
            //Elektronik
            if($kategoriBarang == 'Elektronik'){
                $elektronik = JenisBarang::whereKategoriId(1)->get();
                return view('layouts/customer/form-gadai/elektronik/index',compact('elektronik','kategoriBarang'));
            //Handphone
            }else if($kategoriBarang == 'Handphone'){
                $handphone = JenisBarang::whereKategoriId(2)->get();
                return view('layouts/customer/form-gadai/handphone/index',compact('handphone','kategoriBarang'));
            //Kendaraan
            }else if($kategoriBarang == 'Laptop'){
                $laptop = JenisBarang::whereKategoriId(3)->get();
                return view('layouts/customer/form-gadai/laptop/index',compact('laptop','kategoriBarang'));
            }else if($kategoriBarang == 'Perhiasan'){
                $perhiasan = JenisBarang::whereKategoriId(4)->get();
                return view('layouts/customer/form-gadai/perhiasan/index',compact('perhiasan','kategoriBarang'));
            }else if($kategoriBarang == 'Kendaraan'){
                $kendaraan = JenisBarang::whereKategoriId(5)->get();
                return view('layouts/customer/form-gadai/kendaraan/index',compact('kendaraan','kategoriBarang'));
            }
        }
    }

    public function add(Request $request, $kategori){
        //jika user Admin
        if(Auth::user()->role == 'Admin'){
            $kategori = KategoriBarang::find($id);
            $jenis = JenisBarang::whereId($id)->get();
            return view('layouts/barang/barang_gadai/add',compact('kategori','jenis'));
        }else if(Auth::user()->role == 'Nasabah'){
            //Elektronik Store Data
            if($kategori == 'Elektronik'){
                // dd($request->all());
                $store = new Penyimpanan();
                $store->user_id = Auth::user()->id;
                $store->jenis_kategori_id = $request->input('jenis_kategori_id');
                $store->merk_tipe = $request->input('merk_tipe');
                $store->kondisi = $request->input('kondisi');
                $store->tahun_pembelian = $request->input('tahun_pembelian');
                $store->harga_jual_saat_ini = $request->input('harga_jual_saat_ini');
                $store->jumlah_pinjaman = $request->input('jumlah_pinjaman');
                $store->berat = 0;
                $store->total = 0;
                $store->kelengkapan = '';
                $store->status = 'Menunggu';
                $store->keterangan = '';
                if($request->hasFile('foto_file_barang')){
                    $request->file('foto_file_barang')->move('images/',$request->file('foto_file_barang')->getClientOriginalName());
                    $store->foto_file_barang = $request->file('foto_file_barang')->getClientOriginalName();
                }

                $store->save();
                return redirect('/');
            }else if($kategori == 'Handphone'){
                // dd($request->all());
                $store = new Penyimpanan();
                $store->user_id = Auth::user()->id;
                $store->jenis_kategori_id = $request->input('jenis_kategori_id');
                $store->merk_tipe = $request->input('merk_tipe');
                $store->kondisi = $request->input('kondisi');
                $store->tahun_pembelian = $request->input('tahun_pembelian');
                $store->harga_jual_saat_ini = $request->input('harga_jual_saat_ini');
                $store->jumlah_pinjaman = $request->input('jumlah_pinjaman');
                $store->berat = 0;
                $store->total = 0;
                $store->kelengkapan = '';
                $store->status = 'Menunggu';
                $store->keterangan = '';
                if($request->hasFile('foto_file_barang')){
                    $request->file('foto_file_barang')->move('images/',$request->file('foto_file_barang')->getClientOriginalName());
                    $store->foto_file_barang = $request->file('foto_file_barang')->getClientOriginalName();
                }

                $store->save();
                return redirect('/');
            }else if($kategori == 'Laptop'){
                // dd($request->all());
                $store = new Penyimpanan();
                $store->user_id = Auth::user()->id;
                $store->jenis_kategori_id = $request->input('jenis_kategori_id');
                $store->merk_tipe = $request->input('merk_tipe');
                $store->kondisi = $request->input('kondisi');
                $store->tahun_pembelian = $request->input('tahun_pembelian');
                $store->harga_jual_saat_ini = $request->input('harga_jual_saat_ini');
                $store->jumlah_pinjaman = $request->input('jumlah_pinjaman');
                $store->berat = 0;
                $store->total = 0;
                $store->kelengkapan = '';
                $store->status = 'Menunggu';
                $store->keterangan = '';
                if($request->hasFile('foto_file_barang')){
                    $request->file('foto_file_barang')->move('images/',$request->file('foto_file_barang')->getClientOriginalName());
                    $store->foto_file_barang = $request->file('foto_file_barang')->getClientOriginalName();
                }

                $store->save();
                return redirect('/');
            }else if($kategori == 'Perhiasan'){
                // dd($request->all());
                $store = new Penyimpanan();
                $store->user_id = Auth::user()->id;
                $store->jenis_kategori_id = $request->input('jenis_kategori_id');
                $store->berat = $request->input('berat');
                $store->total = $request->input('total');
                $store->kondisi = $request->input('kondisi');
                $store->tahun_pembelian = $request->input('tahun_pembelian');
                $store->kelengkapan = $request->input('kelengkapan');
                $store->keterangan = $request->input('keterangan');
                $store->jumlah_pinjaman = $request->input('jumlah_pinjaman');
                $store->status = 'Menunggu';
                $store->merk_tipe = '-';
                $store->harga_jual_saat_ini = 0;
                if($request->hasFile('foto_file_barang')){
                    $request->file('foto_file_barang')->move('images/',$request->file('foto_file_barang')->getClientOriginalName());
                    $store->foto_file_barang = $request->file('foto_file_barang')->getClientOriginalName();
                }

                $store->save();
                return redirect('/');
            }
            else if($kategori == 'Kendaraan'){
                // dd($request->all());
                $store = new Penyimpanan();
                $store->user_id = Auth::user()->id;
                $store->jenis_kategori_id = $request->input('jenis_kategori_id');
                $store->merk_tipe = $request->input('merk_tipe');
                $store->kondisi = $request->input('kondisi');
                $store->tahun_pembelian = $request->input('tahun_pembelian');
                $store->harga_jual_saat_ini = $request->input('harga_jual_saat_ini');
                $store->jumlah_pinjaman = $request->input('jumlah_pinjaman');
                $store->berat = 0;
                $store->total = 0;
                $store->kelengkapan = $request->input('kelengkapan');
                $store->status = 'Menunggu';
                $store->keterangan = $request->input('keterangan');
                if($request->hasFile('foto_file_barang')){
                    $request->file('foto_file_barang')->move('images/',$request->file('foto_file_barang')->getClientOriginalName());
                    $store->foto_file_barang = $request->file('foto_file_barang')->getClientOriginalName();
                }

                $store->save();
                return redirect('/');
            }
        }
        
    }

    public function barangDiterimaKurirCek(){
        $penyimpanan = Penyimpanan::whereStatus('Terima')->get();
        return view('layouts/barang/barang_cek_kurir/index',compact('penyimpanan'));
    }

    public function barangJatuhTempo(){
        $gadaiJatuhTempo = Gadai::whereStatus('jatuh_tempo')->get();
        $current = Carbon::now();
        $gadai = Gadai::where('tanggal_jatuh_tempo','<',$current)->whereStatus('aktif')->get();
    	return view('layouts/barang/barang_jatuh_tempo/index',compact('gadai','gadaiJatuhTempo'));
    }

    //Konfirmasi barang jatuh tempo berdasarkan ID Gadai
    public function konfirmasiIdJatuhTempo($id){
        $gadai = Gadai::find($id);
        $gadai->status = 'jatuh_tempo';
        $gadai->save();

        return redirect('/data_barang_jatuh_tempo')->with('sukses','Barang gadai berhasil dimasukkan kedalam barang jatuh tempo');
    }

    //Konfirmasi semua barang gadaian jatuh tempo
    public function konfirmasiSemuaJatuhTempo(){
        $current = Carbon::now();
        $gadai = Gadai::where('tanggal_jatuh_tempo','<',$current)->update(['status' => 'jatuh_tempo']);

        return redirect('/data_barang_jatuh_tempo')->with('sukses','Barang gadai berhasil dimasukkan kedalam barang jatuh tempo');
    }

    public function barangTidakDitebus(){
        $gadaiTidakTebus = Gadai::whereStatus('tidak_ditebus')->get();
        $current = Carbon::now();
        $gadai = Gadai::where('tanggal_jatuh_tempo_tenggang','<',$current)->whereStatus('jatuh_tempo')->get();
        // dd($gadai);
    	return view('layouts/barang/barang_tidak_ditebus/index',compact('gadaiTidakTebus','gadai','current'));
    }

    //Konfirmasi semua barang tidak ditebus
    public function konfirmasiSemuaTidakTebus(){
        $current = Carbon::now();
        $gadai = Gadai::where('tanggal_jatuh_tempo_tenggang','<',$current)->update(['status' => 'tidak_ditebus']);
        //dd($gadai);
        return redirect('/data_barang_tidak_ditebus'); 
    }

    //Konfirmasi barang tidak ditebus
    public function konfirmasiBarangTidakDitebus($id){
        $gadai = Gadai::find($id);
        $gadai->status = 'tidak_ditebus';
        $gadai->save();

        return redirect('/data_barang_tidak_ditebus')->with('sukses','Barang berhasil tidak ditebus berhasil ditambahkan');
    }

    //Konfirmasi barang di lelang
    public function konfirmasiLelang($id){
        $gadai = Gadai::find($id);
        $gadai->status = 'lelang';
        $gadai->save();

        return redirect('/data_barang_lelang')->with('status','Berhasil menambahkan ke barang lelang');
    }

    public function barangLelang(){
        $gadai = Gadai::whereStatus('lelang')->latest()->get();
    	return view('layouts/barang/barang_lelang/index',compact('gadai'));
    }

    public function barangDitebus(){
        $gadai = Gadai::whereStatus('Selesai')->latest()->get();
    	return view('layouts/barang/barang_ditebus/index',compact('gadai'));
    }

    //Menampilkan riwayat oleh customer
    public function riwayat(){
        $penyimpananTerima = Penyimpanan::whereUserId(Auth::user()->id)->whereStatus('Terima')->get();
        $penyimpananPengajuan = Penyimpanan::whereUserId(Auth::user()->id)->where('status','Menunggu')->orWhere('status','Pengajuan')->get();
        $penyimpananAktif = Penyimpanan::whereUserId(Auth::user()->id)->whereStatus('Aktif')->get();
        // $pembayaranBunga = PembayaranBunga::whereUserId(Auth::user()->id)->get();
        return view('layouts/customer/riwayat/index',compact('penyimpananTerima','penyimpananPengajuan','penyimpananAktif'));
    }

    //Menampilkan barang persetujuan
    public function barangPersetujuan(){
        $penyimpanan = Penyimpanan::whereStatus('Menunggu')->latest()->get();
        return view('layouts/barang/barang_persetujuan/index',compact('penyimpanan'));
    }

    //Show data oleh admin
    public function show($id){
        $penyimpanan = Penyimpanan::find($id);
        $biaya_administrasi = DataPerusahaan::find(1);
        $current = Carbon::now();
        $tanggal_jatuh_tempo = $current->addMonth();
        return view('layouts/barang/barang_persetujuan/show',compact('penyimpanan','biaya_administrasi','tanggal_jatuh_tempo'));
    }

    //Show data oleh kurir
    public function showKurir($id){
        $penyimpanan = Penyimpanan::find($id);
        $biaya_administrasi = DataPerusahaan::find(1);
        $current = Carbon::now();
        $tanggal_jatuh_tempo = $current->addMonth(1);
        return view('layouts/barang/barang_cek_kurir/show',compact('penyimpanan','biaya_administrasi','tanggal_jatuh_tempo'));
    }

    //Konfirmasi terima oleh admin
    public function terima($id){
        $dt = Carbon::now();
        $current = Carbon::now();
        $biaya_administrasi = DataPerusahaan::find(1);  
        $gadai = Gadai::create([
            'penyimpanan_id' => $id,
            'biaya_administrasi' => $biaya_administrasi->id,
            'tanggal_gadai' => $dt->toDateString(),
            'tanggal_jatuh_tempo' => $current->addMonth(),
            'perpanjangan_ke' => 0,
            'tanggal_lelang' => $dt,
            'tanggal_pelunasan' => $current->addMonth(),
            'status' => 'aktif'     
        ]);
        // dd($gadai);

        $store = Penyimpanan::findOrFail($id);
        $store->status = 'Terima';
        $store->save();

        return redirect('/data_barang_gadai');
    }

    //Admin mengajukan konfirmasi gadai ke customer
    public function ajukanKeCustomer($id){
        $penyimpanan = Penyimpanan::find($id);
        $penyimpanan->status = 'Pengajuan';
        $penyimpanan->save();
        return redirect('/data_barang_persetujuan');
    }

    //Cek persetujuan oleh customer
    public function cekPersetujuan($id){
        $penyimpanan = Penyimpanan::find($id);
        $biaya_administrasi = DataPerusahaan::find(1);

        //bunga kategori
        $bunga_kategori = $penyimpanan->jenis->bunga;
        //biaya administrasi
        $biaya_admin = $biaya_administrasi->biaya_admin;
        //jumlah pinjaman
        $jumlah_pinjaman_user = $penyimpanan->jumlah_pinjaman;
        //yang dapat dipinjam
        $jumlah_yang_bisa_dipinjam = $penyimpanan->jumlah_pinjaman - $biaya_admin - ($bunga_kategori/100 * $jumlah_pinjaman_user);
        return view('layouts/customer/persetujuan/index',compact('penyimpanan','biaya_administrasi','jumlah_yang_bisa_dipinjam'));
    }

    //Setujui persetujuan oleh customer
    public function setujuiPersetujuan($id){
        // $dt = Carbon::now();
        // $current = Carbon::now();
        $penyimpanan = Penyimpanan::find($id);
        // $biaya_administrasi = DataPerusahaan::find(1);  
        // $gadai = Gadai::create([
        //     'penyimpanan_id' => $id,
        //     'biaya_administrasi' => $biaya_administrasi->id,
        //     'tanggal_gadai' => $dt->toDateString(),
        //     'tanggal_jatuh_tempo' => $current->addMonth(),
        //     'perpanjangan_ke' => 0,
        //     'tanggal_lelang' => $dt,
        //     'tanggal_pelunasan' => $current->addMonth(),    
        //     'status' => 'aktif'     
        // ]);

        $penyimpanan->status = 'Terima';
        $penyimpanan->save();

        //Insert dana keluar jenis peminjaman customer
        // $dana_keluar = AliranDana::create([
        //     'penyimpanan_id' => $id,
        //     'kas_id' => 1,
        //     'jumlah' => $penyimpanan->jumlah_pinjaman,
        //     'jenis_dana' => 'Keluar',
        //     'keterangan' => 'Peminjaman Dana (Gadai)',
        //     'tanggal' => $dt
        // ]);
        //End insert dana keluar jenis peminjaman customer

        //Insert dana masuk jenis biaya administrasi
        // $administrasi_masuk = AliranDana::create([
        //     'penyimpanan_id' => $id,
        //     'kas_id' => 1,
        //     'jumlah' => $biaya_administrasi->biaya_admin,
        //     'jenis_dana' => 'Masuk',
        //     'keterangan' => 'Biaya Administrasi',
        //     'tanggal' => $dt
        // ]);
        //End insert dana jenis biaya administrasi


        //Insert dana masuk jenis biaya bunga

        //Dapatkan besar bunga dari jenis kategori tersebut
        // $bunga_kategori = $penyimpanan->jenis->bunga;
        //Dapatkan besar biaya pinjaman customer
        // $jumlah_pinjaman_user = $penyimpanan->jumlah_pinjaman;

        //hitung besar biaya bunga dari jumlah pinjaman
        // $bunga_untuk_admin = $bunga_kategori/100 * $jumlah_pinjaman_user;

        // $bunga_masuk = AliranDana::create([
        //     'penyimpanan_id' => $id,
        //     'kas_id' => 1,
        //     'jumlah' => $bunga_untuk_admin,
        //     'jenis_dana' => 'Masuk',
        //     'keterangan' => 'Bunga',
        //     'tanggal' => $dt
        // ]);

        // $penguranganSaldoAkhir = $penyimpanan->jumlah_pinjaman;
        // $saldo_akhir = Kas::where('id', 1)->decrement('saldo_akhir', $penguranganSaldoAkhir);

        return redirect('/data-barang_gadai/riwayat');
    }

    public function terimaDariKurir($id){
        $dt = Carbon::now();
        $current = Carbon::now();
        $tanggal_jatuh_tempo = Carbon::now()->addMonth(1);
        $penyimpanan = Penyimpanan::find($id);
        //coba baru tanggal jatuh tempo
        // $tanggal_jatuh_tempo_baru = $current->addMonth();
        $tanggal_jatuh_tempo_1 = Carbon::now()->addMonth(1);
        //dapatkan jumlah hari waktu tenggang
        $waktu_tenggang = $penyimpanan->jenis->waktu_tenggang;
        $tanggal_jatuh_tempo_baru_2 = $tanggal_jatuh_tempo_1->addDays($waktu_tenggang);
        //Dari Sini
        $biaya_administrasi = DataPerusahaan::find(1);  
        $gadai = Gadai::create([
            'penyimpanan_id' => $id,
            'biaya_administrasi' => $biaya_administrasi->id,
            'tanggal_gadai' => $dt->toDateString(),
            'tanggal_jatuh_tempo' => $tanggal_jatuh_tempo->toDateString(),
            'tanggal_jatuh_tempo_tenggang' => $tanggal_jatuh_tempo_baru_2->toDateString(),
            'perpanjangan_ke' => 0,
            'tanggal_lelang' => $dt,
            'tanggal_pelunasan' => $current->addMonth(),    
            'status' => 'aktif'     
        ]);

        // dd($tanggal_jatuh_tempo_baru_2);
        $penyimpanan->status = 'Aktif';
        $penyimpanan->save();
        //Sampe Sini
        //Dari Sini juga
        // Insert dana keluar jenis peminjaman customer
        $dana_keluar = AliranDana::create([
            'penyimpanan_id' => $id,
            'kas_id' => 1,
            'jumlah' => $penyimpanan->jumlah_pinjaman-$penyimpanan->jumlah_pinjaman*$penyimpanan->jenis->bunga/100,
            'jenis_dana' => 'Keluar',
            'keterangan' => 'Peminjaman Dana (Gadai)',
            'tanggal' => $dt
        ]);
        // //End insert dana keluar jenis peminjaman customer

        // //Insert dana masuk jenis biaya administrasi
        $administrasi_masuk = AliranDana::create([
            'penyimpanan_id' => $id,
            'kas_id' => 1,
            'jumlah' => $biaya_administrasi->biaya_admin,
            'jenis_dana' => 'Masuk',
            'keterangan' => 'Biaya Administrasi',
            'tanggal' => $dt
        ]);
        // //End insert dana jenis biaya administrasi


        // //Insert dana masuk jenis biaya bunga

        // //Dapatkan besar bunga dari jenis kategori tersebut
        $bunga_kategori = $penyimpanan->jenis->bunga;
        // //Dapatkan besar biaya pinjaman customer
        $jumlah_pinjaman_user = $penyimpanan->jumlah_pinjaman;

        // //hitung besar biaya bunga dari jumlah pinjaman
        $bunga_untuk_admin = $bunga_kategori/100 * $jumlah_pinjaman_user;

        $bunga_masuk = AliranDana::create([
            'penyimpanan_id' => $id,
            'kas_id' => 1,
            'jumlah' => $bunga_untuk_admin,
            'jenis_dana' => 'Masuk',
            'keterangan' => 'Bunga',
            'tanggal' => $dt
        ]);

        $penguranganSaldoAkhir = $penyimpanan->jumlah_pinjaman-($penyimpanan->jumlah_pinjaman*$penyimpanan->jenis->bunga/100);
        $kas = Kas::find(1);
        $kas->saldo_akhir = $kas->saldo_akhir - $penguranganSaldoAkhir;
        $kas->save();
        // $saldo_akhir = Kas::where('id', 1)->decrement('saldo_akhir', $penguranganSaldoAkhir);
        //Sampe Sini
        return redirect('/data_barang_diterima');
    }

    public function terimaLangsung($id){
        $dt = Carbon::now();
        $current = Carbon::now();
        $tanggal_jatuh_tempo = Carbon::now()->addMonth(1);
        $penyimpanan = Penyimpanan::find($id);
        //coba baru tanggal jatuh tempo
        // $tanggal_jatuh_tempo_baru = $current->addMonth();
        $tanggal_jatuh_tempo_1 = Carbon::now()->addMonth(1);
        //dapatkan jumlah hari waktu tenggang
        $waktu_tenggang = $penyimpanan->jenis->waktu_tenggang;
        $tanggal_jatuh_tempo_baru_2 = $tanggal_jatuh_tempo_1->addDays($waktu_tenggang);
        //Dari Sini
        $biaya_administrasi = DataPerusahaan::find(1);  
        $gadai = Gadai::create([
            'penyimpanan_id' => $id,
            'biaya_administrasi' => $biaya_administrasi->id,
            'tanggal_gadai' => $dt->toDateString(),
            'tanggal_jatuh_tempo' => $tanggal_jatuh_tempo->toDateString(),
            'tanggal_jatuh_tempo_tenggang' => $tanggal_jatuh_tempo_baru_2->toDateString(),
            'perpanjangan_ke' => 0,
            'tanggal_lelang' => $dt,
            'tanggal_pelunasan' => $current->addMonth(),    
            'status' => 'aktif'     
        ]);

        // dd($tanggal_jatuh_tempo_baru_2);
        $penyimpanan->status = 'Aktif';
        $penyimpanan->save();
        //Sampe Sini
        //Dari Sini juga
        // Insert dana keluar jenis peminjaman customer
        $dana_keluar = AliranDana::create([
            'penyimpanan_id' => $id,
            'kas_id' => 1,
            'jumlah' => $penyimpanan->jumlah_pinjaman-$penyimpanan->jumlah_pinjaman*$penyimpanan->jenis->bunga/100,
            'jenis_dana' => 'Keluar',
            'keterangan' => 'Peminjaman Dana (Gadai)',
            'tanggal' => $dt
        ]);
        // //End insert dana keluar jenis peminjaman customer

        // //Insert dana masuk jenis biaya administrasi
        $administrasi_masuk = AliranDana::create([
            'penyimpanan_id' => $id,
            'kas_id' => 1,
            'jumlah' => $biaya_administrasi->biaya_admin,
            'jenis_dana' => 'Masuk',
            'keterangan' => 'Biaya Administrasi',
            'tanggal' => $dt
        ]);
        // //End insert dana jenis biaya administrasi


        // //Insert dana masuk jenis biaya bunga

        // //Dapatkan besar bunga dari jenis kategori tersebut
        $bunga_kategori = $penyimpanan->jenis->bunga;
        // //Dapatkan besar biaya pinjaman customer
        $jumlah_pinjaman_user = $penyimpanan->jumlah_pinjaman;

        // //hitung besar biaya bunga dari jumlah pinjaman
        $bunga_untuk_admin = $bunga_kategori/100 * $jumlah_pinjaman_user;

        $bunga_masuk = AliranDana::create([
            'penyimpanan_id' => $id,
            'kas_id' => 1,
            'jumlah' => $bunga_untuk_admin,
            'jenis_dana' => 'Masuk',
            'keterangan' => 'Bunga',
            'tanggal' => $dt
        ]);

        $penguranganSaldoAkhir = $penyimpanan->jumlah_pinjaman-($penyimpanan->jumlah_pinjaman*$penyimpanan->jenis->bunga/100);
        $kas = Kas::find(1);
        $kas->saldo_akhir = $kas->saldo_akhir - $penguranganSaldoAkhir;
        $kas->save();
        // $saldo_akhir = Kas::where('id', 1)->decrement('saldo_akhir', $penguranganSaldoAkhir);
        //Sampe Sini
        return redirect('/data_barang_gadai');
    }

    public function showGadaiAktif($id){
        $penyimpanan = Penyimpanan::find($id);
        $biaya_administrasi = DataPerusahaan::find(1);
        $detail_gadai = Gadai::wherePenyimpananId($id)->first();
        //bunga kategori
        $bunga_kategori = $penyimpanan->jenis->bunga;
        //biaya administrasi
        $biaya_admin = $biaya_administrasi->biaya_admin;
        //jumlah pinjaman
        $jumlah_pinjaman_user = $penyimpanan->jumlah_pinjaman;
        //yang dapat dipinjam
        $jumlah_yang_bisa_dipinjam = $penyimpanan->jumlah_pinjaman - $biaya_admin - ($bunga_kategori/100 * $jumlah_pinjaman_user);
        $metodePembayaran = MetodePembayaran::all();
        return view('layouts/customer/riwayat/showGadai',compact('penyimpanan','biaya_administrasi','jumlah_yang_bisa_dipinjam','detail_gadai','metodePembayaran'));
    }

    public function tambahGadai(){
        $kategori = KategoriBarang::all();
        return view('layouts/barang/barang_gadai/create',compact('kategori'));  
    }

    public function addGadai($kategori){
        if($kategori == 'Elektronik'){
            $elektronik = JenisBarang::whereKategoriId(1)->get();
            $anggota = User::whereRole('Nasabah')->get();
            return view('layouts/barang/barang_gadai/add/form-elektronik',compact('kategori','elektronik','anggota'));
        }elseif($kategori == 'Handphone'){
            $elektronik = JenisBarang::whereKategoriId(2)->get();
            $anggota = User::whereRole('Nasabah')->get();
            return view('layouts/barang/barang_gadai/add/form-handphone',compact('kategori','elektronik','anggota'));
        }elseif($kategori == 'Laptop'){
            $elektronik = JenisBarang::whereKategoriId(3)->get();
            $anggota = User::whereRole('Nasabah')->get();
            return view('layouts/barang/barang_gadai/add/form-laptop',compact('kategori','elektronik','anggota'));
        }elseif($kategori == 'Perhiasan'){
            $elektronik = JenisBarang::whereKategoriId(4)->get();
            $anggota = User::whereRole('Nasabah')->get();
            return view('layouts/barang/barang_gadai/add/form-perhiasan',compact('kategori','elektronik','anggota'));
        }elseif($kategori == 'Kendaraan'){
            $elektronik = JenisBarang::whereKategoriId(5)->get();
            $anggota = User::whereRole('Nasabah')->get();
            return view('layouts/barang/barang_gadai/add/form-kendaraan',compact('kategori','elektronik','anggota'));
        }    
    }

    public function storeGadai(Request $request, $kategori){
        if($kategori == 'Elektronik'){
                // dd($request->all());

                $this->validate($request,[
                'jenis_kategori_id' => 'required',
                'user_id' =>  'required',
                'merk_tipe' => 'required',
                'kondisi' => 'required',
                'tahun_pembelian' => 'required',
                'harga_jual_saat_ini' => 'required',
                'jumlah_pinjaman' => 'required',
                'foto_file_barang' => 'required'
                ]);

                $store = new Penyimpanan();
                $store->user_id = $request->input('user_id');
                $store->jenis_kategori_id = $request->input('jenis_kategori_id');
                $store->merk_tipe = $request->input('merk_tipe');
                $store->kondisi = $request->input('kondisi');
                $store->tahun_pembelian = $request->input('tahun_pembelian');
                $store->harga_jual_saat_ini = $request->input('harga_jual_saat_ini');
                $store->jumlah_pinjaman = $request->input('jumlah_pinjaman');
                $store->berat = 0;
                $store->total = 0;
                $store->kelengkapan = '';
                $store->status = 'Menunggu';
                $store->keterangan = '';
                if($request->hasFile('foto_file_barang')){
                    $request->file('foto_file_barang')->move('images/',$request->file('foto_file_barang')->getClientOriginalName());
                    $store->foto_file_barang = $request->file('foto_file_barang')->getClientOriginalName();
                }

                $store->save();
                return redirect('/data_barang_persetujuan');
            }else if($kategori == 'Handphone'){
                // dd($request->all());

                $this->validate($request,[
                'jenis_kategori_id' => 'required',
                'user_id' =>  'required',
                'merk_tipe' => 'required',
                'kondisi' => 'required',
                'tahun_pembelian' => 'required',
                'harga_jual_saat_ini' => 'required',
                'jumlah_pinjaman' => 'required',
                'foto_file_barang' => 'required'
                ]);

                $store = new Penyimpanan();
                $store->user_id = $request->input('user_id');
                $store->jenis_kategori_id = $request->input('jenis_kategori_id');
                $store->merk_tipe = $request->input('merk_tipe');
                $store->kondisi = $request->input('kondisi');
                $store->tahun_pembelian = $request->input('tahun_pembelian');
                $store->harga_jual_saat_ini = $request->input('harga_jual_saat_ini');
                $store->jumlah_pinjaman = $request->input('jumlah_pinjaman');
                $store->berat = 0;
                $store->total = 0;
                $store->kelengkapan = '';
                $store->status = 'Menunggu';
                $store->keterangan = '';
                if($request->hasFile('foto_file_barang')){
                    $request->file('foto_file_barang')->move('images/',$request->file('foto_file_barang')->getClientOriginalName());
                    $store->foto_file_barang = $request->file('foto_file_barang')->getClientOriginalName();
                }

                $store->save();
                return redirect('/data_barang_persetujuan');
            }else if($kategori == 'Laptop'){
                // dd($request->all());

                $this->validate($request,[
                'jenis_kategori_id' => 'required',
                'user_id' =>  'required',
                'merk_tipe' => 'required',
                'kondisi' => 'required',
                'tahun_pembelian' => 'required',
                'harga_jual_saat_ini' => 'required',
                'jumlah_pinjaman' => 'required',
                'foto_file_barang' => 'required'
                ]);

                $store = new Penyimpanan();
                $store->user_id = $request->input('user_id');
                $store->jenis_kategori_id = $request->input('jenis_kategori_id');
                $store->merk_tipe = $request->input('merk_tipe');
                $store->kondisi = $request->input('kondisi');
                $store->tahun_pembelian = $request->input('tahun_pembelian');
                $store->harga_jual_saat_ini = $request->input('harga_jual_saat_ini');
                $store->jumlah_pinjaman = $request->input('jumlah_pinjaman');
                $store->berat = 0;
                $store->total = 0;
                $store->kelengkapan = '';
                $store->status = 'Menunggu';
                $store->keterangan = '';
                if($request->hasFile('foto_file_barang')){
                    $request->file('foto_file_barang')->move('images/',$request->file('foto_file_barang')->getClientOriginalName());
                    $store->foto_file_barang = $request->file('foto_file_barang')->getClientOriginalName();
                }

                $store->save();
                return redirect('/data_barang_persetujuan');
            }else if($kategori == 'Perhiasan'){
                // dd($request->all());

                $this->validate($request,[
                'jenis_kategori_id' => 'required',
                'user_id' =>  'required',
                'berat' => 'required',
                'total' => 'required',
                'tahun_pembelian' => 'required',
                'kondisi' => 'required',
                'kelengkapan' => 'required',
                'jumlah_pinjaman' => 'required',
                'foto_file_barang' => 'required'
                ]);

                $store = new Penyimpanan();
                $store->user_id = $request->input('user_id');
                $store->jenis_kategori_id = $request->input('jenis_kategori_id');
                $store->berat = $request->input('berat');
                $store->total = $request->input('total');
                $store->kondisi = $request->input('kondisi');
                $store->tahun_pembelian = $request->input('tahun_pembelian');
                $store->kelengkapan = $request->input('kelengkapan');
                $store->keterangan = $request->input('keterangan');
                $store->jumlah_pinjaman = $request->input('jumlah_pinjaman');
                $store->status = 'Menunggu';
                $store->merk_tipe = '-';
                $store->harga_jual_saat_ini = 0;
                if($request->hasFile('foto_file_barang')){
                    $request->file('foto_file_barang')->move('images/',$request->file('foto_file_barang')->getClientOriginalName());
                    $store->foto_file_barang = $request->file('foto_file_barang')->getClientOriginalName();
                }

                $store->save();
                return redirect('/data_barang_persetujuan');
            }
            else if($kategori == 'Kendaraan'){
                // dd($request->all());

                $this->validate($request,[
                'jenis_kategori_id' => 'required',
                'user_id' =>  'required',
                'merk_tipe' => 'required',
                'kondisi' => 'required',
                'tahun_pembelian' => 'required',
                'harga_jual_saat_ini' => 'required',
                'jumlah_pinjaman' => 'required',
                'kelengkapan' => 'required',
                'foto_file_barang' => 'required'
                ]);

                $store = new Penyimpanan();
                $store->user_id = $request->input('user_id');
                $store->jenis_kategori_id = $request->input('jenis_kategori_id');
                $store->merk_tipe = $request->input('merk_tipe');
                $store->kondisi = $request->input('kondisi');
                $store->tahun_pembelian = $request->input('tahun_pembelian');
                $store->harga_jual_saat_ini = $request->input('harga_jual_saat_ini');
                $store->jumlah_pinjaman = $request->input('jumlah_pinjaman');
                $store->berat = 0;
                $store->total = 0;
                $store->kelengkapan = $request->input('kelengkapan');
                $store->status = 'Menunggu';
                $store->keterangan = $request->input('keterangan');
                if($request->hasFile('foto_file_barang')){
                    $request->file('foto_file_barang')->move('images/',$request->file('foto_file_barang')->getClientOriginalName());
                    $store->foto_file_barang = $request->file('foto_file_barang')->getClientOriginalName();
                }

                $store->save();
                return redirect('/data_barang_persetujuan');
            }
        // dd($request->all());
    }

    public function tebusLangsung($id){
        $metodePembayaran = MetodePembayaran::all();
        $gadai = Gadai::find($id);
        return view('layouts/pembayaran/lunas/add',compact('metodePembayaran','gadai'));
    }

    public function bayarLunas(Request $request, $id){
        $dt = Carbon::now();
        $current = Carbon::now();
        $gadai = Gadai::find($id);
        $gadai->tanggal_pelunasan = $dt->toDateString();
        $gadai->status = 'Selesai';
        $gadai->save();

        //dapatkan penyimpanan id
        $penyimpanan_id_cari = $gadai->penyimpanan_id;

        //update status penyimpanan
        $lunas = Penyimpanan::find($penyimpanan_id_cari);
        $lunas->status = 'Lunas';
        $lunas->save();

        //tambah pendanaan masuk
        
        //dapatkan kas id
        $kas_id = 1;
        //dapatkan jumlah lunas perbulan
        $jumlah_pelunasan = $request->get('jumlah');
        //buat ke aliran dana
        $aliran_dana = AliranDana::create([
            'penyimpanan_id' => $penyimpanan_id_cari,
            'kas_id' => $kas_id,
            'jumlah' => $request->get('jumlah'),
            'jenis_dana' => 'Lunas',
            'keterangan' => 'Pembayaran Lunas Barang',
            'tanggal' => $current->toDateString()
        ]);

        $kasSekarang = Kas::find(1);
        $kasSekarang->saldo_akhir = $kasSekarang->saldo_akhir + $jumlah_pelunasan;
        $kasSekarang->save();

        //tanggal pembayaran lunas
        $tanggal = Carbon::now();

        $store = new PembayaranLunas();
        $store->gadai_id = $request->input('gadai_id');
        $store->metode_id = $request->input('metode_id');
        $store->jumlah = $request->input('jumlah');
        $store->status = 'Lunas';
        $store->tanggal_pembayaran_lunas = $tanggal->toDateString();
        if($request->hasFile('foto_file_pembayaran')){
            $request->file('foto_file_pembayaran')->move('images/',$request->file('foto_file_pembayaran')->getClientOriginalName());
            $store->foto_file_pembayaran = $request->file('foto_file_pembayaran')->getClientOriginalName();
        }
        $store->save();

        return redirect('/data_barang_ditebus');
    }

    public function perpanjanganLangsung($id){
        $metodePembayaran = MetodePembayaran::all();
        $gadai = Gadai::find($id);
        return view('layouts/pembayaran/bunga/add',compact('metodePembayaran','gadai'));
    }

    public function bayarBunga(Request $request, $id){
        //cari data baris gadai tersebut
        $dt = Carbon::now();
        $gadai = Gadai::find($id);
        $tanggal_jatuh_tempo_cari = Carbon::createFromFormat('Y-m-d', $gadai->tanggal_jatuh_tempo)->addMonth();
        $tanggal_jatuh_tempo_cari_tenggang = Carbon::createFromFormat('Y-m-d', $gadai->tanggal_jatuh_tempo_tenggang)->addMonth();
        $perpanjangan_ke_cari = $gadai->perpanjangan_ke;
        $gadai->tanggal_jatuh_tempo = $tanggal_jatuh_tempo_cari;
        $gadai->tanggal_jatuh_tempo_tenggang = $tanggal_jatuh_tempo_cari_tenggang;
        $gadai->perpanjangan_ke = $perpanjangan_ke_cari + 1;
        $gadai->save();

        //dapatkan penyimpanan id
        $penyimpanan_id_cari = $gadai->penyimpanan_id;

        //kas_id
        $kas_id = 1;

        //buat aliran dana
        $aliran_dana = AliranDana::create([
            'penyimpanan_id' => $penyimpanan_id_cari,
            'kas_id' => $kas_id,
            'jumlah' => $request->get('jumlah'),
            'jenis_dana' => 'Masuk',
            'keterangan' => 'Bunga per Bulan',
            'tanggal' => $dt->toDateString()
        ]);

        //tanggal pembayaran lunas
        $tanggal = Carbon::now();

        $store = new PembayaranBunga();
        $store->gadai_id = $request->input('gadai_id');
        $store->metode_id = $request->input('metode_id');
        $store->jumlah = $request->input('jumlah');
        $store->status = 'Terima';
        $store->tanggal_pembayaran_bunga = $tanggal->toDateString();
        if($request->hasFile('foto_file_pembayaran')){
            $request->file('foto_file_pembayaran')->move('images/',$request->file('foto_file_pembayaran')->getClientOriginalName());
            $store->foto_file_pembayaran = $request->file('foto_file_pembayaran')->getClientOriginalName();
        }
        $store->save();

        return redirect('/pembayaran_bunga');
    }

}
