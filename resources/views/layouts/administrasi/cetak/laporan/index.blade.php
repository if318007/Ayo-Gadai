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
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Laporan Ayo Gadai</b></h3>
                    <div class="right">
                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>

                    </div>
                </div>
                <div class="panel-body">
                        
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" href="#gadai" role="tab" data-toggle="tab">Gadai</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Aliran Dana</a>
                          </li>
                        </ul>

                        <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane fade in active" id="gadai">
                        
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-print">&nbsp;</span>Cetak <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="/cetak/semua-laporan-gadai">Semua</a></li>
                                <li><a href="/cetak/laporan-gadai-bulanan">Bulan Ini</a></li>
                            </ul>
                        </div>
                        <br><br>
                        <table class="table table-striped text-center" id="data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>T. Gadai</th>
                                    <th>T. Jatuh Tempo</th>
                                    <th>Perpanjangan Ke-(N)</th>
                                    <th>Status</th>
                                    <th>Kategori</th>
                                    <th>Waktu Tenggang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($laporan as $l)
                                    <tr>
                                        <td><a href="#">{{$loop->iteration}}</a></td>
                                        <td>{{$l->penyimpanan->user->name}}</td>
                                        <td>{{date('j F, Y', strtotime($l->tanggal_gadai))}}</td>
                                        <td>{{date('j F, Y', strtotime($l->tanggal_jatuh_tempo))}}  </td>
                                        <td>{{$l->perpanjangan_ke}} </td>
                                        <td>{{$l->status}} </td>
                                        <td>{{$l->penyimpanan->jenis->kategori->nama_kategori_barang}} </td>
                                        <td>{{$l->penyimpanan->jenis->waktu_tenggang}} Hari</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="buzz">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-print">&nbsp;</span>Cetak <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="/cetak/semua-aliran-dana">Semua</a></li>
                                <li><a href="/cetak/laporan-aliran-dana-bulanan">Bulan Ini</a></li>
                            </ul>
                        </div>
                        <br><br>
                          <table class="table table-striped text-center" id="data-table2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>T. Pembayaran</th>
                                    <th>Jumlah</th>
                                    <th>Jenis Dana</th>
                                    <th>Keterangan</th>
                                    <th>Kategori</th>
                                    <th>Waktu Tenggang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($aliranDana as $l)
                                    <tr>
                                        <td><a href="#">{{$loop->iteration}}</a></td>
                                        <td>{{$l->penyimpanan->user->name}}</td>
                                        <td>{{date('j F, Y', strtotime($l->tanggal))}}</td>
                                        <td>Rp. {{$l->jumlah}} </td>
                                        <td>{{$l->jenis_dana}} </td>
                                        <td>{{$l->keterangan}} </td>
                                        <td>{{$l->penyimpanan->jenis->kategori->nama_kategori_barang}} </td>
                                        <td>{{$l->penyimpanan->jenis->waktu_tenggang}} Hari</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                      </div>
                    </div>



                    <br>
                        
                </div>
            </div>
            <!-- END RECENT PURCHASES -->
        </div>
    </div>
</div>
@endsection


@section('extra-script')

@endsection

