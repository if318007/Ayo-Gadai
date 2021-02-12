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

    @if(session('update'))
      <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <i class="fa fa-info-circle"></i> {{session('update')}}
      </div>
    @endif

    @if(session('hapus'))
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <i class="fa fa-info-circle"></i> {{session('hapus')}}
      </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Data Metode Pembayaran</b></h3>
                     <div class="right">
                        <button type="button" data-toggle="modal" data-target="#exampleModal">Tambah Metode Pembayaran</button>
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
                                <th>Jenis Pembayaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($metode as $lunass)
                            <tr>
                                <td><a href="#">{{$loop->iteration}}</a></td>
                                <td>{{$lunass->nama_pembayaran}}</td>
                                <td>{{$lunass->jenis}}</td>
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a href="/metode_pembayaran/edit/{{$lunass->id}}">Detail</a></li>
                                        <li><a href="/metode_pembayaran/hapus/{{$lunass->id}}">Hapus</a></li>
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
          <h3 class="modal-title" id="exampleModalLabel">Tambah Metode Pembayaran</h3>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/metode_pembayaran/create" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Nama Pembayaran</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pembayaran" aria-describedby="emailHelp" placeholder="Masukkan Nama Pembayaran">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jenis</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="jenis" aria-describedby="emailHelp" placeholder="Masukkan Jenis Pembayaran">
          </div>
          <div class="form-group">
            <label for="email" class="control-label">Cover</label>
              <div>
                <img width="200" height="200" />
                  <input type="file" class="uploads form-control {{$errors->has('gambar') ? 'is-invalid' : ''}}" style="margin-top: 20px;" name="foto_file_pembayaran" placeholder="Image" value="old('gambar')">
                </div>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>

@endsection


@section('extra-script')

@endsection

