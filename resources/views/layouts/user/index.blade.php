@extends('index')

@section('title')
    Dashboard
@endsection

@section('extra-style')

@endsection

@section('content')
<div class="container-fluid">

    @if(session('sukses'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <i class="fa fa-info-circle"></i> {{session('sukses')}}
      </div>
    @endif


    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">Detail User</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-download"></i></span>
                        <p>
                            <span class="number">{{$totalUser->count()}}</span>
                            <span class="title">Total User</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                        <p>
                            <span class="number">{{$totalKaryawan->count()}}</span>
                            <span class="title">Karyawan</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-eye"></i></span>
                        <p>
                            <span class="number">{{$totalNasabah->count()}}</span>
                            <span class="title">Nasabah</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                        <p>
                            <span class="number">{{$totalKurir->count()}}</span>
                            <span class="title">Kurir</span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Data User</b></h3>
                    <div class="right">
                        <a href="/user/add">Tambah Anggota</a>
                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>

                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped" id="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $users)
                            <tr>
                                <td><a href="#">{{$loop->iteration}}</a></td>
                                <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                <td>{{$users->role}}</td>
                                <td>
                                    @if($users->status == 'aktif')
                                        <span class="label label-success">{{$users->status}}</span>
                                    @else
                                        <span class="label label-danger">{{$users->status}}</span>
                                    @endif    
                                </td>    
                                <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a href="/user/edit/{{$users->id}}">Edit</a></li>
                                        <li>
                                            @if($users->status == 'aktif')
                                            <a href="/user/statusNonAktif/{{$users->id}}">Non Aktif</a>
                                            @else
                                            <a href="/user/statusAktif/{{$users->id}}">Aktifkan</a>
                                            @endif
                                        </li>
                                        <li><a href="/user/reset/{{$users->id}}">Reset Password</a></li>
                                        <li><a href="/profile/show/{{auth()->user()->profile->id}}">Detail Profil</a></li>
                                      </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END RECENT PURCHASES -->
        </div>
    </div>
</div>


<!-- Modal Create-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center>
          <b><h3 class="modal-title" id="exampleModalLabel">Tambah User</h3></b>
        </center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/user/create" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Masukkan email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Masukkan Password">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Role</label>
            <select class="form-control" name="role" id="exampleFormControlSelect1">
              <option value="Admin">Admin</option>
              <option value="Karyawan">Karyawan</option>
              <option value="Kurir">Kurir</option>
              <option value="Nasabah">Nasabah</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection


@section('extra-script')

@endsection

