@extends('index')

@section('title')
    Dashboard
@endsection

@section('extra-style')

@endsection

@section('content')
<div class="container-fluid">
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">Detail Keuangan</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-money"></i></span>
                        <p>
                            <span >Rp. {{$kas->saldo_awal}}</span><br>
                            <span class="title">Saldo Awal</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-plus"></i></span>
                        <p>
                            <span >Rp. {{$dana_masuk}}</span><br>
                            <span class="title">Dana Masuk</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-minus"></i></span>
                        <p>
                            <span >Rp. {{$dana_keluar-$dana_lunas}}</span><br>
                            <span class="title">Dana Keluar</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                        <p>
                            <span >Rp. {{$kas->saldo_akhir}}</span><br>
                            <span class="title">Saldo Akhir</span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- END OVERVIEW -->
    <div class="row">
        <div class="col-md-12">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Data Aliran Dana</b></h3>
                    <div class="right">
                        <button type="button" data-toggle="modal" data-target="#exampleModal">
                          <spam class="fa fa-plus btn-primary btn-sm"></span>&nbsp;Debit
                        </button>
                        <button type="button" data-toggle="modal" data-target="#exampleModal1">
                          <spam class="fa fa-minus btn-primary btn-sm"></span>&nbsp;Kredit
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
                                <th>Tanggal</th>
                                <th>Kas</th>
                                <th>Jumlah</th>
                                <th>Jenis Dana</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dana as $d)
                            <tr>
                                <td><a href="#">{{$loop->iteration}}</a></td>
                                <td>{{date('j F, Y', strtotime($d->tanggal))}}</td>
                                <td>{{$d->kas->nama_kas}}</td>
                                <td>{{$d->jumlah}}  </td>
                                <td>
                                    @if($d->jenis_dana == 'Masuk')
                                        <span class="label label-success">Masuk </span> 
                                    @elseif($d->jenis_dana == 'Keluar')
                                        <span class="label label-danger">Keluar </span>
                                    @elseif($d->jenis_dana == 'Lunas')
                                        <span class="label label-warning">Lunas </span>
                                    @endif
                                </td>
                                <td>{{$d->keterangan}} </td>
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
        <h3 class="modal-title" id="exampleModalLabel">Tambah saldo kas</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/kas/tambah-dana" method="post">
            {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Nama kas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ayo Gadai" value="Ayo Gadai" disabled="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jumlah</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jumlah Dana" name="jumlah">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Keterangan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Keterangan Dana" name="keterangan">
          </div>
          <button type="submit" class="btn btn-primary center-block">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Tarik saldo kas</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/kas/kurang-dana" method="post">
            {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Nama kas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ayo Gadai" value="Ayo Gadai" disabled="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jumlah</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jumlah Dana" name="jumlah">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Keterangan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Keterangan Dana" name="keterangan">
          </div>
          <button type="submit" class="btn btn-primary center-block">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection


@section('extra-script')

@endsection

