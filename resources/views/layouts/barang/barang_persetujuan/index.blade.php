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
                    <h3 class="panel-title"><b>Data Persetujuan Gadaian</b></h3>
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
                                <th>Nama</th>
                                <th>Kategori Barang</th>
                                <th>Jenis Barang</th>
                                <th>Tanggal Masuk</th>
                                <th>Jumlah Pinjaman</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penyimpanan as $simpanan)
                            <tr>
                                <td><a href="#">{{$loop->iteration}}</a></td>
                                <td>{{$simpanan->user->name}}</td>
                                <td>{{$simpanan->jenis->kategori->nama_kategori_barang}}</td>
                                <td>{{$simpanan->jenis->nama_jenis_kategori_barang}} </td>
                                <td>{{date('j F, Y', strtotime($simpanan->created_at))}} </td>
                                <td>Rp. {{$simpanan->jumlah_pinjaman}} </td>
                                <td>
                                    @if($simpanan->status == 'Menunggu')
                                        <span class="label label-primary">{{$simpanan->status}}</span>
                                    @elseif($simpanan->status == 'Terima')
                                        <span class="label label-success">{{$simpanan->status}}</span>
                                    @elseif($simpanan->status == 'Pengajuan')
                                        <span class="label label-warning">{{$simpanan->status}} ke Customer</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a href="/data-barang-gadai-detail/{{$simpanan->id}}">Detail</a></li>
                                        <!-- @if($simpanan->status == 'Menunggu')
                                            <li><a href="#">Terima</a></li>
                                            <li><a href="#">Tolak</a></li>
                                        @elseif($simpanan->status == 'Terima') -->

                                        @endif
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

