@extends('index')

@section('title')
    Profile
@endsection

@section('extra-style')

@endsection

@section('content')
<div class="container-fluid">
    <h3>Profil {{$profile->nama}}</h3>

    <table class="table table-striped">
                            <tr>
                                    <img src="{{ asset('images/'.$profile->foto_profile) }}" class="img img-rounded" width="100" height="100" alt="Avatar">
                            <tr>
                                <br>
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
@endsection


@section('extra-script')

@endsection