<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIPR | Reset</title>
  <link rel="shortcut icon" type="image/png" href="{{url('images/favicon.jpg')}}"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{url('login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
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
        <form action="/reset/konfirmasi" class="login100-form validate-form flex-sb flex-w">
 
          <span class="login100-form-title p-b-51" style="margin-top: -20px; font-size: 20px">
            Reset Password
          </span>

           <div class="container-login100-form-btn m-t-17" align="center" style="padding: 0 0 20px 0">
            <p style="">Masukkan email Anda untuk mengirim konfirmasi reset password</p>
          </div>
          <div class="wrap-input100 m-b-16" style="margin: 0px">
            <input class="input100" type="email" name="email" placeholder="Email" required>
            <!-- <span class="focus-input100"></span> -->
          </div>

          <div class="container-login100-form-btn m-t-17">
            <button class="login100-form-btn" style="background-color: #10ac84">
              Kirim Konfirmasi
            </button>
          </div>
          <div class="container-login100-form-btn m-t-17">
            <a href="{{action('LoginController@viewLogin')}}" class="login100-form-btn" style="background-color: #1e90ff">
              <span style="color: white">Batal</span>
            </a>
          </div>
         
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <!-- <script src="{{url('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script> -->
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
  <!-- <script src="{{url('login/js/main.js')}}"></script> -->

</body>
</html>