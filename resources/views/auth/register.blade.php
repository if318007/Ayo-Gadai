<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    body {
     background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;
    background-size: cover;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}


</style>
<div class="container">
            <form class="form-horizontal" role="form" action="/register/post" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <h2>Registrasi</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Masukkan nama anda" class="form-control" autofocus name="nama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="lastName" placeholder="Masukkan email anda" class="form-control" autofocus name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Jenis Kelamin </label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="jenis_kelamin">
                          <option selected="" disabled="">-- Jenis Kelamin --</option>
                          <option value="L">Laki - Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" name="password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Konfirmasi Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" name="rePassword" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Nomor Handphone </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" name="nomor_hp" id="phoneNumber" placeholder="Phone number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">Nomor Identitas </label>
                    <div class="col-sm-9">
                        <input type="text" id="height" placeholder="Masukkan nomor identitas, contoh : Nomor KTP anda" class="form-control" name="nomor_identitas">
                    </div>
                </div>
                <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Alamat </label>
                    <div class="col-sm-9">
                        <input type="text" id="weight" name="alamat" placeholder="Please write your weight in kilograms" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Domisili </label>
                    <div class="col-sm-9">
                        <input type="text" id="weight" name="domisili" placeholder="Please write your weight in kilograms" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Tempat Lahir </label>
                    <div class="col-sm-9">
                        <input type="text" id="weight" name="tempat_lahir" placeholder="Please write your weight in kilograms" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Foto Profil</label>
                    <div class="col-sm-9">
                        <input type="file" id="birthDate" name="foto_profile" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Foto Kartu Identitas</label>
                    <div class="col-sm-9">
                        <input type="file" id="birthDate" name="foto_kartu_identitas" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
                <p class="text-center">Jika sudah punya akun, silahkan login</p>
                <a href="/login" class="btn btn-warning btn-block">Login</a>
            </form> <!-- /form -->
        </div> <!-- ./container -->

        <script type="text/javascript">
            $(function(){
    $.validator.setDefaults({
        highlight: function(element){
            $(element)
            .closest('.form-group')
            .addClass('has-error')
        },
        unhighlight: function(element){
            $(element)
            .closest('.form-group')
            .removeClass('has-error')
        }
    });
    
    $.validate({
        rules:
        {   
            password: "required",
            birthDate: "required",
            weight: {
                required:true,
                number:true
            },
            height:  {
                required:true,
                number:true
            },
            email: {
                required: true,
                email: true
            }
        },
            messages:{          
                email: {
                required: true,
                email: true
            }
        },
                password: {
                    required: " Please enter password"
                },
                birthDate: {
                    required: " Please enter birthdate"
                },
                email: {
                    required: ' Please enter email',
                    email: ' Please enter valid email'
                },
                weight: {
                    required: " Please enter your weight",
                    number: " Only numbers allowed"
                },
                height: {
                    required: " Please enter your height",
                    number: " Only numbers allowed"
                },
            }
            
    });
});
        </script>