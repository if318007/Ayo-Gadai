@extends('layouts/customer/index')

@section('title')
    Dashboard
@endsection


@section('content')


<br>
   

  <div class="profil-body" style="background-color: #fff">
        <div class="container">
               <div class="col-lg-3 col-md-12">
                <div class="card3" style="box-shadow: 1px 1px 3px 3px #F3EAEA;">
                  <div class="card-body3">
                     <div class="dashboard_tab_button" >
                                <ul role="tablist" class="nav flex-column dashboard-list" ">
                                    <li><a href="/edit-profil/{{auth()->user()->id}}" class="nav-link" style="margin-top:60px;">Edit Profil</a></li>
                                    <li> <a href="/edit-profil-user/{{auth()->user()->id}}" class="nav-link" style="margin-top:40px;">Ganti Password</a></li>
                                </ul>
                                <br>
                                <br>
                                <br>
                      </div>
                  </div>
                </div>
               </div>
                <div class="col-lg-9 col-md-12">
                    <div class="card" style="box-shadow: 1px 1px 3px 3px #F3EAEA;"">
                        <div class="card-body">
                            <div class="body-left">
                                <img src="{{ asset('images/'.$data->foto_profile) }}" class="rounded-circle" alt="Cinque Terre" width="50" height="50" sizes="30%">
                                 <div class="clearfix"></div>
                            </div>
                            <div class="desc">
                                <p class="nama1"><strong>{{$profile->name}}</strong></p>
                                <p class="nama2"><strong>{{$data->alamat}}</strong></p>
                            </div>
                           <div class="clearfix"></div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg" style="text-align:center; ">Email</label>
                            <label for="colFormLabelLg"  class="col-sm-1 col-form-label col-form-label-lg">
                                :
                            </label>
                            <label for="colFormLabelLg" class="col-sm-8 col-form-label col-form-label-lg" ">{{$profile->email}}</label>
                        </div>
                         <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg" style="text-align:center; ">No. HP</label>
                            <label for="colFormLabelLg"  class="col-sm-1 col-form-label col-form-label-lg">
                                :
                            </label>
                            <label for="colFormLabelLg" class="col-sm-8 col-form-label col-form-label-lg" ">{{$data->nomor_hp}}</label>
                        </div>
                         <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg" style="text-align:center; ">No. SIM/KTP</label>
                            <label for="colFormLabelLg"  class="col-sm-1 col-form-label col-form-label-lg">
                                :
                            </label>
                            <label for="colFormLabelLg" class="col-sm-8 col-form-label col-form-label-lg" ">{{$data->nomor_identitas}}</label>
                        </div>
                          <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg" style="text-align:center; ">Domisili</label>
                            <label for="colFormLabelLg"  class="col-sm-1 col-form-label col-form-label-lg">
                                :
                            </label>
                            <label for="colFormLabelLg" class="col-sm-8 col-form-label col-form-label-lg" ">{{$data->domisili}}</label>
                        </div>
                        <br>
                        <br>
                      </div>

                      
                 </div>
               </div>
        </div>
  </div>


@endsection