<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<!-- container-fluid start -->
  <div class="container-fluid">
    <div class="left">
      <a class="welcome" style="margin-top: 25px !important; margin-left: -80px!important;"">Welcome Back,<span class="igna">igna</span> </a>
      <a class="please" style="margin-left:-40px!important;">Please enter the details to start manage your restaurant</a>
      <br>
      <!-- group button google-->
      <div class="label-sizei">
        <button type="submit" class="buttonGoogle">
          <img src="{{ asset('assets/img/google.png') }}" style="margin-right: 10px!important" alt="">
          <span></span><span class="googlefont">Sign Up with Google</span>
          <img style="margin-left: 10px!important;" src="{{ asset('assets/img/arrow-right.png') }}" alt="">
        </button>
      </div>
      <!-- garis pembatas-->
      <div class="iborder-wrapper" style="margin-top: 10px !important;">
        <div class="iborder"></div>
        <div class="itext">or</div>
        <div class="iborder"></div>
      </div>
      <!-- end gairs pembatas-->
      <!-- start form -->
      <form>         
        <div class="form-group" style="margin-top: 20px !important;">
          <input class="input-field" id="Useremail" type="email" placeholder="adamhujaj@gmail.com " name="email" oninput="checkForm()">
        </div>
        <div class="form-group" style="margin-top: 10px !important;">
          <input class="input-fields" id="password" type="password" style="outline: none;"  autocomplete="new-password" placeholder="password" name="password" oninput="checkForm()">
          <img src="{{ asset('assets/img/8.png') }}" id="img-password">
        </div>
      </form>
      <!-- end form -->
      <!-- ceklis -->
      <a style="margin-top: 155px!important;  margin-right: 7px!important;">
        <div class="form-check" style="margin-top: 10px !important; font-size: 12px; font-family: 'Satoshi'; ">
          <input type="checkbox" class="form-check-input" id="termsCheckbox" style="margin-left: 20px!important;" oninput="checkForm()">
          <label class="form-check-label " for="termsCheckbox" style="font-family: 'Satoshi'; font-size: 12px; margin-left: 35px!important;">
            By continuing, you agree with our <span class="term-condition">Terms & conditions <br> and Privacy Policy</span>
          </label>
        </div>
      </a>
      <!-- end ceklis -->
      <br>
      <!-- button register -->
      <div class="label-sizei">
        <button type="submit" id="register-btn" class="tombol-registered" disabled>
          <img src="{{ asset('assets/img/login.png') }}" alt=""> <a class="">Register</a>
        </button>
      <!-- end button register -->
        <br>
      <!--span s-tengah -->
          <a class="a-tengah">Already have an account? <span class="login-here" >Login here</span></a>
      </div>
      </div>
      <!-- start right -->
      <div class="right">
         <h2 class="jumbotron-huruf">Betty has become a restaurant point of sale application <br> that is very easy to use, by anyone</h2>
       <div class="garis-biru"></div>
        <p class="jumbotron-huruf1">Kaesang Pangarep, CEO of Sang Pisang</p>
          <img class="aer" src="{{ asset('assets/img/back.png') }}"  >
          <img class="aor" src="{{ asset('assets/img/back1.png') }}"  >
      </div>
      </div>
      <!-- end container-->
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script>
function checkForm() 
{  /*script untuk merubah apabila semua form terisi makan button akan berubah warna*/
      var emailInput = document.getElementById("Useremail");
      var passwordInput = document.getElementById("password");
      var termsCheckbox = document.getElementById("termsCheckbox");
      var registerBtn = document.getElementById("register-btn");
    if (emailInput.value != "" && passwordInput.value != "" && termsCheckbox.checked) {
      registerBtn.disabled = false;
      registerBtn.classList.add("active");
    } else {
    registerBtn.disabled = true;
    registerBtn.classList.remove("active");
      }
}
    /*script untuk merubah icon password apabila icon di klik*/
    const imgPassword = document.getElementById('img-password');
    const passwordInput = document.getElementById('password');
    imgPassword.addEventListener('click', function() {
    if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    imgPassword.src = "{{ asset('assets/img/8.png') }}";
    } else {
    passwordInput.type = 'password';
    imgPassword.src = "{{ asset('assets/img/9.png') }}";
    }
});
  </script>
</html>
