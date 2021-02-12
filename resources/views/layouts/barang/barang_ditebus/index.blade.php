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
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Data Barang Ditebus</b></h3>
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
                                <th>Nama Barang</th>
                                <th>Tanggal Gadai</th>
                                <th>Tanggal Pelunasan</th>
                                <th>Jumlah Pinjaman</th>
                                <!-- <th>Karyawan</th> -->
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
                                <td>{{date('j F, Y', strtotime($gd->tanggal_pelunasan))}}  </td>
                                <td>Rp. {{$gd->penyimpanan->jumlah_pinjaman}} </td>
                                <!-- <td>Sherlicy </td> -->
                                <td>
                                    @if($gd->status == 'Selesai')
                                        <span class="label label-success">Lunas (Ditebus)</span>
                                    @else
                                        <span class="label label-success">TIDAK AKTIF</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="/cetak/laporan-lunas/{{$gd->id}}" class="btn btn-primary btn-sm"><span class="lnr lnr-printer"></span>&nbsp;Cetak</a>
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


@endsection


@section('extra-script')

@endsection

