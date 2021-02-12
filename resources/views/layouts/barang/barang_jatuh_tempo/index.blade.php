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
                    <h3 class="panel-title"><b>Data Barang Jatuh Tempo</b></h3>
                    <div class="right">
                        <button type="button" data-toggle="modal" data-target="#exampleModal">Cek Konfirmasi Gadai Jatuh Tempo <span class="label label-warning">{{$gadai->count()}}</span></button>
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
                                <th>Tanggal Masuk</th>
                                <th>Tanggal J. Tempo</th>
                                <th>Jumlah Pinjaman</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gadaiJatuhTempo as $gd)
                            <tr>
                                <td><a href="#">{{$loop->iteration}}</a></td>
                                <td>{{$gd->penyimpanan->user->name}}</td>
                                <td>{{$gd->penyimpanan->merk_tipe}}</td>
                                <td>{{date('j F, Y', strtotime($gd->tanggal_gadai))}}</td>
                                <td>{{date('j F, Y', strtotime($gd->tanggal_jatuh_tempo))}} </td>
                                <td>Rp. {{$gd->penyimpanan->jumlah_pinjaman}}</td>
                                <td><span class="label label-warning">JATUH TEMPO</span></td>
                                <td>
                                    <a href="/cetak/jatuh-tempo/{{$gd->id}}" class="btn btn-primary btn-sm"><span class="lnr lnr-printer"></span>&nbsp;Cetak</a>
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
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Konfirmasi Jatuh Tempo </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-hover table-striped" id="data-table2">
                            <thead>
                        <tr>
                            <th>
                                No
                            </th>
                          <th>
                            Nama Nasabah
                          </th>
                          <th>
                            Kategori Barang
                          </th>
                          <th>
                            Jenis Barang
                          </th>
                          <th>
                            Tanggal Jatuh Tempo
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <!-- <a href="" class="btn btn-success float-right">Confirm All</a>
                      <a href="" class="btn btn-danger float-right">Reject All</a> -->
                      @if($gadai->count() > 0)
                            <a class="btn btn-success btn-sm" style="margin-bottom: 10px;" href="/konfirmasi-semua"> Konfirmasi Semua </a>
                            <tbody center>
                        @endif
                              @foreach($gadai as $data)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    <td>
                                    {{$data->penyimpanan->user->name}}
                                  </td>
                                  <td>
                                    {{$data->penyimpanan->jenis->kategori->nama_kategori_barang}}
                                  </td>
                                  <td>
                                    {{$data->penyimpanan->jenis->nama_jenis_kategori_barang}}
                                  </td>
                                  <td>
                                    {{$data->tanggal_jatuh_tempo}}
                                  </td>
                                  <td>
                                    <a class="btn btn-primary btn-sm" href="/konfirmasi/{{$data->id}}"> Konfirmasi </a>
                                  </td>
                                </tr>
                        @endforeach
                            </tbody>
                        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

@endsection


@section('extra-script')

@endsection

