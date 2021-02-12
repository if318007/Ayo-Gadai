<?php
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun
 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  } 
}

  #footer{
      height:50px;
      line-height:50px;
      color:black;
      bottom:0;
  }
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">
    <img src="{{ url('/Klorofil/img/logo_gadai.png') }}" alt="Klorofil Logo" class="img img-rounded" style="width:100px;height: 50px;">
  </a>
  <div class="header-right">
     <h4>Ayo Gadai</h4>
            <p>Ayo gadai merupakan platform yang membantu masyarakat dalam memperoleh dana lebih cepat dan menguntungkan.</p>
  </div>
</div>
<hr>
<div style="padding-left:20px;">
  <center>
    <h1>Data Laporan Barang Jatuh Tempo</h1>
  </center>
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- RECENT PURCHASES -->
            <div class="panel">
              <center>
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Laporan</b></h3>
                </div>
              </center>
                <div class="panel-body">
                    <table class="table table-striped text-center">
                            <tr>
                                <br>
                                <th><b>Nama</b> </th>
                                <td>:</td>
                                <td>{{$laporan->penyimpanan->user->name}}</td>
                            </tr>
                            <tr>
                                <th><b>Kategori Barang</b></th>
                                <td>:</td>
                                <td>{{$laporan->penyimpanan->jenis->kategori->nama_kategori_barang}}</td>
                            </tr>
                            <tr>
                                <th><b>Jenis Barang</b></th>
                                <td>:</td>
                                <td>{{$laporan->penyimpanan->jenis->nama_jenis_kategori_barang}}</td>
                            </tr>
                            <tr>
                                <th><b>Tanggal Gadai</b></th>
                                <td>:</td>
                                <td>{{date('j F, Y', strtotime($laporan->tanggal_gadai))}}</td>
                            </tr>
                            <tr>
                                <th><b>Tanggal Jatuh Tempo</b></th>
                                <td>:</td>
                                <td>{{date('j F, Y', strtotime($laporan->tanggal_jatuh_tempo))}}</td>
                            </tr>
                            <tr>
                                <th><b>Perpanjangan ke-n</b></th>
                                <td>:</td>
                                <td>{{$laporan->perpanjangan_ke}}</td>
                            </tr>
                            <tr>
                                <th><b>Jumlah Pinjaman</b></th>
                                <td>:</td>
                                <td>Rp. {{$laporan->penyimpanan->jumlah_pinjaman}}</td>
                            </tr>
                            <tr>
                                <th><b>Bunga</b></th>
                                <td>:</td>
                                <td>{{$laporan->penyimpanan->jenis->bunga}} %</td>
                            </tr>
                            <tr>
                                <th><b>Waktu Tenggang</b></th>
                                <td>:</td>
                                <td>{{$laporan->penyimpanan->jenis->waktu_tenggang}} Hari</td>
                            </tr>
                        </table>
                </div>
            </div>
            <p>Menyatakan bahwa :</p>
              <ol>
                <li>Bertanggung jawab atas kebenaran isi Laporan Keuangan PT Pegadaian Ayo Gadai (Persero)</li>
                <li>Barang yang sudah melewati waktu tenggang akan segera diletakkan kedalam barang tidak ditebus dan akan dilelang</li>
              </ol> 
            <!-- END RECENT PURCHASES -->
            <br>
            <center>
              <p>Medan, <?php echo tgl_indo(date('Y-m-d')); ?></p>
              <p style="margin-top: -20px;">Atas pemilik PT Ayo Gadai</p>
              <img src="{{ url('/Klorofil/img/materai.jpg') }}" width="100" height="100" />
              <p>&emsp;&emsp;David Muliadi Butarbutar</p>
            </center>
            <b>
            <div id="footer">
                <div style="float:left;">
                  <p>PT Pegadaian Ayo Gadai (Persero)</p>
                  <p style="margin-top: -47px;">Jl. Persamaan No. 18</p>
                  <p style="margin-top: -47px;">Telp. 0612342</p>
                </div>
                <div style="float:right;">
                  <p>www.ayogadai.co.id</p>
                </div>
            </div>
          </b>
        </div>

    </div>
</div>



</div>
    <script>
      window.print();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>