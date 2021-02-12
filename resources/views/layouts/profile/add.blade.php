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
            <h3>Tambah Anggota </h3>
            <form action="/user/create" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Anda" name="nama" value="{{old('nama')}}">
                    @if($errors->has('nama'))
                        <span class="help-block">Nama tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('role') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Role</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="role">
                        <option selected="" disabled>-- Pilih Role --</option>
                        @if(auth()->user()->role == 'Admin')
                        <option value="Admin">Admin</option>
                        @endif
                        <option value="Karyawan">Karyawan</option>
                        <option value="Kurir">Kurir</option>
                        <option value="Nasabah">Nasabah</option>
                    </select>
                    @if($errors->has('role'))
                        <span class="help-block">Role tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Jenis Kelamin</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                        <option selected="" disabled>-- Pilih Jenis Kelamin --</option>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    @if($errors->has('jenis_kelamin'))
                        <span class="help-block">Jenis kelamin tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Password" name="password" value="{{old('password')}}">
                    @if($errors->has('password'))
                        <span class="help-block">Password tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email" name="email" value="{{old('email')}}">
                    @if($errors->has('email'))
                        <span class="help-block">Email tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('nomor_hp') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Nomor Handphone</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomor Handphone" name="nomor_hp" value="{{old('nomor_hp')}}">
                    @if($errors->has('nomor_hp'))
                        <span class="help-block">Nomor handphone tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('nomor_identitas') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Nomor Identitas</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomor Identitas (Contoh : Nomor KTP)" name="nomor_identitas" value="{{old('nomor_identitas')}}">
                    @if($errors->has('nomor_identitas'))
                        <span class="help-block">Nomor identitas tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('domisili') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Domisili</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Domisili" name="domisili" value="{{old('domisili')}}">
                    @if($errors->has('domisili'))
                        <span class="help-block">Domisili tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat Sekarang" name="alamat" value="{{old('alamat')}}">
                    @if($errors->has('alamat'))
                        <span class="help-block">Alamat tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('tempat_lahir') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Tempat Lahir</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" value="{{old('tempat_lahir')}}">
                    @if($errors->has('tempat_lahir'))
                        <span class="help-block">Tempat lahir tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('tanggal_lahir') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                    @if($errors->has('tanggal_lahir'))
                        <span class="help-block">Tanggal lahir tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('foto_kartu_identitas') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Unggah Foto Kartu Identitas</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Foto Kartu Identitas (Contoh : Foto KTP)" name="foto_kartu_identitas" value="{{old('foto_kartu_identitas')}}">
                    @if($errors->has('foto_kartu_identitas'))
                        <span class="help-block">Foto kartu identitas tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('foto_profile') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Unggah Foto Profile</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Unggah Foto Profile" name="foto_profile" value="{{old('foto_profile')}}">
                    @if($errors->has('foto_profile'))
                        <span class="help-block">Foto profil tidak boleh kosong!</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/profile/{{auth()->user()->id}}" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </div>
</div>

 
@endsection


@section('extra-script')

@endsection

