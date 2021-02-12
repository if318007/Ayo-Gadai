@extends('layouts/customer/index')

@section('title')
    Dashboard
@endsection


@section('content')
<div class="container " >
        <div class="flex-containers">
            <div class="box">
                <div class="flex">
                    <center>
                        <h3>Sedikit Mengenai kami</h3>
                    </center>
                    <p>Kami sangat menghargai dan perduli pada setiap pelanggan kami. Apabila anda memiliki kendala dan masalah dalam 
                    menggunakan aplikasi kami, kami dapat membantu dengan menyediakan layanan pelanggan atau self customer. Anda 
                    dapat mengirimkan kritik dan saran anda melalui layanan berikut</p>

                <div class="flex-container">
                    <div class="card">
                        <div class="card-body">
                            <div class="body-left">
                                <img src="assets/img/icon/phone.png">
                                <div class="clearfix"></div>
                            </div>
                            <div class="desc">
                                <p class="handphone">Handphone</p>
                                <p class="nomor"><strong>081268315454</strong></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="body-left">
                                <img src="assets/img/icon/lokasi.png">
                                <div class="clearfix"></div>
                            </div>
                            <div class="desc">
                                <p class="handphone">Lokasi</p>
                                <p class="nomor"><strong>Jl. Sisingamangaraja</strong></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="body-left">
                                <img src="assets/img/icon/email.png">
                                <div class="clearfix"></div>
                            </div>
                            <div class="desc">
                                <p class="handphone">Kirim Pesan</p>
                                <p class="nomor"><a href="https://support.google.com/mail/answer/8494?co=GENIE.Platform%3DDesktop&hl=id"><strong><u>ayogadai@gmail.com</u></strong></a></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection