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
          <form action="/jenis-kategori/update/{{$jenis->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Jenis Kategori</label>
              <select class="form-control" name="kategori_id">
                @foreach($kategori as $kategoriss)
                <option value="{{$kategoriss->id}}" selected>{{$kategoriss->nama_kategori_barang}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jenis_kategori_barang" value="{{$jenis->nama_jenis_kategori_barang}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Bunga (%)</label>
              <input type="number" class="form-control" id="exampleInputEmail1" name="bunga" value="{{$jenis->bunga}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Waktu Tenggang (Hari)</label>
              <input type="number" class="form-control" id="exampleInputEmail1" name="waktu_tenggang" value="{{$jenis->waktu_tenggang}}" aria-describedby="emailHelp">
            </div>
      </div>
    </div>
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="/jenis_kategori_barang" class="btn btn-danger">Kembali</a>
        </form>
        </div>
    </div>
</div>


@endsection


@section('extra-script')

@endsection

