
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
    box-sizing: border-box;
}

body {
    background: #FBF6F6;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: 'Montserrat', sans-serif;
    height: 100vh;
    margin: -20px 0 50px;
}

h1 {
    font-weight: bold;
    margin: 0;
}

h2 {
    text-align: center;
    font-family: Arial;
    color: #FFFFFF;
}

p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
}

span {
    font-size: 12px;
}

a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}

button {
    border-radius: 20px;
    border: 1px solid white;
    background-color: #0ECB7B;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 10px 25px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

button:active {
    transform: scale(0.95);
}

button:focus {
    outline: none;
}

form {
    background-color: #0ECB7B;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    text-align: center;
}

input {
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
}

.container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
            0 10px 10px rgba(0,0,0,0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
}

.form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
}

.container.right-panel-active .sign-in-container {
    transform: translateX(100%);
}

.sign-up-container {
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
}

.container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
    animation: show 0.6s;
}

@keyframes show {
    0%, 49.99% {
        opacity: 0;
        z-index: 1;
    }
    
    50%, 100% {
        opacity: 1;
        z-index: 5;
    }
}

.overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
}

.container.right-panel-active .overlay-container{
    transform: translateX(-100%);
}

.overlay {

    background-repeat: no-repeat;
    background-size: cover;
    background-position: 0 0;
    color: #FFFFFF;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
    transform: translateX(50%);
}

.overlay-panel {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    top: 0;
    height: 100%;
    width: 50%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.overlay-left {
    transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
    transform: translateX(0);
}

.overlay-right {
    right: 0;
    transform: translateX(0);
}

.container.right-panel-active .overlay-right {
    transform: translateX(20%);
}

.social-container {
    margin: 20px 0;
    margin-top: -20px;
}

.social-container a {
    border: 1px solid #DDDDDD;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}

.nama{
    width: 220px;
     height: 30px;
     border:  1px solid #f4eeff;
     margin: 10px;
     border-radius: 8px;
     background-color: #0ECB7B;
     opacity: 0.5;
     margin-top: -5px; 
}
.login{
    width: 220px;
     height: 30px;
     border:  1px solid #f4eeff;
     margin: 10px;
     border-radius: 8px;
     background-color: #0ECB7B;
     opacity: 0.5;
      
}
.ingat{
    margin-right: 198px;
   
    color: white;
}
.ingat1{
    margin-top: -23px;
    margin-right: 115px;
    color: white;
    font-family: Calibri;
}
.forgot{
    margin-left: 115px;
   margin-top: -48px;
    color: white;
    font-family: Calibri;
}
.reg{
    color: white;
}
.reglog{
    color:#2150BC ;
    border: 0cm;   
}
hr{
   
    height: 5px;
    width: 110px;
    color: white;
    background-color: white;
    
}
.ket{
    margin-top: -15px;
    color: #0DCA78;
}
.ket1{
    margin-bottom: 40px;
    color: #0DCA78;
}
.logo{
    width: 130%;
    
    margin-left: 30px;

}
.logo1{
    width: 130%;
    margin-bottom: 20px;
}
.welcome{
color: #0DCA78;
margin-bottom: -20px;
}
.daf{
    margin-top: 20px;
}
.daf1{
    color: #0DCA78;
    margin-top: -80px;
}
.datang{
    margin-right: 90px;
}
</style>

<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="#">
            <h2>Daftarkan Akun</h2>
            <div class="social-container" >
            </div>
            <form action="/register/store" method="post">
                <input type="text" placeholder="Nama" class="nama" name="nama"/>
                <input type="email" placeholder="Email" class="nama" name="email"/> 
                <input type="password" placeholder="Password" class="nama" name="password"/>
                <input type="password" placeholder="Konfirmasi Password" class="nama" name="passwordUlang"/>
            <button class="btn btn-info">Daftar</button>
            </form>
            <p class="reg">Sudah punya akun? Kembali ke <button class="reglog" id="signIn">Login</button> </p>
        </form>
    </div>
    <div class="form-container sign-in-container">

        @if(session('sukses'))
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <i class="fa fa-info-circle"></i> {{session('sukses')}}
          </div>
        @endif
        <form action="/postlogin" method="post">
            {{csrf_field()}}
            <h2>Masuk ke Akun Anda</h2>
            <div class="social-container" >
            </div>
            <input type="email" placeholder="Email Anda" class="login" name="email"/>
            <input type="password" placeholder="Password" class="login" name="password"/>
           <input type='checkbox' name='ingat' value='Ingat saya' class="ingat"/>
            <p class="ingat1">Ingat saya</p>
            <a href="#" class="forgot">Lupa Password?</a>
            <button type="submit">Masuk</button>
        <p class="reg">Belum punya akun? Silahkan 
            <a class="reglog" href="/register">Register</a> 
        </p>
            
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <img src="{{url('assets/img/logo/logo_original.png')}}" class="logo1">
                <div class="daf" >
                    <h2 class="daf1">Daftarkan Akun Anda!</h2>
                    <p class="ket">Kami akan membantu anda dengan setulus hati</p>
                </div>
            </div>
            
            <div class="overlay-panel overlay-right">
                <h2 class="welcome">Selamat Datang di Ayo Gadai</h2>
                <p class="ket1">Kami akan membantu anda dengan setulus hati</p>
                <div class="datang"><img src="{{url('assets/img/logo/logo_original.png')}}" class="logo"></div>
            </div>
        </div>
    </div>
</div>





<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
