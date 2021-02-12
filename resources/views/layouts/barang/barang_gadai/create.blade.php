@extends('index')

@section('title')
    Panels
@endsection

@section('extra-style')

@endsection

@section('content')
<div class="container-fluid">
	<h3 class="panel-title"><b>Tambah Barang Gadai</b></h3><br>
		<div class="row">
			<center>
			@foreach($kategori as $k)
 			<div class="col-6 col-md-4" style="padding: 2px;">
 				<div class="card" style="width: 18rem;">
				  <img class="img img-rounded" src="{{ asset('images/'.$k->foto_barang) }}" width="100" height="100" alt="Card image cap">
				  <div class="card-body">
				    <h3 class="card-title">{{$k->nama_kategori_barang}}</h3>
				    <a href="/data_barang_gadai/tambah/{{$k->nama_kategori_barang}}" class="btn btn-primary btn-block">Gadai</a>
				  </div>
				</div>
 			</div>
  			@endforeach
  		</center>
		</div>
</div>
@endsection


@section('extra-script')

@endsection