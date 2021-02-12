@extends('index')

@section('title')
    Dashboard
@endsection

@section('extra-style')

@endsection

@section('content')

<div class="container-fluid">

    @if(session('sukses'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <i class="fa fa-info-circle"></i> {{session('sukses')}}
      </div>
    @endif

    @if(session('hapus'))
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <i class="fa fa-info-circle"></i> {{session('hapus')}}
      </div>
    @endif

    @if(session('update'))
      <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <i class="fa fa-info-circle"></i> {{session('update')}}
      </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Data Jenis Kategori</b></h3>
                    <div class="right">
                        <button type="button" data-toggle="modal" data-target="#exampleModal">
                          Tambah Jenis Kategori
                        </button>
                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>

                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-hover table-center" id="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kategori</th>
                                <th>Bunga (%)</th>
                                <th>Waktu Tenggang (Hari)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($jenis as $jeniss)
                            <tr>
                                <td><a href="#">{{$loop->iteration}}</a></td>
                                <td>{{$jeniss->nama_jenis_kategori_barang}}</td>
                                <td>{{$jeniss->kategori->nama_kategori_barang}}</td>
                                <td>{{$jeniss->bunga}} %</td>
                                <td>{{$jeniss->waktu_tenggang}} Hari</td>
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a href="/jenis-kategori/{{$jeniss->id}}/edit">Edit</a></li>
                                        <li><a href="/jenis-kategori/{{$jeniss->id}}/hapus">Hapus</a></li>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h3 class="modal-title" id="exampleModalLabel">Tambah Jenis Kategori Barang</h3>
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
              <select class="form-control" name="kategori_id">
                @foreach($kategori as $kategoriss)
                <option value="{{$kategoriss->id}}">{{$kategoriss->nama_kategori_barang}}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Nama Barang</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" aria-describedby="emailHelp" placeholder="Masukkan Jenis Kategori">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Bunga</label>
              <input type="number" class="form-control" id="exampleInputEmail1" name="bunga" aria-describedby="emailHelp" placeholder="Masukkan Bunga (%)">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Waktu Tenggang</label>
              <input type="number" class="form-control" id="exampleInputEmail1" name="waktu_tenggang" aria-describedby="emailHelp" placeholder="Masukkan Waktu Tenggang (Hari)">
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

@endsection


@section('extra-script')

@endsection

