@extends('layouts/customer/index')

@section('title')
    Dashboard
@endsection


@section('content')
<br>
    <!--shop  area start-->
    <div class="container">
    <div class="shop_area shop_reverse" >
       
                    <div class="shop_title1" style="margin-bottom: 10px; font-size: 22px;">
                        <p><strong>Kategori Barang Digadai</strong></p>
                    </div>
                    <!--shop toolbar end-->
                    <div class="row shop_wrapper">
                      @foreach($kategori as $kategoriss)
                        <div class="col-lg-4 col-md-12 col-12 ">
                            <div class="single_product">                              
                                <div class="product_thumb">
                                    <a class="primary_img" href="/gadai-barang/{{$kategoriss->nama_kategori_barang}}"><img src="{{ asset('images/'.$kategoriss->foto_barang) }}" alt="" style="height: 180px; width: max-content; border-radius: 6px;"></a>
                                    <a class="secondary_img" href="/gadai-barang/{{$kategoriss->nama_kategori_barang}}"><img src="{{ asset('images/'.$kategoriss->foto_barang) }}" alt="" style="height: 180px; width: max-content; border-radius: 6px;"></a>
                                </div>
                               <div class="product_name grid_name" style="text-align:center; ">
                                    <h3><a href="/gadai-barang/{{$kategoriss->nama_kategori_barang}}"><b>{{$kategoriss->nama_kategori_barang}}</b></a></h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="col-lg-4 col-md-4 col-12 ">
                             <div class="single_product">
                               <div class="product_thumb">
                                    <a class="primary_img" href="form_kendaraan.html"><img src="assets/img/product/sepeda.png" alt="" style="height: 180px; width: max-content; border-radius: 6px;"></a>
                                    <a class="secondary_img" href="form_kendaraan.html"><img src="assets/img/product/sepeda.png" alt="" style="height: 180px; width: max-content; border-radius: 6px;"></a>
                                </div>
                               <div class="product_name grid_name" style="text-align:center; ">
                                    <h3><a href="form_kendaraan.html"><b>Kendaraan</b></a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="single_product">
                               <div class="product_thumb">
                                   <a class="primary_img" href="form_laptop.html"><img src="assets/img/product/laptop.png" alt="" style="height: 180px; width: max-content; border-radius: 6px;"></a>
                                   <a class="secondary_img" href="form_laptop.html"><img src="assets/img/product/laptop.png" alt="" style="height: 180px; width: max-content; border-radius: 6px;"></a>
                               </div>
                              <div class="product_name grid_name" style="text-align:center; ">
                                   <h3><a href="form_laptop.html"><b>Laptop</b></a></h3>
                               </div>
                           </div>
                       </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="form_gadai_elektronik.html"><img src="assets/img/product/camera.png" alt="" style="height: 180px; width: max-content; border-radius: 6px;"></a>
                                    <a class="secondary_img" href="form_gadai_elektronik.html"><img src="assets/img/product/camera.png" alt="" style="height: 180px; width: max-content; border-radius: 6px;"></a>
                                </div>
                               <div class="product_name grid_name" style="text-align:center; ">
                                    <h3><a href="form_gadai_elektronik.html"><b>Elektronik</b></a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="single_product">
                               <div class="product_thumb">
                                    <a class="primary_img" href="form_logammulia.html"><img src="assets/img/product/logam.png" alt="" style="height: 180px; width: max-content; border-radius: 6px;"></a>
                                    <a class="secondary_img" href="form_logammulia.html"><img src="assets/img/product/logam.png" alt="" style="height: 180px; width: max-content; border-radius: 6px;"></a>
                                </div>
                               <div class="product_name grid_name" style="text-align:center; ">
                                    <h3><a href="form_logammulia.html"><b>Logam Mulia</b></a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <div class="single_product">
                               <div class="product_thumb">
                                    <a class="primary_img" href="form_perhiasan.html"><img src="assets/img/product/perhiasan.png" alt="" style="height: 180px; width: max-content; border-radius: 6px;"></a>
                                    <a class="secondary_img" href="form_perhiasan.html"><img src="assets/img/product/perhiasan.png" alt="" style="height: 180px; width: max-content; border-radius: 6px;"></a>
                                </div>
                               <div class="product_name grid_name" style="text-align:center; ">
                                    <h3><a href="form_perhiasan.html"><b>Perhiasan</b></a></h3>
                                </div>
                            </div>
                    </div> -->
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection