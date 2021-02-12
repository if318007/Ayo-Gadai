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
            <h3>Edit Profile </h3>
            <form action="/profile/update/{{$profile->id}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Anda" name="nama" value="{{$profile->nama}}">
                    @if($errors->has('nama'))
                        <span class="help-block">Nama tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Jenis Kelamin</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                        <option selected="" disabled>-- Pilih Jenis Kelamin --</option>
                        <option value="L" @if($profile->jenis_kelamin == 'L') selected @endif>Laki - Laki</option>
                        <option value="P" @if($profile->jenis_kelamin == 'P') selected @endif >Perempuan</option>
                    </select>
                    @if($errors->has('jenis_kelamin'))
                        <span class="help-block">Jenis kelamin tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('nomor_hp') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Nomor Handphone</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomor Handphone" name="nomor_hp" value="{{$profile->nomor_hp}}">
                    @if($errors->has('nomor_hp'))
                        <span class="help-block">Nomor handphone tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('nomor_identitas') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Nomor Identitas</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nomor Identitas (Contoh : Nomor KTP)" name="nomor_identitas" value="{{$profile->nomor_identitas}}">
                    @if($errors->has('nomor_identitas'))
                        <span class="help-block">Nomor identitas tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('domisili') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Domisili</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Domisili" name="domisili" value="{{$profile->domisili}}">
                    @if($errors->has('domisili'))
                        <span class="help-block">Domisili tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat Sekarang" name="alamat" value="{{$profile->alamat}}">
                    @if($errors->has('alamat'))
                        <span class="help-block">Alamat tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('tempat_lahir') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Tempat Lahir</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" value="{{$profile->tempat_lahir}}">
                    @if($errors->has('tempat_lahir'))
                        <span class="help-block">Tempat lahir tidak boleh kosong!</span>
                    @endif
                </div>
                <div class="form-group {{$errors->has('tanggal_lahir') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" value="{{$profile->tanggal_lahir}}">
                    @if($errors->has('tanggal_lahir'))
                        <span class="help-block">Tanggal lahir tidak boleh kosong!</span>
                    @endif
                </div>
                <!-- <div class="form-group {{$errors->has('foto_kartu_identitas') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Unggah Foto Kartu Identitas</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Foto Kartu Identitas (Contoh : Foto KTP)" name="foto_kartu_identitas" value="{{old('foto_kartu_identitas')}}">
                    @if($errors->has('foto_kartu_identitas'))
                        <span class="help-block">Foto kartu identitas tidak boleh kosong!</span>
                    @endif
                </div> -->
                <div class="form-group">
                        <label for="email" class="control-label">Foto Kartu Identitas</label><br>
                                <img width="200" height="200" @if($profile->foto_kartu_identitas) src="{{ asset('images/'.$profile->foto_kartu_identitas) }}" @endif/>
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="foto_kartu_identitas" value="{{$profile->foto_kartu_identitas}}"/>
                                @if($errors->has('foto_kartu_identitas'))
                        <span class="help-block">Foto kartu identitas tidak boleh kosong!</span>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Foto Profile</label><br>
                                <img width="200" height="200" @if($profile->foto_profile) src="{{ asset('images/'.$profile->foto_profile) }}" @endif/>
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="foto_profile" value="{{$profile->foto_profile}}"/>
                                @if($errors->has('foto_profile'))
                                    <span class="help-block">Foto profil tidak boleh kosong!</span>
                                @endif
                    </div>
                <!-- <div class="form-group {{$errors->has('foto_profile') ? 'has-error' : ''}}">
                    <label for="exampleFormControlInput1">Unggah Foto Profile</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Unggah Foto Profile" name="foto_profile" value="{{old('foto_profile')}}">
                    @if($errors->has('foto_profile'))
                        <span class="help-block">Foto profil tidak boleh kosong!</span>
                    @endif
                </div> -->
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/profile/{{auth()->user()->id}}" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </div>
</div>

 
@endsection


@section('extra-script')

@endsection

