@extends('layouts/customer/index')

@section('title')
    Dashboard
@endsection


@section('content')
<center>
			<div class="panel-body ml-5" style="width: 70%;">
				<h3 class="mb-3">Persetujuan Barang Untuk Digadaikan</h3>
                    <table class="table table-striped">
                            <tr>
                                <th>Nama Anda</th>
                                <td>:</td>
                                <td>{{$penyimpanan->user->name}}</td>
                            </tr>
                            <tr>
                                <th>Kategori Barang</th>
                                <td>:</td>
                                <td>{{$penyimpanan->jenis->kategori->nama_kategori_barang}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <td>:</td>
                                <td>{{date('j F, Y', strtotime($penyimpanan->created_at))}}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Pinjaman yang diajukan</th>
                                <td>:</td>
                                <td>Rp. {{$penyimpanan->jumlah_pinjaman}}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Pinjaman yang dapat digunakan</th>
                                <td>:</td>
                                <td>Rp. {{$jumlah_yang_bisa_dipinjam}}</td>
                            </tr>
                            <tr>
                                <th>Harga Saat Ini</th>
                                <td>:</td>
                                <td>Rp. {{$penyimpanan->harga_jual_saat_ini}}</td>
                            </tr>
                            <tr>
                                <th>Biaya Administrasi</th>
                                <td>:</td>
                                <td>Rp. {{$biaya_administrasi->biaya_admin}}</td>
                            </tr>
                            <tr>
                                <th>Bunga</th>
                                <td>:</td>
                                <td>{{$penyimpanan->jenis->bunga}}%</td>
                            </tr>
                            <tr>
                                <th>Waktu Tenggang</th>
                                <td>:</td>
                                <td>{{$penyimpanan->jenis->waktu_tenggang}} Hari</td>
                            </tr>
                            
                              <!--   <th>Nama</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Masuk</th>
                                <th>Tanggal J. Tempo</th>
                                <th>Jumlah Pinjaman</th>
                                <th>Karyawan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr> -->
                    </table>
                    <center>
	                    <a href="/setujui-persetujuan/{{$penyimpanan->id}}" class="btn btn-success btn-lg">Setujui</a>
	                    <a href="#" class="btn btn-danger btn-lg">Batalkan</a>
	                </center>
	                </div>
	                </center>
@endsection