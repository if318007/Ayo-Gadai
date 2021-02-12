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
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">Dashboard</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-download"></i></span>
                        <p>
                            <span class="number">{{$nasabah->count()}}</span>
                            <span class="title">Nasabah</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                        <p>
                            <span class="number">{{$gadaiAktif->count()}}</span>
                            <span class="title">Barang Gadai</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-eye"></i></span>
                        <p>
                            <span class="number">{{$gadaiJatuhTempo->count()}}</span>
                            <span class="title">Jatuh Tempo</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                        <p>
                            <span class="number">{{$gadaiTebus->count()}}</span>
                            <span class="title">Barang Tebus</span>
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
                    <h3 class="panel-title">Gadai Hari Ini</h3>
                    <div class="right">
                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped" id="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nasabah</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Masuk</th>
                                <th>Jatuh Tempo</th>
                                <th>Jumlah Pinjaman</th>
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
                                <td>{{date('j F, Y', strtotime($gd->tanggal_jatuh_tempo))}}</td>
                                <td>Rp. {{$gd->penyimpanan->jumlah_pinjaman}}</td>
                                <td>
                                    @if($gd->status == 'aktif')
                                        <span class="label label-primary">{{$gd->status}}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">Cetak</a></li>
                                        <li><a href="#">Tebus</a></li>
                                        <li><a href="#">Perpanjang</a></li>
                                      </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
            <!-- END RECENT PURCHASES -->
        </div>
    </div>
</div>
@endsection


@section('extra-script')

@endsection