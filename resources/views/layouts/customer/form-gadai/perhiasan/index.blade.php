@extends('layouts/customer/index')

@section('title')
    Dashboard
@endsection


@section('content')
    <div class="container">
            <div class="contact_message form">
                        <br><h3 style="color:#20C420;">Gadai Perhiasan</h3>
                        <form action="/data-barang_gadai/add/{{$kategoriBarang}}" method="post" enctype="multipart/form-data">
                          {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Perhiasan</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="jenis_kategori_id">
                                  <option selected="" disabled>-- Pilih Jenis Kategori Perhiasan --</option>
                                  @foreach($perhiasan as $jenis)                                    
                                  <option value="{{$jenis->id}}">{{$jenis->nama_jenis_kategori_barang}}</option>
                                  @endforeach
                                </select>
                              </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Berat</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Berat Barang" name="berat">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Total</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Total Barang" name="total">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tahun Pembelian</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Total Barang" name="tahun_pembelian">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kondisi</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kondisi Barang Saat Ini" name="kondisi">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kelengkapan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kelengkapan Barang saat ini" name="kelengkapan">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Keterangan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Keterangan Tambahan Barang (Optional)" name="keterangan"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Pinjaman</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Pinjaman" name="jumlah_pinjaman">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Unggah foto barang /kelengkapan perhiasan (Lengkap)</label>
                            <input type="file" id="foto" name="foto_file_barang">
                          </div>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
            <!-- <form id="contact-form" method="POST" action="https://demo.hasthemes.com/autima-preview/autima/assets/mail.php">
                            <p>
                                <label>Jenis Elektronik</label>
                                <input list="elektroniks" name="elektronik" placeholder="Pilih Jenis Elektronik">
                                <datalist id="elektroniks">
                                    <option value="Kulkas">
                                    <option value="TV">
                                    <option value="Setrika">
                                    <option value="Mesin Cuci">
                                    <option value="Kipas">
                                  </datalist>
                            </p>
                            <p>
                                <label>Merk dan Tipe</label>
                                <input name="email" placeholder="Merk dan Tipe" type="email">
                            </p>
                            <p>
                                <label>Kondisi</label>
                                <input name="subject" placeholder="Kondisi" type="text">
                            </p>
                            <p>
                                <label>Tahun Pembelian</label>
                                <input name="email" placeholder="Tipe" type="email">
                            </p>
                            <p>
                                <label>Harga jual saat ini</label>
                                <input name="subject" placeholder="Kondisi" type="text">
                            </p>
                            <div>
                                <label>Unggah foto barang</label>
                                <input type="file" id="foto" name="foto"><br><br>
                            </div>
                            <button type="submit">Simpan</button>
                            <p class="form-messege"></p>
                        </form> --><br>
        </div>
    </div>
@endsection