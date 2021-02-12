<!--Main Wrapper Start -->
    <!-- Bagian Header -->
      <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="/"><img src="{{url('assets/img/logo/logo.png')}}" alt="" style="height: 60px; width: 100px"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <div class="middel_right">
                            <div class="search-container">
                                <form action="#">
                                    <div class="search_box">
                                        <input placeholder="Masukan kata kunci pencarian barang ..." type="text">
                                        <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="middel_right_info">
                                <!-- <div class="mini_cart_wrapper">
                                    <a href="javascript:void(0)"><span class="fa-stack fa-3x has-badge" data-count="99">
                                                                    <i class="fa fa-bell-o"></i>
                                                                    </span>
                                    <span class="cart_quantity">2</span>
                                </div> -->
                                <div class="profil">
                                    <img src="{{ asset('images/'.auth()->user()->profile->foto_profile) }}" width="50" height="50" class="rounded-circle" alt="Cinque Terre" sizes="30%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
        
        <!--mini cart-->
        <!-- <div class="mini_cart">
            <div class="cart_close">
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="assets/img/s-product/pay.png" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">Pembayaran laptop anda telah berhasil...</a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="assets/img/s-product/buy.png" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">Pembelian laptop anda telah berhasil...</a>
                </div>
            </div>
        </div> -->
        <!--mini cart end-->
        

        <!-- Bagian Header Customer -->
        <!--header bottom start-->
        <div class="header_bottom mb-0 sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu header_position">
                            <nav>
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li ><a href="/kategori_barang">Gadai</a></li>
                                    <li><a href="/kontak-kami">Kontak Kami</a></li>
                                    <li><a href="/profile/{{auth::user()->id}}">Profil</a></li>
                                    <li><a href="/logout">Logout</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--header bottom end-->
        <!-- End Bagian Customer -->


    </header>
    <!--header area end-->
    <!-- End Bagian Header