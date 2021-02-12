@extends('index')

@section('title')
    Panels
@endsection

@section('extra-style')

@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3>Silahkan isi form berikut</h3>
            <form action="/kategori/store/{{$kategori->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Pilih Jenis Barang</label>
              <select class="form-control" name="kategori_id">
                @foreach($jenis as $jeniss)
                <option value="{{$jeniss->id}}">{{$jeniss->nama_jenis_kategori_barang}}</option>
                @endforeach
              </select>
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Kategori</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kategori_barang" value="{{$kategori->nama_kategori_barang}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Kategori</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kategori_barang" value="{{$kategori->nama_kategori_barang}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Kategori</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kategori_barang" value="{{$kategori->nama_kategori_barang}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Kategori</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kategori_barang" value="{{$kategori->nama_kategori_barang}}" aria-describedby="emailHelp">
            </div>
      </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="/kategori_barang" class="btn btn-danger right">Kembali</a>
        </form>
        </div>
    </div>
</div>


@endsection


@section('extra-script')

@endsection