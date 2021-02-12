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
          <form action="/user/update/{{$user->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="{{$user->name}}" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{$user->email}}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Role</label>
            <select class="form-control" name="role" id="exampleFormControlSelect1">
              <option value="Admin" @if($user->status == 'admin') selected @endif>Admin</option>
              <option value="Karyawan"  @if($user->status == 'karyawan') selected @endif>Karyawan</option>
              <option value="Kurir"  @if($user->status == 'kurir') selected @endif>Kurir</option>
              <option value="Nasabah"  @if($user->status == 'nasabah') selected @endif>Nasabah</option>
            </select>
          </div>
      </div>
        <button type="submit" class="btn btn-primary float-right">Save</button>
        </form>
        </div>
    </div>
</div>


@endsection


@section('extra-script')

@endsection

