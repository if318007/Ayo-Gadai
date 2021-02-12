	@extends('layouts/customer/index')

@section('title')
    Dashboard
@endsection


@section('content')
<center>
			<div class="panel-body ml-5" style="width: 70%;">
				<h3 class="mb-3">Detail Barang Gadai Anda</h3>
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
                                <th>Tanggal Gadai</th>
                                <td>:</td>
                                <td>{{date('j F, Y', strtotime($detail_gadai->tanggal_gadai))}}</td>
                            </tr>
                            <tr>
                                <th>Perpanjangan Ke - </th>
                                <td>:</td>
                                <td>{{$detail_gadai->perpanjangan_ke}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Jatuh Tempo</th>
                                <td>:</td>
                                <td>{{date('j F, Y', strtotime($detail_gadai->tanggal_jatuh_tempo))}}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Pinjaman yang diajukan</th>
                                <td>:</td>
                                <td>Rp. {{$penyimpanan->jumlah_pinjaman}}</td>
                            </tr>
                            <tr>
                                <th>Jumlah yang Dapat Dipinjamn</th>
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
                            <tr>
                                <th>Foto Barang</th>
                                <td>:</td>
                                <td><img class="img img-rounded" src="{{ asset('images/'.$penyimpanan->foto_file_barang) }}"/></td>
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
	                    <button class="btn btn-success btn-lg float-left mr-1" id="btn-bunga">Bayar Bunga per Bulan</buttton>
	                    <button type="button" class="btn btn-primary btn-lg float-left" id="btn-lunas">Tebus</button>
                        <button type="button" class="btn btn-warning btn-lg float-right">Kembali</button>
	                </center>
	                </div>
	                </center>



                    <div id="test1">
                        <div class="container" style="width: 67%;">
                            <button class="btn btn-info lnr lnr-chevron-up" id="btn-sembunyikan1">&nbsp;Sembunyikan</button>
                        <div class="contact_message form">
                        <br><h3 style="color:#20C420;">Bayar Bunga Anda</h3>
                        <form action="/pembayaran_bunga/{{$detail_gadai->id}}" method="post" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Metode Pembayaran</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="metode_id">
                                  <option selected="" disabled>-- Pilih Metode Pembayaran --</option>
                                  @foreach($metodePembayaran as $jenis)                                    <option value="{{$jenis->id}}">{{$jenis->nama_pembayaran}}&nbsp;({{$jenis->jenis}})</option>
                                  @endforeach
                                </select>
                              </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah (Bunga perbulan : <b>Rp. {{$penyimpanan->jenis->bunga/100*$penyimpanan->jumlah_pinjaman}}</b> yang wajib dibayar)</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Pembayaran" name="jumlah">
                          </div>
                          <input type="hidden" value="Menunggu" name="status">
                          <input type="hidden" value="{{$detail_gadai->id}}" name="gadai_id">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Unggah foto bukti pembayaran</label>
                            <input type="file" id="foto" name="foto_file_pembayaran">
                          </div>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </form><br>
                        </div>
                    </div>
                    </div>

                    <div id="test2">
                        <div class="container" style="width: 67%;">
                            <button class="btn btn-info lnr lnr-chevron-up" id="btn-sembunyikan2">&nbsp;Sembunyikan</button>
                        <div class="contact_message form">
                        <br><h3 style="color:#20C420;">Bayar Lunas</h3>
                        <form action="/pembayaran_lunas/{{$detail_gadai->id}}" method="post" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Metode Pembayaran</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="metode_id">
                                  <option selected="" disabled>-- Pilih Metode Pembayaran --</option>
                                  @foreach($metodePembayaran as $jenis)                                    <option value="{{$jenis->id}}">{{$jenis->nama_pembayaran}}&nbsp;({{$jenis->jenis}})</option>
                                  @endforeach
                                </select>
                              </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah (Pelunasan : <b>Rp. {{$penyimpanan->jumlah_pinjaman-$penyimpanan->jenis->bunga/100*$penyimpanan->jumlah_pinjaman}}</b> yang wajib dibayar)</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Pembayaran" name="jumlah">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Unggah foto bukti pembayaran</label>
                            <input type="file" id="foto" name="foto_file_pembayaran">
                          </div>
                          <input type="hidden" value="Menunggu" name="status">
                          <input type="hidden" value="{{$detail_gadai->id}}" name="gadai_id">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </form><br>
                        </div>
                    </div>
                    </div>





<script>
$(document).ready(function(){

    $("#test1").hide();
    $("#test2").hide();

    $("#btn-bunga").click(function(){
        $("#test1").show();
        $("#test2").hide();
        });

    $("#btn-lunas").click(function(){
        $("#test2").show();
        $("#test1").hide();
        });

    $("#btn-sembunyikan1").click(function(){
        $("#test1").hide();
        });

    $("#btn-sembunyikan2").click(function(){
        $("#test2").hide();
        });
    });
</script>


@endsection