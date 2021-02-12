@extends('layouts/customer/index')

@section('title')
    Dashboard
@endsection


@section('content')

@include('layouts/customer/partial/sub_menu')

<div class="col-lg-9 col-md-12">
                    <div class="box2">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->


<div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                  <h3><b style="color: green;">Riwayat</b></h3>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Pengajuan</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Barang Gadai</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Pembayaran Bunga</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                      <!-- @for($i=0; $i<2; $i++)
                      <div class="cart_items" id="tab1default">
                          <div class="cart_img">
                              <img src="{{url('assets/img/s-product/pay.png')}}" alt="">
                          </div>
                          
                          <div class="cart_info">
                              <p>Pembayaran Handphone anda telah berhasil...</p>
                              <p>26 April 2020</p>
                          </div>
                          
                       </div>
                       @endfor -->
                        <div class="tab-pane fade in active" id="tab1default">
                          @foreach($penyimpananPengajuan as $simpanan)
                            @if($simpanan->status == 'Pengajuan')
                            <a href="/data-barang-gadai-detail/cekPersetujuan/{{$simpanan->id}}">
                            <div class="cart_items" id="tab1default">
                                <div class="cart_img">
                                    <img  width="70" height="70" alt="image" src="{{ asset('images/'.$simpanan->foto_file_barang) }}" class="img img-rounded">
                                </div>
                                
                                <div class="cart_info">
                                    <p><h4>{{$simpanan->jenis->kategori->nama_kategori_barang}}</h4> {{$simpanan->jenis->nama_jenis_kategori_barang}}</p>
                                    <p>Waktu/Tanggal Masuk : {{$simpanan->created_at}}</p>
                                    @if($simpanan->status == 'Pengajuan')
                                      <label class="btn btn-warning">Pengajuan Sudah Diproses, silahkan cek detail untuk info lebih lanjut</label>
                                    @elseif($simpanan->status == 'Menunggu')
                                      <label class="btn btn-warning">Menunggu Keputusan</label>
                                    @endif
                                </div>
                             </div>
                           </a>
                           @else
                           <div class="cart_items" id="tab1default">
                                <div class="cart_img">
                                    <img  width="70" height="70" alt="image" src="{{ asset('images/'.$simpanan->foto_file_barang) }}" class="img img-rounded">
                                </div>
                                
                                <div class="cart_info">
                                    <p><h4>{{$simpanan->jenis->kategori->nama_kategori_barang}}</h4> {{$simpanan->jenis->nama_jenis_kategori_barang}}</p>
                                    <p>Waktu/Tanggal Masuk : {{$simpanan->created_at}}</p>
                                    @if($simpanan->status == 'Pengajuan')
                                      <label class="btn btn-warning">Pengajuan Sudah Diproses, silahkan cek detail untuk info lebih lanjut</label>
                                    @elseif($simpanan->status == 'Menunggu')
                                      <label class="btn btn-warning">Menunggu Keputusan</label>
                                    @endif
                                </div>
                             </div>
                           @endif
                           @endforeach
                        </div>
                        <div class="tab-pane fade" id="tab2default">
                          @foreach($penyimpananAktif as $simpanan)
                          <a href="/detail-barang-gadai-aktif/{{$simpanan->id}}">
                          <div class="cart_items" id="tab1default">
                              <div class="cart_img">
                                  <img  width="70" height="70" alt="image" src="{{ asset('images/'.$simpanan->foto_file_barang) }}" class="img img-rounded">
                              </div>
                              
                              <div class="cart_info">
                                  <p><h4>{{$simpanan->jenis->kategori->nama_kategori_barang}}</h4> {{$simpanan->jenis->nama_jenis_kategori_barang}}</p>
                                  <p>Waktu/Tanggal Masuk : {{$simpanan->created_at}}</p>
                                  @if($simpanan->status == 'Terima')
                                    <label class="btn btn-info">Barang anda sudah digadaikan, CEK DETAIL</label>
                                  @endif
                              </div>
                              
                           </div>
                         </a>
                           @endforeach
                        </div>
                        <div class="tab-pane fade" id="tab3default">
                          @foreach($penyimpananAktif as $simpanan)
                          <a href="/detail-barang-gadai-aktif/{{$simpanan->id}}">
                          <div class="cart_items" id="tab1default">
                              <div class="cart_img">
                                  <img  width="70" height="70" alt="image" src="{{ asset('images/'.$simpanan->foto_file_barang) }}" class="img img-rounded">
                              </div>
                              
                              <div class="cart_info">
                                  <p><h4>{{$simpanan->jenis->kategori->nama_kategori_barang}}</h4> {{$simpanan->jenis->nama_jenis_kategori_barang}}</p>
                                  <p>Waktu/Tanggal Masuk : {{$simpanan->created_at}}</p>
                                  @if($simpanan->status == 'Terima')
                                    <label class="btn btn-info">Barang anda sudah digadaikan, CEK DETAIL</label>
                                  @endif
                              </div>
                              
                           </div>
                         </a>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>

                    <!-- <div class="shop_banner">
                        <h3><b style="color: green;">Riwayat</b></h3>
                        <div class="nav">
                                         <div class="nav-tabs-wrapper">
                  <ul class="nav nav-tabs" id="tabs-title-region-nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" role="tab" href="#block-simple-text-1" aria-selected="false" aria-controls="block-simple-text-1" id="block-simple-text-1-tab">Gadai</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" role="tab" href="#block-simple-text-2" aria-selected="false" aria-controls="block-simple-text-2" id="block-simple-text-2-tab">Barang Lelang</a>
                    </li>
                  </ul>

                <div class="cards" style="width: 100%; height: 100%;">
                  <div class="card-bodyss" >

                    <div class="tab-content"> -->
                    	<!-- <div  class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel">
                        <p>Cara kerja Tagihan </p>
                      </div>
 -->
                      <!-- <div id="block-simple-text-1" class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="block-simple-text-1-tab" >
                       
                       <div class="gadai">
                			<div class="cart_img">
                    			<img src="{{url('assets/img/s-product/buy.png')}}" alt="" >
                			</div>
                			<div class="cart_info"  >
                    			<p>Belum Ada Transaksi</p>
                			</div>


                		</div>
            			
                      </div> -->

                      <!-- <div id="block-simple-text-1" class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text" role="tabpanel" aria-labelledby="block-simple-text-2-tab">
                        
                      	<div class="cart_items">
    			                <div class="cart_img">
    			                    <img src="{{url('assets/img/s-product/pay.png')}}" alt="">
    			                </div>
                          
    			                <div class="cart_info">
    			                    <p>Pembayaran Handphone anda telah berhasil...</p>
    			                    <p>26 April 2020</p>
    			                </div>
                          
			                 </div> -->
			            <!-- <div class="cart_item">
			                <div class="cart_img">
			                    <img src="{{url('assets/img/s-product/buy.png')}}" alt="">
			                </div>
			                <div class="cart_info">
			                    <p>Pembelian laptop anda telah berhasil...</p>
			                    <p>31 Juni 2020</p>
			                </div>
			            </div> -->
				        <!-- </div>


                      <div id="block-simple-text-2" class="tab-pane" role="tabpanel" aria-labelledby="block-simple-text-2-tab">

                      	<div class="cart_items">
			                <div class="cart_img">
			                    <img src="{{url('assets/img/s-product/pay.png')}}" alt="">
			                </div>
			                <div class="cart_info">
			                    <p>Pembayaran Handphone anda telah berhasil...</p>
			                    <p>26 April 2020</p>
			                </div>
			            </div>
			            <div class="cart_item">
			                <div class="cart_img">
			                    <img src="{{url('assets/img/s-product/buy.png')}}" alt="">
			                </div>
			                <div class="cart_info">
			                    <p>Pembelian laptop anda telah berhasil...</p>
			                    <p>31 Juni 2020</p>
			                </div>
			            </div>
				        </div>
				    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

            
            </div>



        </div>
    </div>
    </div>



        </div>
    </div><br>

@endsection