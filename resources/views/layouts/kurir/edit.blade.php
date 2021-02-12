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
          <form action="/kurir/update/{{$kurir->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="{{$kurir->name}}" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{$kurir->email}}">
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

