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

    <div class="row">
        <div class="col-md-12">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Data Pembayaran Bunga</b></h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped" id="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
                                <th>Kategori</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bunga as $bungaa)
                            <tr>
                                <td><a href="#">{{$loop->iteration}}</a></td>
                                <td>{{$bungaa->gadai->penyimpanan->user->name}}</td>
                                <td>Rp. {{$bungaa->jumlah}}</td>
                                <td>{{$bungaa->gadai->penyimpanan->jenis->kategori->nama_kategori_barang}}</td>
                                <td>{{date('j F, Y', strtotime($bungaa->tanggal_pembayaran_bunga))}}</td>
                                <td>
                                  @if($bungaa->status == 'Menunggu')
                                    <label class="label label-primary">{{$bungaa->status}}</label>
                                  @elseif($bungaa->status == 'Terima')
                                    <label class="label label-success">{{$bungaa->status}}</label>
                                    @elseif($bungaa->status == 'Lunas')
                                    <label class="label label-warning">{{$bungaa->status}}</label>
                                  @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a href="/pembayaran_bunga/detail/{{$bungaa->id}}">Detail</a></li>
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
          <h3 class="modal-title" id="exampleModalLabel">Tambah Kurir</h3>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/kurir/create" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Nama Kurir</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Masukkan Nama Kurir">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email Kurir">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Masukkan Password">
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

