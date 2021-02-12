<div class="sidebar">
            <div class="brand">
                <a href="/"><img src="{{ url('/Klorofil/img/logo_gadai.png') }}" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        @if(auth()->user()->role == 'Admin')
                        <!-- Dashboard -->
                        <li>
                            <a href="/" {{Route::is('dashboard')?'class=active':''}}>
                                <i class="lnr lnr-home"></i> <span>Dashboard</span>
                            </a>
                        </li>
                         <!-- End dashboard -->
                         
                        <!-- Transaksi -->
                        <h4>Transaksi</h4>
                        <li>
                            <a href="/data_barang_gadai" {{Route::is('data_barang_gadai')?'class=active':''}}>
                                <i class="lnr lnr-list"></i> <span>Barang Gadai</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_barang_jatuh_tempo" {{Route::is('data_barang_jatuh_tempo')?'class=active':''}}>
                                <i class="lnr lnr-warning"></i> <span>Barang Jatuh Tempo</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_barang_tidak_ditebus" {{Route::is('data_barang_tidak_ditebus')?'class=active':''}}>
                                <i class="lnr lnr-cross-circle"></i> <span>Barang Tidak Ditebus</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_barang_lelang" {{Route::is('data_barang_lelang')?'class=active':''}}>
                                <i class="lnr lnr-exit-up"></i> <span>Barang Lelang</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_barang_ditebus" {{Route::is('data_barang_ditebus')?'class=active':''}}>
                                <i class="lnr lnr-sync"></i> <span>Barang Ditebus</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_barang_persetujuan" {{Route::is('data_barang_persetujuan')?'class=active':''}}>
                                <i class="lnr lnr-pointer-right"></i> <span>Daftar Persetujuan</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <!-- End transaksi -->

                        <!-- Pembayaran -->
                        <h4>Pembayaran</h4>
                        <li>
                            <a href="/pembayaran_bunga" {{Route::is('pembayaran_bunga')?'class=active':''}}>
                                <i class="lnr lnr-bookmark"></i> <span>Pembayaran Bunga</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/pembayaran_lunas" {{Route::is('pembayaran_lunas')?'class=active':''}}>
                                <i class="lnr lnr-spell-check"></i> <span> Pembayaran Lunas</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/metode_pembayaran" {{Route::is('metode_pembayaran')?'class=active':''}}>
                                <i class="lnr lnr-diamond"></i> <span>Metode Pembayaran</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <!-- End Pembayaran -->


                        <!-- Master -->
                        <h4>Master</h4>
                        <li>
                            <a href="/user" {{Route::is('user')?'class=active':''}}>
                                <i class="lnr lnr-user"></i> <span>User</span>
                            </a>
                        </li>
                        <li>
                            <a href="/kategori_barang" {{Route::is('kategori_barang')?'class=active':''}}>
                                <i class="lnr lnr-book"></i> <span>Kategori Barang</span>
                            </a>
                        </li>
                        <li>
                            <a href="/jenis_kategori_barang" {{Route::is('jenis_kategori_barang')?'class=active':''}}>
                                <i class="lnr lnr-menu"></i> <span>Jenis Barang</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_nasabah" {{Route::is('data_nasabah')?'class=active':''}}>
                                <i class="lnr lnr-users"></i> <span>Data Nasabah</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_kurir" {{Route::is('data_kurir')?'class=active':''}}>
                                <i class="lnr lnr-car"></i> <span>Data Kurir</span>
                            </a>
                        </li>
                        <!-- End master -->

                        <!-- Administrasi -->
                        <h4>Administrasi</h4>
                        <li>
                            <a href="/laporan" {{Route::is('laporan')?'class=active':''}}>
                                <i class="lnr lnr-enter"></i> <span>Laporan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/dana" {{Route::is('dana')?'class=active':''}}>
                                <i class="lnr lnr-briefcase"></i> <span>Aliran Dana</span>
                            </a>
                        </li>
                        <li>
                            <a href="/kas" {{Route::is('kas')?'class=active':''}}>
                                <i class="lnr lnr-chart-bars"></i> <span>Kas</span>
                            </a>
                        </li>
                        <!-- End administrasi -->   

                        <!-- Settings -->
                        <h4>Pengaturan</h4>
                        <li>
                            <a href="/data_perusahaan" {{Route::is('/data_perusahaan')?'class=active':''}}>
                                <i class="lnr lnr-cog"></i> <span>Pusat Kontrol</span>
                            </a>
                        </li>
                        @endif
                        
                        
                        @if(auth()->user()->role == 'Kurir')
                        <!-- Role Kurir -->
                        <!-- Dashboard -->
                        <li>
                            <a href="/" {{Route::is('dashboard')?'class=active':''}}>
                                <i class="lnr lnr-home"></i> <span>Dashboard</span>
                            </a>
                        </li>
                         <!-- End dashboard -->
                        <li>
                            <a href="/data_barang_diterima" {{Route::is('data_barang_diterima')?'class=active':''}}>
                                <i class="lnr lnr-pointer-right"></i> <span>Barang Diterima</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        @endif

                        <!-- Role Karyawan -->
                        @if(auth()->user()->role == 'Karyawan')
                        <li>
                            <a href="/" {{Route::is('dashboard')?'class=active':''}}>
                                <i class="lnr lnr-home"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        @endif
                         <!-- End dashboard -->
                    
                        @if(auth()->user()->role == 'Karyawan')
                        <!-- Transaksi -->
                        <h4>Transaksi</h4>
                        <li>
                            <a href="/data_barang_gadai" {{Route::is('data_barang_gadai')?'class=active':''}}>
                                <i class="lnr lnr-list"></i> <span>Barang Gadai</span>
                                <span style="float:right;color:white;" class="label label-danger">
                                   3
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/data_barang_jatuh_tempo" {{Route::is('data_barang_jatuh_tempo')?'class=active':''}}>
                                <i class="lnr lnr-warning"></i> <span>Barang Jatuh Tempo</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_barang_tidak_ditebus" {{Route::is('data_barang_tidak_ditebus')?'class=active':''}}>
                                <i class="lnr lnr-cross-circle"></i> <span>Barang Tidak Ditebus</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_barang_lelang" {{Route::is('data_barang_lelang')?'class=active':''}}>
                                <i class="lnr lnr-exit-up"></i> <span>Barang Lelang</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_barang_ditebus" {{Route::is('data_barang_ditebus')?'class=active':''}}>
                                <i class="lnr lnr-sync"></i> <span>Barang Ditebus</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_barang_persetujuan" {{Route::is('data_barang_persetujuan')?'class=active':''}}>
                                <i class="lnr lnr-pointer-right"></i> <span>Daftar Persetujuan</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <!-- End Transaksi -->

                        <!-- Pembayaran -->
                        <h4>Pembayaran</h4>
                        <li>
                            <a href="/pembayaran_bunga" {{Route::is('pembayaran_bunga')?'class=active':''}}>
                                <i class="lnr lnr-bookmark"></i> <span>Pembayaran Bunga</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/pembayaran_lunas" {{Route::is('pembayaran_lunas')?'class=active':''}}>
                                <i class="lnr lnr-spell-check"></i> <span> Pembayaran Lunas</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="/metode_pembayaran" {{Route::is('metode_pembayaran')?'class=active':''}}>
                                <i class="lnr lnr-diamond"></i> <span>Metode Pembayaran</span>
                                <span style="float:right;color:white;" class="label label-danger">3</span>
                            </a>
                        </li>
                        <!-- End Pembayaran -->

                        <!-- Master -->
                        <h4>Master</h4>
                        <li>
                            <a href="/user" {{Route::is('user')?'class=active':''}}>
                                <i class="lnr lnr-user"></i> <span>User</span>
                            </a>
                        </li>
                        <li>
                            <a href="/kategori_barang" {{Route::is('kategori_barang')?'class=active':''}}>
                                <i class="lnr lnr-book"></i> <span>Kategori Barang</span>
                            </a>
                        </li>
                        <li>
                            <a href="/jenis_kategori_barang" {{Route::is('jenis_kategori_barang')?'class=active':''}}>
                                <i class="lnr lnr-menu"></i> <span>Jenis Barang</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_nasabah" {{Route::is('data_nasabah')?'class=active':''}}>
                                <i class="lnr lnr-users"></i> <span>Data Nasabah</span>
                            </a>
                        </li>
                        <li>
                            <a href="/data_kurir" {{Route::is('data_kurir')?'class=active':''}}>
                                <i class="lnr lnr-car"></i> <span>Data Kurir</span>
                            </a>
                        </li>
                        <!-- End master -->
                        <!-- Administrasi -->
                        <h4>Administrasi</h4>
                        <li>
                            <a href="/laporan" {{Route::is('laporan')?'class=active':''}}>
                                <i class="lnr lnr-enter"></i> <span>Laporan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/dana" {{Route::is('dana')?'class=active':''}}>
                                <i class="lnr lnr-briefcase"></i> <span>Aliran Dana</span>
                            </a>
                        </li>
                        <li>
                            <a href="/kas" {{Route::is('kas')?'class=active':''}}>
                                <i class="lnr lnr-chart-bars"></i> <span>Kas</span>
                            </a>
                        </li>
                        <!-- End administrasi -->
                        @endif
                    </ul>
                </nav>
            </div>
        </div>