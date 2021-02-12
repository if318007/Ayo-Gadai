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
                <div class="profile-header">
                    <div class="overlay"></div>
                    <div class="profile-main">
                        <img src="{{ asset('images/'.$profile->foto_profile) }}" class="img-circle" width="100" height="100" alt="Avatar">
                    </div>
                </div>
                <!-- END PROFILE HEADER -->
                <!-- PROFILE DETAIL -->
                <div class="profile-detail">
                    <div class="profile-info">
                        <h4 class="heading"><b>Basic Info</b></h4>
                        <ul class="list-unstyled list-justify">
                            <li><b>Nama</b> <span>{{$user->name}}</span></li>
                            <li><b>Email</b> <span>{{$user->email}}</span></li>
                            <li><b>Jabatan</b> <span>{{$user->role}}</span></li>
                            <li><b>Website</b> <span><a href="https://www.themeineed.com">www.ayogadai.co.id</a></span></li>
                        </ul>
                    </div>
                    <div class="text-center"><a href="/profile/edit/{{auth()->user()->id}}" class="btn btn-primary">Edit Profil</a></div>
                </div>
                <!-- END PROFILE DETAIL -->
            </div>
            <!-- END LEFT COLUMN -->
            <!-- RIGHT COLUMN -->
            <div class="profile-right">
                <h4 class="heading">Profil</h4>
                <div class="custom-tabs-line tabs-line-bottom left-aligned">
                    <table class="table table-striped">
                            <tr>
                                <th><b>Nama</b> </th>
                                <td>:</td>
                                <td>{{$profile->nama}}</td>
                            </tr>
                            <tr>
                                <th><b>Jenis Kelamin</b></th>
                                <td>:</td>
                                <td>
                                    @if($profile->jenis_kelamin == 'L')
                                        Laki - Laki
                                    @else
                                        Perempuan
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th><b>No. Hp</b></th>
                                <td>:</td>
                                <td>{{$profile->nomor_hp}}</td>
                            </tr>
                            <tr>
                                <th><b>No. Identitas</b></th>
                                <td>:</td>
                                <td>{{$profile->nomor_identitas}}</td>
                            </tr>
                            <tr>
                                <th><b>Domisili</b></th>
                                <td>:</td>
                                <td>{{$profile->domisili}}</td>
                            </tr>
                            <tr>
                                <th><b>Alamat</b></th>
                                <td>:</td>
                                <td>{{$profile->alamat}}</td>
                            </tr>
                            <tr>
                                <th><b>Tempat Lahir</b></th>
                                <td>:</td>
                                <td>{{$profile->tempat_lahir}}</td>
                            </tr>
                            <tr>
                                <th><b>Tanggal Lahir</b></th>
                                <td>:</td>
                                <td>{{date('j F, Y', strtotime($profile->tanggal_lahir))}}</td>
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
                </div>
            <!-- END RIGHT COLUMN -->
            </div>
        </div>
    </div>
</div>
@endsection


@section('extra-script')

@endsection