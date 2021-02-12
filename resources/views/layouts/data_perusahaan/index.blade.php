@extends('index')

@section('title')
    Profile
@endsection

@section('extra-style')

@endsection

@section('content')
<div class="container-fluid">
    <div class="panel panel-profile">
        <div class="clearfix">
            <!-- LEFT COLUMN -->
            <div class="profile-left">
                <!-- PROFILE HEADER -->
                <div class="profile-header" style="background-color: #808080;">
                    <div class="overlay"></div>
                    <div class="profile-main" >
                        <img src="{{ url('/Klorofil/img/logo_gadai.png') }}" style="width:90px;" class="img-circle" alt="Avatar">
                        <h3 class="name">Ayo Gadai</h3>
                    </div>
                </div>
                <!-- END PROFILE HEADER -->
                <!-- PROFILE DETAIL -->
                <div class="profile-detail">
                    <div class="profile-info">
                        <h4 class="heading">Basic Info</h4>
                        <ul class="list-unstyled list-justify">
                            <li>Nama Perusahaan <span>{{$data->nama_perusahaan}}</span></li>
                            <li>Biaya Administrasi <span>Rp. {{$data->biaya_admin}}</span></li>
                            <li>Denda Perhari <span>Rp. {{$data->denda_per_hari}}</span></li>
                            <li>Website <span><a href="https://www.themeineed.com">www.ayogadai.co.id</a></span></li>
                        </ul>
                    </div>
                </div>
                <!-- END PROFILE DETAIL -->
            </div>
            <!-- END LEFT COLUMN -->
            <!-- RIGHT COLUMN -->
            <div class="profile-right">
                <h4 class="heading">Edit Data</h4>
                <!-- TABBED CONTENT -->
                    <div class="tab-pane fade in active" id="tab-bottom-left1">
                        <form action="/data-perusahaan/edit/{{$data->id}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Perusahaan" value="{{$data->nama_perusahaan}}" name="nama_perusahaan">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Biaya Administrasi</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Biaya Administrasi" value="{{$data->biaya_admin}}" name="biaya_admin">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Biaya Denda per Hari</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Biaya Denda per Hari" value="{{$data->denda_per_hari}}" name="denda_per_hari">
                          </div>
                          <input type="hidden" name="logo_perusahaan" value="test.jpg">
                          <center>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </center>
                        </form>
                    </div>
                <!-- END TABBED CONTENT -->
            </div>
            <!-- END RIGHT COLUMN -->
        </div>
    </div>
</div>
@endsection


@section('extra-script')

@endsection