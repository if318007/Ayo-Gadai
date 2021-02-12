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
                                    <li><a href="/edit-profil-user/{{auth()->user()->id}}" class="nav-link" style="margin-top:60px;">Edit Profil</a></li>
                                    <li> <a href="GantiPassword.html" class="nav-link" style="margin-top:40px;">Ganti Password</a></li>
                                </ul>
                                <br>
                                <br>
                                <br>
                      </div>
                  </div>
                </div>
               </div>
                <div class="col-lg-9 col-md-12">
                    <div class="card"  style="box-shadow: 1px 1px 3px 3px #F3EAEA;">
                         <br>

                         @if(session('sukses'))
                         <div class="alert alert-success alert-dismissible" style="margin-right: 10px;margin-left: 10px;" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <i class="fa fa-info-circle"></i> {{session('sukses')}}
                          </div>
                          @endif

                          @if(session('gagal'))
                         <div class="alert alert-danger alert-dismissible" style="margin-right: 10px;margin-left: 10px;" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <i class="fa fa-info-circle"></i> {{session('gagal')}}
                          </div>
                          @endif

                         <form action="/update/password/{{$nasabah->id}}" method="post">
                          {{csrf_field()}}
                        <div class="form-group row">
                          <div class="col-sm-1"></div>
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Password Baru</label>
                            <label for="colFormLabelLg"  class="col-sm-1 col-form-label col-form-label-lg">
                                :
                            </label>
                            <div class="col-sm-6">
                              <input type="password" class="form-control form-control-lg" name="password" id="colFormLabelLg" >
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-1"></div>
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Konfirmasi Password Baru</label>
                            <label for="colFormLabelLg"  class="col-sm-1 col-form-label col-form-label-lg">
                                :
                            </label>
                            <div class="col-sm-6">
                              <input type="password" class="form-control form-control-lg" name="rePassword" id="colFormLabelLg" >
                            </div>
                        </div>

                     <br>
                     <div class="panel-footer">
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-4"></div>
                            <div class="col-xs-6 col-sm-6 col-md-8">
                              <button class="btn icon-btn-save btn-success" type="submit">
                              <span class="btn-save-label"><i class="glyphicon glyphicon-floppy-disk"></i></span>&nbsp;Simpan</button>
                              </form>
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