@extends('index')

@section('title')
    Dashboard
@endsection

@section('extra-style')

@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="/user/resetpassword/{{$user->id}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group">
                <label for="exampleInputPassword1">New Password</label>
                <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">New Confirmation Password</label>
                <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection


@section('extra-script')

@endsection

