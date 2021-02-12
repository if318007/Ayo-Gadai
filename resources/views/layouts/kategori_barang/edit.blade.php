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
          <form action="/kategori/update/{{$kategori->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Kategori</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kategori_barang" value="{{$kategori->nama_kategori_barang}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Cover</label><br>
                <img width="200" height="200" @if($kategori->foto_barang) src="{{ asset('images/'.$kategori->foto_barang) }}" @endif/>
                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="foto_barang" value="{{$kategori->foto_barang}}"/>
            </div>
      </div>
    </div>
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="/kategori_barang" class="btn btn-danger">Kembali</a>
        </form>
        </div>
    </div>
</div>


@endsection


@section('extra-script')

@endsection

