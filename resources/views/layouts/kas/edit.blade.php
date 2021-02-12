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
          <form action="/kas/update/{{$kas->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Kas</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kas" value="{{$kas->nama_kas}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Bank</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="bank" value="{{$kas->bank}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Rekening</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="no_rekening" value="{{$kas->no_rekening}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Pemilik</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pemilik" value="{{$kas->nama_pemilik}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Saldo Awal</label>
              <input type="number" class="form-control" id="exampleInputEmail1" name="saldo_awal" value="{{$kas->saldo_awal}}" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Saldo Akhir</label>
              <input type="number" class="form-control" id="exampleInputEmail1" name="saldo_akhir" value="{{$kas->saldo_akhir}}" aria-describedby="emailHelp">
            </div>
      </div>
    </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/kas" class="btn btn-danger pull-right">Kembali</a>
        </form>
        </div>
    </div>
</div>


@endsection


@section('extra-script')

@endsection

