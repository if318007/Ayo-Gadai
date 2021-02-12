@extends('index')

@section('title')
    Dashboard
@endsection

@section('extra-style')

@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Data Barang Gadai</b></h3>
                    <div class="right">
                        <a href="/data_barang_gadai/addBaru" class="btn btn-info btn-sm">Tambah Gadai</a>
                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>

                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped" id="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Gadai</th>
                                <th>Tanggal J. Tempo</th>
                                <th>Jumlah Pinjaman</th>
                                <!-- <th>Karyawan</th> -->
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gadai as $gd)
                            <tr>
                                <td><a href="#">{{$loop->iteration}}</a></td>
                                <td>{{$gd->penyimpanan->user->name}}</td>
                                <td>{{$gd->penyimpanan->jenis->nama_jenis_kategori_barang}}</td>
                                <td>{{date('j F, Y', strtotime($gd->tanggal_gadai))}}</td>
                                <td>{{date('j F, Y', strtotime($gd->tanggal_jatuh_tempo))}}  </td>
                                <td>Rp. {{$gd->penyimpanan->jumlah_pinjaman}} </td>
                                <!-- <td>Sherlicy </td> -->
                                <td>
                                    @if($gd->status == 'aktif')
                                        <span class="label label-success">AKTIF</span>
                                    @else
                                        <span class="label label-success">TIDAK AKTIF</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">Cetak</a></li>
                                        <li><a href="/tebus-langsung/{{$gd->id}}">Tebus</a></li>
                                        <li><a href="/perpanjangan-langsung/{{$gd->id}}">Perpanjang</a></li>
                                      </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END RECENT PURCHASES -->
        </div>
    </div>
</div>

<!-- Small Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title" id="exampleModalLabel">Tambah Barang Gadaian</h3>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/jenis-kategori/create" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Pilih Kategori Barang</label>
              <select class="form-control" name="kategori_id" id="type">
                <option selected="">-- Pilih Kategori --</option>
                @foreach($kategori as $kategoriss)
                <option value="{{$kategoriss->id}}">{{$kategoriss->nama_kategori_barang}}</option>
                @endforeach
              </select>
            </div>
            <div id="elektronik">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Sub Kategori Barang</label>
                  <select class="form-control" name="kategori_id">
                    @foreach($jenis_elektronik as $jenis1)
                    <option value="{{$jenis1->id}}">{{$jenis1->nama_jenis_kategori_barang}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Merek dan Tipe</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Merek dan Tipe Handphone Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kondisi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Kondisi Handphone Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Pembelian</label>
                    <input type="month" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Tahun Pembelian Handphone Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kondisi</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Harga Jual Handphone Anda Saat Ini">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pinjaman</label>
                    <input type="number" class="form-control" id="test" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Pinjaman Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Unggah Foto/File Barang</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Harga Jual Handphone Anda Saat Ini">
                </div>
            </div>

            <div id="handphone">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Sub Kategori Barang</label>
                  <select class="form-control" name="kategori_id">
                    @foreach($jenis_handphone as $jenis1)
                    <option value="{{$jenis1->id}}">{{$jenis1->nama_jenis_kategori_barang}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Merek dan Tipe</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Merek dan Tipe Handphone Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kondisi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Kondisi Handphone Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Pembelian</label>
                    <input type="month" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Tahun Pembelian Handphone Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kondisi</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Harga Jual Handphone Anda Saat Ini">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pinjaman</label>
                    <input type="number" class="form-control" id="test" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Pinjaman Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Unggah Foto/File Barang</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Harga Jual Handphone Anda Saat Ini">
                </div>
            </div>

             <div id="kendaraan">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Sub Kategori Barang</label>
                  <select class="form-control" name="kategori_id">
                    @foreach($jenis_kendaraan as $jenis1)
                    <option value="{{$jenis1->id}}">{{$jenis1->nama_jenis_kategori_barang}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Merek dan Tipe</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Merek dan Tipe Handphone Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kondisi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Kondisi Handphone Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Pembelian</label>
                    <input type="month" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Tahun Pembelian Handphone Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kondisi</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Harga Jual Handphone Anda Saat Ini">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pinjaman</label>
                    <input type="number" class="form-control" id="test" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Pinjaman Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Unggah Foto/File Barang</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Harga Jual Handphone Anda Saat Ini">
                </div>
            </div>
          
            <div id="logammulia">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Sub Kategori Barang</label>
                  <select class="form-control" name="kategori_id">
                    @foreach($jenis_logam_mulia as $jenis1)
                    <option value="{{$jenis1->id}}">{{$jenis1->nama_jenis_kategori_barang}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Berat</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Berat Saat Ini">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Total</label>
                    <input type="number" class="form-control" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Total Berat">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pinjaman</label>
                    <input type="number" class="form-control" id="test" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Pinjaman Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Unggah Foto/File Barang</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Harga Jual Handphone Anda Saat Ini">
                </div>
            </div>

            <div id="perhiasan">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Sub Kategori Barang</label>
                  <select class="form-control" name="kategori_id">
                    @foreach($jenis_perhiasan as $jenis1)
                    <option value="{{$jenis1->id}}">{{$jenis1->nama_jenis_kategori_barang}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Berat</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Berat Saat Ini">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Total</label>
                    <input type="number" class="form-control" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Total Berat">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pinjaman</label>
                    <input type="number" class="form-control" id="test" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Pinjaman Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Unggah Foto/File Barang</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Harga Jual Handphone Anda Saat Ini">
                </div>
            </div>

            <div id="laptop">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Sub Kategori Barang</label>
                  <select class="form-control" name="kategori_id">
                    @foreach($jenis_laptop as $jenis1)
                    <option value="{{$jenis1->id}}">{{$jenis1->nama_jenis_kategori_barang}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Merek dan Tipe</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Merek dan Tipe Handphone Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kondisi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Kondisi Handphone Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Pembelian</label>
                    <input type="month" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Tahun Pembelian Handphone Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kondisi</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Harga Jual Handphone Anda Saat Ini">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pinjaman</label>
                    <input type="number" class="form-control" id="test" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Pinjaman Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Unggah Foto/File Barang</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Harga Jual Handphone Anda Saat Ini">
                </div>
            </div>

            <div id="perlengkapanrumahtangga">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Sub Kategori Barang</label>
                  <select class="form-control" name="kategori_id">
                    @foreach($jenis_perlengkapan_rumah_tangga as $jenis1)
                    <option value="{{$jenis1->id}}">{{$jenis1->nama_jenis_kategori_barang}}</option>
                    @endforeach
                  </select>
                </div>
            </div>

            <div id="barangbrandedlainnya">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Sub Kategori Barang</label>
                  <select class="form-control" name="kategori_id">
                    @foreach($jenis_barang_branded_lainnya as $jenis1)
                    <option value="{{$jenis1->id}}">{{$jenis1->nama_jenis_kategori_barang}}</option>
                    @endforeach
                  </select>
                </div>
            </div>

            <div id="sertifikat">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Sub Kategori Barang</label>
                  <select class="form-control" name="kategori_id">
                    @foreach($jenis_sertifikat as $jenis1)
                    <option value="{{$jenis1->id}}">{{$jenis1->nama_jenis_kategori_barang}}</option>
                    @endforeach
                  </select>
                </div>
            </div>

            <div id="mesin">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Sub Kategori Barang</label>
                  <select class="form-control" name="kategori_id">
                    @foreach($jenis_mesin as $jenis1)
                    <option value="{{$jenis1->id}}">{{$jenis1->nama_jenis_kategori_barang}}</option>
                    @endforeach
                  </select>
                </div>
            </div>

            <div id="emas">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Sub Kategori Barang</label>
                  <select class="form-control" name="kategori_id">
                    @foreach($jenis_emas as $jenis1)
                    <option value="{{$jenis1->id}}">{{$jenis1->nama_jenis_kategori_barang}}</option>
                    @endforeach
                  </select>
                </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Large Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
@endsection


@section('extra-script')

@endsection

