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
            <h3>Tambah Barang Gadai {{$kategori}}</h3>
            <form action="/data_barang_gadai/store/{{$kategori}}  " method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group {{$errors->has('jenis_kategori_id') ? 'has-error' : ''}}">
                    <label for="exampleFormControlSelect1">Pilih Jenis {{$kategori}}</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_kategori_id">
                        @foreach($elektronik as $j)  
                            @if (old('jenis_kategori_id') == $j->id)
                                <option value="{{ $j->id }}" selected>{{ $j->nama_jenis_kategori_barang }}</option>
                            @else
                                 <option selected="" disabled>-- Pilih Jenis Kategori Barang --</option>
                                <option value="{{$j->id}}">{{$j->nama_jenis_kategori_barang}}</option>
                            @endif
                        @endforeach
                    </select>
                    @if($errors->has('jenis_kategori_id'))
                        <span class="help-block">Jenis Kategori Barang tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('user_id') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Nasabah</label>
                            <div class="input-group">
                                <input id="anggota_nama" type="text" class="form-control" readonly="" >
                                <input id="anggota_id" type="hidden" name="user_id" value="{{ old('user_id') }}" readonly="" required>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-warning btn-secondary" data-toggle="modal" data-target="#myModal2"><b>Cari Nasabah</b> <span class="fa fa-search"></span></button>
                                </span>
                    </div>
                    @if($errors->has('user_id'))
                        <span class="help-block">Nama nasabah tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('merk_tipe') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Merk dan Tipe</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Merk dan Tipe" name="merk_tipe" value="{{old('merk_tipe')}}">
                    @if($errors->has('merk_tipe'))
                        <span class="help-block">Merk dan tipe tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('kondisi') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Kondisi</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Kondisi Barang" name="kondisi" value="{{old('kondisi')}}">
                    @if($errors->has('kondisi'))
                        <span class="help-block">Kondisi tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('tahun_pembelian') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Tahun Pembelian</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Tahun Pembelian" name="tahun_pembelian" value="{{old('tahun_pembelian')}}">
                    @if($errors->has('tahun_pembelian'))
                        <span class="help-block">Tahun pembelian tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('harga_jual_saat_ini') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Harga Jual Saat Ini</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Harga Jual Saat Ini" name="harga_jual_saat_ini" value="{{old('harga_jual_saat_ini')}}">
                    @if($errors->has('harga_jual_saat_ini'))
                        <span class="help-block">Harga jual saat ini tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('jumlah_pinjaman') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Jumlah Pinjaman</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Jumlah Pinjaman" name="jumlah_pinjaman" value="{{old('jumlah_pinjaman')}}">
                    @if($errors->has('jumlah_pinjaman'))
                        <span class="help-block">Jumlah Pinjaman tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('foto_file_barang') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Unggah Foto Barang</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Unggah Foto Barang" name="foto_file_barang" value="{{old('foto_file_barang')}}">
                    @if($errors->has('foto_file_barang'))
                        <span class="help-block">Foto/ file barang tidak boleh kosong!</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/data_barang_gadai" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </div>
</div>

  <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg modal-header" role="document" >
    <div class="modal-content" style="background: #fff;">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Cari Nasabah</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                        <table id="data-table" class="table table-bordered table-hover table-striped">
                            <thead>
                        <tr>
                          <th>
                            Nama
                          </th>
                          <th>
                            Email
                          </th>
                        </tr>
                      </thead>
                            <tbody>
                              @foreach($anggota as $data)
                                <tr class="pilih_anggota" data-anggota_id="<?php echo $data->id; ?>" data-anggota_nama="<?php echo $data->name; ?>" >
                                    <td class="py-1">
                            <img src="{{ asset('images/'.$data->avatar) }}" alt="image" style="margin-right: 10px;" />
                            {{$data->name}}
                          </td>
                          <td>
                            {{$data->email}}
                          </td>
                        </tr>
                        @endforeach
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
@endsection


@section('extra-script')

@endsection

