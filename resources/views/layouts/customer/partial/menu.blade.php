<!--Offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu canvas_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <span>MENU</span>
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">

                        <div class="canvas_close">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>

                        <div class="search-container">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search entire store here ..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children">
                                    <a href="/">Beranda</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/kategori_barang">Gadai</a></li>
                                <li class="menu-item-has-children">
                                    <a href="/kontak-kami">Kontak Kami</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/profile/{{auth::user()->id}}">Profil</a></li>
                                <li class="menu-item-has-children">
                                    <a href="/logout">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Body Syarat-->