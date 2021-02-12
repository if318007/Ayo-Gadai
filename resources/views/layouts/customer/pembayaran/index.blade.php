@extends('layouts/customer/index')

@section('title')
    Dashboard
@endsection


@section('content')

@include('layouts/customer/partial/sub_menu')
                    <!--sidebar widget end-->
                            
                <div class="col-lg-9 col-md-12">
                    <div class="box2">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_banner">
                        <h3><b style="color: green;">Metode Pembayaran</b></h3>

                    <div class="row shop_wrapper">
                        <div class="col-lg-6 col-md-6 col-12 ">
                            <div class="syarat">                             
                                <div class="product_thumb">
                                    <h4><b>Penjelasan</b></h4>
                                </div>
                               <div class="tulisan" style="color:black">
                                    <p>Cara untuk mengajukan permohonan dengan mengisi formulir permohonan melalui website Pegadaian (www.pegadaian.co.id) atau datang langsung ke outlet - outlet Pegadaian terdekat. Bagi nasabah yang sudah mengisi formulir</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 ">
                             <div class="syarat">
                                <div class="product_thumb">
                                    <h4><b>Metode</b></h4>
                                </div>
                               <div class="product_name grid_name">
                                @foreach($metode as $m)
                                    <div class="ketentuan">                             
                                        <div class="product_thumb">
                                            <img src="{{ asset('images/'.$m->foto_file_pembayaran) }}" class="img img-circle">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="tulisan1">
                                            <a href="#"><b>{{$m->nama_pembayaran}}</b></a>
                                            <h6>{{$m->jenis}}</h6>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                </div> 
            </div>



        </div>
    </div>
    </div>
</div>

@endsection