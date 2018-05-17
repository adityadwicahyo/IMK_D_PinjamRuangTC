<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIPR | Registrasi</title>
  <link rel="shortcut icon" type="image/png" href="{{url('images/favicon.jpg')}}"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <form action="/logins" id="identicalForm" class="login100-form validate-form flex-sb flex-w">

          <span class="login100-form-title p-b-51">
            registrasi
          </span>

          <div class="wrap-input100 validate-input m-b-16">
            <input class="input100" type="text" name="username" placeholder="Nama" required>
            <span class="focus-input100"></span>
          </div>
          
          <div class="wrap-input100 m-b-16" data-validate = "Email is required">
            <input class="input100" type="email" name="username" placeholder="Email" required>
            <span class="focus-input100"></span>
          </div>
          
          <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password" id="password" required>
          </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
            <input class="input100" type="password" id="confirm_password" name="pass" placeholder="Konfirmasi Password" required>
          </div>

          <div class="container-login100-form-btn m-t-17">
            <button class="login100-form-btn" style="background-color: #10ac84">
              Registrasi
            </button>
          </div>
          <div class="container-login100-form-btn m-t-17" align="center" style="margin-left: 80px">
            <p>Sudah memilliki akun? Silahkan <a href="/logins" style="color: #2e86de; font-weight: bold">Login</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>

  <script>
    var password = document.getElementById("password") , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
  </script>


  <!--===============================================================================================-->
  <!-- {{-- <script src="{{url('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script> --}} -->
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