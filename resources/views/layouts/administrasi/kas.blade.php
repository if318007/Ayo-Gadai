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
                    <h3 class="panel-title"><b>Data Kas</b></h3>
                    <div class="right">
                        <button type="button" data-toggle="modal" data-target="#exampleModal">
                          Tambah Kas
                        </button>
                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>

                    </div>
                </div>
                <div class="panel-body no-padding">
                    <table class="table table-striped" id="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kas</th>
                                <th>Bank</th>
                                <th>No. Rekening</th>
                                <th>Nama Pemilik</th>
                                <th>Saldo</th>
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
                                <td>Rp. {{$kass->saldo}} </td>
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">Cetak</a></li>
                                        <li><a href="#">Tebus</a></li>
                                        <li><a href="#">Cicil</a></li>
                                        <li><a href="#">Perpanjang</a></li>
                                      </ul>
                                    </div>
                                    <!-- <a href="#" class="btn btn-primary btn-sm"><span class="lnr lnr-printer"></span>&nbsp;Cetak</a> -->
                                </td>
                            </tr>
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection


@section('extra-script')

@endsection

