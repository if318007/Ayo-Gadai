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
                        <h3><b style="color: green;">Syarat & Ketentuan</b></h3>

                    <div class="row shop_wrapper">
                        <div class="col-lg-6 col-md-6 col-12 ">
                            <div class="syarat">                             
                                <div class="product_thumb">
                                    <h4><b>Syarat</b></h4>
                                </div>
                               <div class="tulisan" style="color:black">
                                    <p>Cara untuk mengajukan permohonan dengan mengisi formulir permohonan melalui website Pegadaian (www.pegadaian.co.id) atau datang langsung ke outlet - outlet Pegadaian terdekat. Bagi nasabah yang sudah mengisi formulir</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 ">
                             <div class="syarat">
                                <div class="product_thumb">
                                    <h4><b>Ketentuan</b></h4>
                                </div>
                               <div class="product_name grid_name">

                                    <div class="ketentuan">                             
                                        <div class="product_thumb">
                                            <img src="assets/img/product/product1.jpg">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="tulisan1">
                                            <a href="#"><b>Ketentuan Layanan</b></a>
                                            <h6>Cara untuk mengajukan permohonan dengan mengisi formulir</h6>
                                        </div>
                                    </div>

                                    <div class="ketentuan">                             
                                        <div class="product_thumb">
                                            <img src="assets/img/product/product1.jpg"">
                                        </div>
                                        <div class="tulisan1">
                                        <a href="#"><b>Kebijakan Data</b></a>
                                        <h6>Informasi yang kami terima dan cara penggunaannya
                                        </div>

                                    </div>
                                    <div class="ketentuan">                             
                                        <div class="product_thumb">
                                            <img src="assets/img/product/product1.jpg"">
                                        </div>
                                        <div class="tulisan1">
                                        <a href="#"><b>Standar Komunikasi</b></a>
                                        <h6>Mengisi formulir permohonan melalui website Pegadaian</h6>
                                        </div>

                                    </div>

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