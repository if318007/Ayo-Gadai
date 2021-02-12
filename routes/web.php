<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/login','AuthController@index')->name('login');
Route::get('/register','AuthController@register')->name('register');
Route::post('/register/post','AuthController@store');
Route::get('/logout','AuthController@logout')->name('logout');
Route::post('/postlogin','AuthController@postlogin');


//Middleware Autentikasi dan Cek Role
Route::group(['middleware' => ['auth','checkRole:Admin,Karyawan,Kurir,Nasabah']], function(){

	//Route Dashboard
	Route::get('/','DashboardController@index')->name('dashboard');
	Route::get('/test','UserController@test')->name('test');


	//ROUTE DATA MASTER

	//Route Data User]                                                            
	Route::get('/user','UserController@index')->name('user');
	Route::post('/user/create','UserController@create');
	Route::get('/user/statusNonAktif/{id}','UserController@statusNonAktif');
	Route::get('/user/statusAktif/{id}','UserController@statusAktif');
	Route::get('/user/edit/{id}','UserController@edit');
	Route::post('/user/update/{id}','UserController@update');
	Route::get('/user/reset/{id}','UserController@reset');
	Route::post('/user/resetpassword/{id}','UserController@resetPassword');
	Route::get('/user/add','UserController@add');

	//Route Kategori Barang
	Route::get('/kategori_barang','KategoriBarangController@index')->name('kategori_barang');
	Route::get('/kategori/{id}/hapus', 'KategoriBarangController@hapus');
	Route::post('/kategori/create','KategoriBarangController@create');
	Route::get('/kategori/{id}/edit','KategoriBarangController@edit');
	Route::post('/kategori/update/{id}','KategoriBarangController@update');

	//Route Jenis Jenis Kategori Barang
	Route::get('/jenis_kategori_barang', 'JenisBarangController@index')->name('jenis_kategori_barang');
	Route::post('/jenis-kategori/create','JenisBarangController@create');
	Route::get('/jenis-kategori/{id}/edit','JenisBarangController@edit');
	Route::post('/jenis-kategori/update/{id}','JenisBarangController@update');
	Route::get('/jenis-kategori/{id}/hapus','JenisBarangController@hapus');


	//Route Data Kurir
	Route::get('/data_kurir','KurirController@index')->name('data_kurir');
	Route::post('kurir/create','KurirController@create');
	Route::get('/non-aktif/kurir/{id}','KurirController@statusNonAktif');
	Route::get('/aktif/kurir/{id}','KurirController@statusAktif');
	Route::get('/edit/kurir/{id}','KurirController@edit');
	Route::post('/kurir/update/{id}','KurirController@update');

	//Route Data Nasabah
	Route::get('/data_nasabah','NasabahController@index')->name('data_nasabah');
	Route::get('/profile-nasabah/show/{id}','NasabahController@show');
	Route::get('/edit-profil-user/{id}','NasabahController@editPassword');
	Route::post('/update/password/{id}','NasabahController@updatePassword');

	
	//Route data barang gadai
	Route::get('/data_barang_gadai','BarangGadaiController@index')->name('data_barang_gadai');
	Route::get('/data_barang_gadai/create','BarangGadaiController@create');
	Route::post('/data-barang_gadai/add/{kategori}','BarangGadaiController@add');
	Route::get('/data-barang_gadai/riwayat','BarangGadaiController@riwayat');
	Route::get('/data-barang-gadai-detail/{id}','BarangGadaiController@show');
	Route::get('/detail-gadai-barang/terima/{id}','BarangGadaiController@terima');
	Route::get('/detail-gadai-barang/ajukanKeCustomer/{id}','BarangGadaiController@ajukanKeCustomer');
	Route::get('/data-barang-gadai-detail/cekPersetujuan/{id}','BarangGadaiController@cekPersetujuan');
	Route::get('/setujui-persetujuan/{id}','BarangGadaiController@setujuiPersetujuan');
	Route::get('/detail-barang-gadai-aktif/{id}','BarangGadaiController@showGadaiAktif');
	Route::get('/konfirmasi/{id}','BarangGadaiController@konfirmasiIdJatuhTempo');
	Route::get('/konfirmasi-semua','BarangGadaiController@konfirmasiSemuaJatuhTempo');
	Route::get('/konfirmasi-semua-tidak-tebus','BarangGadaiController@konfirmasiSemuaTidakTebus');
	Route::get('/konfirmasi-tidak-ditebus/{id}','BarangGadaiController@konfirmasiBarangTidakDitebus');
	Route::get('/konfirmasi-lelang/{id}','BarangGadaiController@konfirmasiLelang');
	Route::get('/data_barang_gadai/addBaru','BarangGadaiController@tambahGadai');
	Route::get('/data_barang_gadai/tambah/{kategori}','BarangGadaiController@addGadai');
	Route::post('/data_barang_gadai/store/{kategori}','BarangGadaiController@storeGadai');
	Route::get('/detail-gadai-barang/terima/langsung/{id}','BarangGadaiController@terimaLangsung');
	Route::get('/tebus-langsung/{id}','BarangGadaiController@tebusLangsung');
	Route::post('/pembayaran-lunas-langsung/{id}','BarangGadaiController@bayarLunas');
	Route::get('/perpanjangan-langsung/{id}','BarangGadaiController@perpanjanganLangsung');
	Route::post('/pembayaran-bunga-langsung/{id}','BarangGadaiController@bayarBunga');

	//Route Gadai Barang oleh Customer
	Route::get('/gadai-barang/{kategoriBarang}','BarangGadaiController@create');


	//Route Profil Customer
	Route::get('/profile/{id}','ProfileController@index');
	Route::get('/profile/edit/{id}','ProfileController@edit');
	Route::post('/profile/update/{id}','ProfileController@update');
	Route::get('/profile/show/{id}','ProfileController@show');
	Route::get('/edit-profil/{id}','ProfileController@editProfil');
	Route::post('/update-profile/{id}','ProfileController@updateProfil');

	//Route Syarat dan Ketentuan
	Route::get('/syarat-ketentuan','SyaratKetentuanController@index');

	//Route Kontak Kami
	Route::get('/kontak-kami','SyaratKetentuanController@kontakKami');

	//Route pembayaran
	Route::get('/pembayaran','MetodePembayarangController@metode');


	Route::get('/data_barang_jatuh_tempo','BarangGadaiController@barangJatuhTempo')->name('data_barang_jatuh_tempo');
	Route::get('/data_barang_persetujuan','BarangGadaiController@barangPersetujuan')->name('data_barang_persetujuan');
	Route::get('/data_barang_tidak_ditebus','BarangGadaiController@barangTidakDitebus')->name('data_barang_tidak_ditebus');
	Route::get('/data_barang_lelang','BarangGadaiController@barangLelang')->name('data_barang_lelang');
	Route::get('/data_barang_ditebus','BarangGadaiController@barangDitebus')->name('data_barang_ditebus');
	Route::get('/laporan','CetakLaporanController@laporan')->name('laporan');


	//Route Data Aliran Dana
	Route::get('/dana','DanaController@index')->name('dana');

	//Route Data Kas
	Route::get('/kas','KasController@index')->name('kas');
	Route::post('/kas/create','KasController@create');
	Route::get('/kas/edit/{id}','KasController@edit');
	Route::post('/kas/update/{id}','KasController@update');
	Route::post('/kas/tambah-dana','KasController@add');
	Route::post('/kas/kurang-dana','KasController@kurang');

	//Route Data Perusahaan
	Route::get('/data_perusahaan','DataPerusahaanController@index')->name('data_perusahaan');
	Route::post('/data-perusahaan/edit/{id}','DataPerusahaanController@edit');

	//Route Kurir
	Route::get('/data_barang_diterima','BarangGadaiController@barangDiterimaKurirCek')->name('data_barang_diterima');
	Route::get('/data-barang-gadai-detail-kurir/{id}','BarangGadaiController@showKurir');
	Route::get('/detail-gadai-barang-kurir/terima/{id}','BarangGadaiController@terimaDariKurir');



	//Route Pembayaran Bunga dan Lunas
	//Route Pembayaran Bunga
	Route::get('/pembayaran_bunga','PembayarangBungaController@index')->name('pembayaran_bunga');
	Route::post('/pembayaran_bunga/{id}','PembayarangBungaController@create');
	Route::get('/pembayaran_bunga/detail/{id}','PembayarangBungaController@show');
	Route::get('/pembayaran_bunga/terima/{id}','PembayarangBungaController@terimaPembayaranBunga');

	//Route Pembayaran Lunas
	Route::get('/pembayaran_lunas','PembayarangLunasController@index')->name('pembayaran_lunas');
	Route::post('/pembayaran_lunas/{id}','PembayarangLunasController@create');
	Route::get('/pembayaran_lunas/detail/{id}','PembayarangLunasController@show');
	Route::get('/pembayaran_lunas/terima/{id}','PembayarangLunasController@terimaPembayaranLunas');


	//Route Metode Pembayaran
	Route::get('/metode_pembayaran','MetodePembayarangController@index')->name('metode_pembayaran');
	Route::post('/metode_pembayaran/create','MetodePembayarangController@create');
	Route::get('/metode_pembayaran/edit/{id}','MetodePembayarangController@edit');
	Route::get('/metode_pembayaran/hapus/{id}','MetodePembayarangController@hapus');
	Route::post('metode_pembayaran/update/{id}','MetodePembayarangController@update');

	//Route cetak laporan gadai
	Route::prefix('/cetak')->group(function () {
		//melunaskan berdasarkan id
	    Route::get('/laporan-lunas/{id}','CetakLaporanController@laporanLunas');

	    //mencetak laporan berdasarkan semua data gadai dan bulanan
	    Route::get('/semua-laporan-gadai','CetakLaporanController@semuaLaporanGadai');
	    Route::get('/laporan-gadai-bulanan','CetakLaporanController@laporanGadaiBulanan');

	    //mencetak laporan berdasarkan semua data aliran dana dan bulanan
	    Route::get('/semua-aliran-dana','CetakLaporanController@laporanAliranDana');
	    Route::get('/laporan-aliran-dana-bulanan','CetakLaporanController@laporanAliranDanaBulanan');

	    //mencetak laporan jatuh tempo
	    Route::get('/jatuh-tempo/{id}','CetakLaporanController@jatuhTempo');

	    //mencetak laporan tidak ditebus
	    Route::get('/tidak-tebus/{id}','CetakLaporanController@tidakTebus');

	    //mencetak laporan tidak ditebus
	    Route::get('/lelang/{id}','CetakLaporanController@lelang');
	});
});




// Route::group(['middleware'=>'guest'],function(){
// 	Route::get('/', ['as'=>'dashboard','uses'=>'DashboardController@index']);
// 	Route::get('/elements', ['as'=>'elements','uses'=>'ElementController@index']);
// 	Route::get('/charts', ['as'=>'charts','uses'=>'ChartsController@index']);
// 	Route::get('/panels', ['as'=>'panels','uses'=>'PanelsController@index']);
// 	Route::get('/profile', ['as'=>'profile','uses'=>'ProfileController@index']);
// 	Route::get('/notification', ['as'=>'notification','uses'=>'NotificationController@index']);
// 	Route::get('/tables', ['as'=>'tables','uses'=>'TablesController@index']);
// 	Route::get('/typography', ['as'=>'typography','uses'=>'TypographyController@index']);
// 	Route::get('/icons', ['as'=>'icons','uses'=>'IconsController@index']);
// });


