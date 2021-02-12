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
          <form action="/metode_pembayaran/update/{{$detail->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Pembayaran</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kategori_barang" value="{{$detail->nama_pembayaran}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jenis Pembayaran</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kategori_barang" value="{{$detail->jenis}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Cover</label><br>
                <img width="200" height="200" @if($detail->foto_file_pembayaran) src="{{ asset('images/'.$detail->foto_file_pembayaran) }}" @endif/>
                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="foto_file_pembayaran" value="{{$detail->foto_file_pembayaran}}"/>
            </div>
      </div>
    </div>
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="/metode_pembayaran" class="btn btn-danger">Kembali</a>
        </form>
        </div>
    </div>
</div>


@endsection


@section('extra-script')

@endsection

