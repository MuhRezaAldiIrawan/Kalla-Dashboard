<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
      <link href="{{ asset('css/login.css') }}" rel="stylesheet">
   
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <img src="img/Logo-Kalla-Toyota.png" alt="">
        <div class="signin-signup">
          <form action="/page-login" method="POST" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="nama" id="nama" class="form-control" placeholder="Username" autofocus>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" value="password" name="password" id="password" class="form-control" placeholder="Password" >
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="{!! url('/page-register'); !!}" method="POST" enctype="multipart/form-data" class="sign-up-form">
            @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="nama" id="nama" class="form-control" placeholder="username" autofocus>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" class="form-control" placeholder="hello@example.com">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" name="hp" id="hp" class="form-control" placeholder="+62">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" class="form-control" placeholder="Min3">
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <img src="images/651-removebg-preview.png" class=image alt="">
            <h3>New here ?</h3>
            <p>
              Silahkan daftar jika anda belum mempunyai akun!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah Punya Akun ?</h3>
            <p>
              Jika telah Sign Up, Silahkan Sing In untuk masuk
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/kallamobil-removebg-preview.png" class="image" alt="" />
        </div>
      </div>
    </div>
    {{-- <script href="{{ asset('css/login.css') }}" rel="stylesheet"> --}}
      
    <script src="js/login.js"></script>
  </body>
</html>
