<div class="sidebar">
            <div class="brand">
                <a href="/"><img src="{{ url('/Klorofil/img/logo_gadai.png') }}" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
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
                                <span style="float:right;color:white;" class="label label-danger">
                                @php
                                use App\Gadai;
                                    $gadaiTidakTebus = Gadai::whereStatus('Terima')->get()->count();
                                    echo $gadaiTidakTebus;
                                   @endphp
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>