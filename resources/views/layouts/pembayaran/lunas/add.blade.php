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
          <h3>Pembayaran Lunas {{$gadai->penyimpanan->user->name}}</h3>
          <form action="/pembayaran-lunas-langsung/{{$gadai->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleFormControlSelect1">Pilih Metode Pembayaran</label>
                <select class="form-control" id="exampleFormControlSelect1" name="metode_id">
                  <option selected="" disabled>-- Pilih Metode Pembayaran --</option>
                    @foreach($metodePembayaran as $j)                                    
                    <option value="{{$j->id}}">{{$j->nama_pembayaran}}&nbsp;({{$j->jenis}})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jumlah Pembayaran</label>
              <input type="number" class="form-control" id="exampleInputEmail1" name="jumlah" aria-describedby="emailHelp" placeholder="Masukkan jumlah pembayaran">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Foto/ File Pembayaran</label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="foto_file_pembayaran" aria-describedby="emailHelp">
          </div>
          <input type="hidden" name="gadai_id" value="{{$gadai->id}}">
          <input type="hidden" name="status" value="Lunas">
          <button type="submit" class="btn btn-primary float-right">Simpan</button>
      </div>
        </form>
        </div>
    </div>
</div>


@endsection


@section('extra-script')

@endsection

