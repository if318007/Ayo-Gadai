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
    
    <div class="row">
        <div class="col-md-12">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Data Kas</b></h3>
                    <div class="right">
                        <button type="button" data-toggle="modal" data-target="#exampleModal">
                          Tambah Kas
                        </button>
                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>

                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped" id="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kas</th>
                                <th>Bank</th>
                                <th>No. Rekening</th>
                                <th>Nama Pemilik</th>
                                <th>Saldo Awal</th>
                                <th>Saldo Akhir</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kas as $kass)
                            <tr>
                                <td><a href="#">{{$loop->iteration}}</a></td>
                                <td>{{$kass->nama_kas}}</td>
                                <td>{{$kass->bank}}</td>
                                <td>{{$kass->no_rekening}}  </td>
                                <td>{{$kass->nama_pemilik}}  </td>
                                <td>Rp. {{$kass->saldo_awal}} </td>
                                <td>Rp. {{$kass->saldo_akhir}} </td>
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a href="/kas/edit/{{$kass->id}}">Edit</a></li>
                                      </ul>
                                    </div>
                                    <!-- <a href="#" class="btn btn-primary btn-sm"><span class="lnr lnr-printer"></span>&nbsp;Cetak</a> -->
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


<!-- Modal Create-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <b><h3 class="modal-title" id="exampleModalLabel">Tambah Kas</h3></b>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/kas/create" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Nama Kas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama Kas">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Bank</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="bank" aria-describedby="emailHelp" placeholder="Masukkan Bank">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No. Rekening</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="rekening" aria-describedby="emailHelp" placeholder="Masukkan Nomor Rekening">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Pemilik</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="pemilik" aria-describedby="emailHelp" placeholder="Masukkan Nama Pemilik">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Saldo</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="saldo" aria-describedby="emailHelp" placeholder="Masukkan Saldo Kas">
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

