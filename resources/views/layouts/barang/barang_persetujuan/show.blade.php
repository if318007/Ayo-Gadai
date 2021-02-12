@extends('index')

@section('title')
    Dashboard
@endsection

@section('extra-style')

@endsection

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Detail Persetujuan Gadaian {{$penyimpanan->user->name}}</b></h3>
                    <div class="right">
                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>

                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                            <tr>
                                <th>Nama Pengaju</th>
                                <td>:</td>
                                <td>{{$penyimpanan->user->name}}</td>
                            </tr>
                            <tr>
                                <th>Kategori Barang</th>
                                <td>:</td>
                                <td>{{$penyimpanan->jenis->kategori->nama_kategori_barang}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <td>:</td>
                                <td>{{date('j F, Y', strtotime($penyimpanan->created_at))}}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Pinjaman</th>
                                <td>:</td>
                                <td>Rp. <a href="#" class="jumlah_pinjaman" data-type="text" data-pk="{{$penyimpanan->id}}" data-url="/api/post-penyimpanan/{{$penyimpanan->id}}" data-title="Masukkan Nilai Ajuan Pinjaman">{{$penyimpanan->jumlah_pinjaman}} </a> <small>(Klik Jumlah Pinjaman Untuk Mengganti)</small></td>
                            </tr>
                            <tr>
                                <th>Harga Saat Ini</th>
                                <td>:</td>
                                <td>Rp. {{$penyimpanan->harga_jual_saat_ini}}</td>
                            </tr>
                            <tr>
                                <th>Biaya Administrasi</th>
                                <td>:</td>
                                <td>Rp. {{$biaya_administrasi->biaya_admin}}</td>
                            </tr>
                            <tr>
                                <th>Bunga</th>
                                <td>:</td>
                                <td>{{$penyimpanan->jenis->bunga}}%</td>
                            </tr>
                            <tr>
                                <th>Waktu Tenggang</th>
                                <td>:</td>
                                <td>{{$penyimpanan->jenis->waktu_tenggang}} Hari</td>
                            </tr>
                              <!--   <th>Nama</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Masuk</th>
                                <th>Tanggal J. Tempo</th>
                                <th>Jumlah Pinjaman</th>
                                <th>Karyawan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr> -->
                    </table>
                    @if($penyimpanan->status == 'Menunggu')
                    <a href="/detail-gadai-barang/terima/langsung/{{$penyimpanan->id}}" class="btn btn-success">Terima</a>
                    <a href="/detail-gadai-barang/ajukanKeCustomer/{{$penyimpanan->id}}" class="btn btn-primary">Ajukan</a>
                    <a href="/detail-gadai-barang/tolak/{{$penyimpanan->id}}" class="btn btn-danger">Tolak</a>
                    @elseif($penyimpanan->status == 'Terima')

                    @endif
                    <a href="/data_barang_persetujuan" class="btn btn-warning pull-right">Kembali</a>
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

@section('footer')
<script type="text/javascript">
    $(document).ready(function() {
        $('.jumlah_pinjaman').editable();
        // var bunga = document.getElementById("bunga").value;
        // var pinjaman = document.getElementByClassName("jumlah_pinjaman");
        // var hasil = bunga/100 * pinjaman;
        // document.getElementById("result").innerHTML = hasil;
        // var selectedValue = $(this).val();
        // $('#result').html(selectedValue);
    });
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
@stop