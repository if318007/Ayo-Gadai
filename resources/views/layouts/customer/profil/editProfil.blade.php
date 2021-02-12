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
                            <div class="card"  style="box-shadow: 1px 1px 3px 3px #F3EAEA;"">
                                     <br>
                         <br>
                         <form action="/update-profile/{{$profil->id}}" method="post">
                          {{csrf_field()}}
                         <div class="form-group row">
                          <div class="col-sm-1"></div>
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Nama</label>
                            <label for="colFormLabelLg"  class="col-sm-1 col-form-label col-form-label-lg">
                                :
                            </label>
                            <div class="col-sm-6">
                              <input type="text" value="{{$profil->nama}}" class="form-control form-control-lg" id="colFormLabelLg" name="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-1"></div>
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Alamat</label>
                            <label for="colFormLabelLg"  class="col-sm-1 col-form-label col-form-label-lg">
                                :
                            </label>
                            <div class="col-sm-6">
                              <input type="text" value="{{$profil->alamat}}" class="form-control form-control-lg" id="colFormLabelLg" name="alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-1"></div>
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">No. HP</label>
                            <label for="colFormLabelLg"  class="col-sm-1 col-form-label col-form-label-lg">
                                :
                            </label>
                            <div class="col-sm-6">
                              <input type="text" value="{{$profil->nomor_hp}}" class="form-control form-control-lg" id="colFormLabelLg" name="nomor_hp">
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-1"></div>
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">No. SIM/KTP</label>
                            <label for="colFormLabelLg"  class="col-sm-1 col-form-label col-form-label-lg">
                                :
                            </label>
                            <div class="col-sm-6">
                              <input type="text" value="{{$profil->nomor_identitas}}" class="form-control form-control-lg" id="colFormLabelLg" name="nomor_identitas">
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-1"></div>
                            <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Domisili</label>
                            <label for="colFormLabelLg"  class="col-sm-1 col-form-label col-form-label-lg">
                                :
                            </label>
                            <div class="col-sm-6">
                              <input type="text" value="{{$profil->domisili}}" class="form-control form-control-lg" id="colFormLabelLg" name="domisili">
                            </div>
                        </div>
                     <br>
                     <div class="panel-footer">
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-4"></div>
                            <div class="col-xs-6 col-sm-6 col-md-8">
                              <button class="btn icon-btn-save btn-success" type="submit">
                              <span class="btn-save-label"><i class="glyphicon glyphicon-floppy-disk"></i></span>Simpan</button>
                            </form>
                           </div>
                        </div> 
                    </div>

                      
                           </div>

                      
                 </div>
               </div>
        </div>
  </div>


@endsection