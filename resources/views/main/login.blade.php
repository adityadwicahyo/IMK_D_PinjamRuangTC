<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V10</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="{{url('login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{url('login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{url('login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('login/css/util.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-50 p-b-90">
        <form action="/" class="login100-form validate-form flex-sb flex-w" method="POST">
          <span class="login100-form-title p-b-51">
            Selamat Datang
          </span>
          <span class="login100-form-title p-b-51" style="margin-top: -20px; font-size: 20px">
            Sistem Informasi Peminjaman Ruangan
          </span>

          
          <div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
            <input class="input100" type="email" name="username" placeholder="Email" required>
            <span class="focus-input100"></span>
          </div>
          
          
          <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
            <input class="input100" type="password" name="pass" placeholder="Password" required>
            <span class="focus-input100"></span>
          </div>
          {{csrf_field()}}
          <div class="flex-sb-m w-full p-t-3 p-b-24">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>

            <div>
              <a href="{{action('LoginController@viewReset')}}" class="txt1">
                Forgot?
              </a>
            </div>
          </div>

          <div class="container-login100-form-btn m-t-17">
            <button class="login100-form-btn" style="background-color: #10ac84">
              Login
            </button>
          </div>
          <div class="container-login100-form-btn m-t-17" align="center" style="margin-left: 40px">
            <p>Silahkan <a href="/registrasi" style="color: #2e86de; font-weight: bold">Registrasi</a> apabila belum memiliki akun.</p>
          </div>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  {{-- <script src="{{url('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script> --}}
<!--===============================================================================================-->
  <script src="{{url('login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{url('login/vendor/bootstrap/js/popper.js')}}"></script>
  <script src="{{url('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{url('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{url('login/vendor/daterangepicker/moment.min.js')}}"></script>
  <script src="{{url('login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{url('login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{url('login/js/main.js')}}"></script>

</body>
</html>