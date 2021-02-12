@extends('layouts/customer/index')

@section('title')
    Dashboard
@endsection


@section('content')
   <br>

    <div class="profil-body" style="background-color: #ffffff">
        <div class="container">
              
        @include('layouts/customer/partial/sub_menu')
        <div class="col-lg-1 col-md-12"></div>
                            
                <div class="col-lg-8 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                   <!--  <div class="shop_banner">
                        <img src="assets/img/bg/banner8.jpg" alt="">
                    </div> -->
                    <div class="shop_title">
                        <h1>Ayo Gadai</h1>
                    </div>
                    <!--shop toolbar end-->

                    <div class="row shop_wrapper">
                        <div class="col-lg-12 col-md-12 col-12">
                            <p>Ayo gadai merupakan platform yang membantu masyarakat dalam memperoleh dana lebih cepat dan menguntungkan. Ayo gadai berdiri pada tanggal 12 September 2020. Ayo gadai berlokasikan di Medan tepatnya Jl. Sisingamangaraja No. 23 Kota Medan, Sumatera Utara. Ayo Gadai didirikan dengan maksud tujuan untuk mempermudah masyarakat yang kesulitan dalam menggadaikan barang mereka. Ayo gadai juga memberikan pelayanan tambahan dengan adanya kurir sebagai pengantar jemput barang gadai, sehingga masyarakat tidak perlu datang ke kantor langsung. Tidak menutup kemungkinan juga dapat langsung datang ke kantor.</p>
                            <b><p>Berikut lokasi dari Ayo Gadai : </p></b>  
                        </div>
                    </div>
                    <div class="row shop_wrapper">
                        <div class="col-lg-4 col-md-4 ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.5705267458372!2d114.57444712927017!3d-3.3152044552689253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423d48a3dc841%3A0x1821d6c60c5a9a48!2sJasa+Pembuatan+Website+Banjarmasin!5e0!3m2!1sid!2sid!4v1527727490692" width="780" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
@endsection