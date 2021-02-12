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
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-money"></i></span>
                        <p>
                            <span >Rp. 1,252.232.424</span><br>
                            <span class="title">Saldo Awal</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-plus"></i></span>
                        <p>
                            <span >Rp. 1,252.232.424</span><br>
                            <span class="title">Dana Masuk</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-minus"></i></span>
                        <p>
                            <span >Rp. 1,252.232.424</span><br>
                            <span class="title">Dana Keluar</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                        <p>
                            <span >Rp. 1,252.232.424</span><br>
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
                        <button type="button" data-toggle="modal" data-target="#exampleModal">
                          <spam class="fa fa-minus btn-primary btn-sm"></span>&nbsp;Kredit
                        </button>
                        <button type="button" data-toggle="modal" data-target="#exampleModal">
                          <spam class="fa fa-send btn-primary btn-sm"></span>&nbsp;Transfer
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
                                <th>Tanggal</th>
                                <th>Kas</th>
                                <th>Jumlah</th>
                                <th>Jenis Dana</th>
                                <th>Keterangan</th>
                                <th>Karyawan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">1</a></td>
                                <td>25-08-2020</td>
                                <td>Rp. 10.000</td>
                                <td>BNI  </td>
                                <td><span class="label label-success">Masuk </span> </td>
                                <td>Biaya Admin </td>
                                <td>Yose Fernando Simamora</td>
                            </tr>
                            <tr>
                                <td><a href="#">2</a></td>
                                <td>25-08-2020</td>
                                <td>Rp. 10.000</td>
                                <td>BNI  </td>
                                <td><span class="label label-danger">Keluar </span> </td>
                                <td>Bunga </td>
                                <td>Yose Fernando Simamora</td>
                            </tr>
                            <tr>
                                <td><a href="#">3</a></td>
                                <td>25-08-2020</td>
                                <td>Rp. 10.000</td>
                                <td>BNI  </td>
                                <td><span class="label label-danger">Keluar</span> </td>
                                <td>Bunga </td>
                                <td>Yose Fernando Simamora</td>
                            </tr>
                            <tr>
                                <td><a href="#">4</a></td>
                                <td>25-08-2020</td>
                                <td>Rp. 10.000</td>
                                <td>BNI  </td>
                                <td><span class="label label-danger">Keluar</span> </td>
                                <td>Bunga </td>
                                <td>Yose Fernando Simamora</td>
                            </tr>
                            <tr>
                                <td><a href="#">5</a></td>
                                <td>25-08-2020</td>
                                <td>Rp. 10.000</td>
                                <td>BNI  </td>
                                <td><span class="label label-danger">Keluar</span> </td>
                                <td>Bunga </td>
                                <td>Yose Fernando Simamora</td>
                            </tr><tr>
                                <td><a href="#">6</a></td>
                                <td>25-08-2020</td>
                                <td>Rp. 10.000</td>
                                <td>BNI  </td>
                                <td><span class="label label-danger">Keluar</span> </td>
                                <td>Bunga </td>
                                <td>Yose Fernando Simamora</td>
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

