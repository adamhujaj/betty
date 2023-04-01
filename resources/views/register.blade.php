<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="icon" type="image/png" src="assets/img/arrow-right.png" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>

    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="left">
        <a class="welcome" style="margin-top: 25px !important; margin-left: -20px!important;">Welcome to Betty Admins</a>
        <a class="please" style="margin-left:-47px!important">Please enter the details to start manage your restaurant</a>
        <br>
        <div class="label-sizei">
          <button type="submit" class="buttonGoogle" style="font-size: 16px!important;"><img src="assets/img/google.png" style="margin-right: 10px!important" alt=""><span></span><span class="googlefont">Sign Up whith Google</span> <img style="margin-left: 10px!important;" src="assets/img/arrow-right.png" alt=""></button>

      </div>
        <div class="iborder-wrapper" style="margin-top: 10px !important;">
            <div class="iborder"></div>
            <div class="itext">or</div>
            <div class="iborder"></div>
          </div>
        <form>         
          <div class="form-group" style="margin-top: 20px !important;">
                  
            <input class="input-field" id="Username" type="name" placeholder="Adam hujaj " name="Username" oninput="checkForm()">
          </div>
        
          <div class="form-group" style="margin-top: 10px !important;">
          
            <input class="input-fieldtelp" id="telp" type="telp" placeholder="087773385468" name="telp" oninput="checkForm()">
          </div>
          
          <div class="form-group" style="margin-top: 10px !important;">
            <input class="input-fieldsmail" id="email" type="email" placeholder="adamhujaj@gmail.com" name="email" oninput="checkForm()">
          </div>
          
          <div class="form-group" style="margin-top: 10px !important;">

            <input class="input-fields" id="password" type="password" style="outline: none;"  autocomplete="new-password" placeholder="password" name="password" oninput="checkForm()">
            <img src="assets/img/8.png" id="img-password">
          </div>

          </form>
          <a style="margin-top: 40px !important; margin-right: 6px!important;">
            <div class="form-check" style="margin-top: 10px !important; font-size: 12px; font-family: 'Satoshi'; ">
              <input type="checkbox" class="form-check-input" id="termsCheckbox" style="margin-left: 20px!important;" oninput="checkForm()">
              <label class="form-check-label " for="termsCheckbox" style="font-family: 'Satoshi'; font-size: 12px; margin-left: 35px!important;">
                By continuing, you agree with our <span class="term-condition">Terms & conditions <br> and Privacy Policy</span>
              </label>
            </div>
          </a>
          <br>
          
          <div class="label-sizei">
            <button type="submit" id="register-btn" class="tombol-registered" disabled>
              <img src="assets/img/login.png" alt=""> <a class="">Register</a>
            </button>
            <br>
            <a class="a-tengah">Already have an account? <span class="login-here" >Login here</span></a>
          </div>
      </div>
      <div class="right">
        <h2 class="jumbotron-huruf">Betty has become a restaurant point of sale application <br> that is very easy to use, by anyone</h2>
        <div class="garis-biru"></div>            
        <p class="jumbotron-huruf1">Kaesang Pangarep, CEO of Sang Pisang</p>
          <img class="aer" src="assets/img/back.png"  >
          <img class="aor" src="assets/img/back1.png"  >
          </div>
      </div>
    </div>
  </body>
  <script>
    function checkForm() {
      var nameInput = document.getElementById("Username");
      var emailInput = document.getElementById("email");
      var telpInput = document.getElementById("telp");
      var passwordInput = document.getElementById("password");
      var termsCheckbox = document.getElementById("termsCheckbox");
      var registerBtn = document.getElementById("register-btn");
  
      if (nameInput.value != "" && emailInput.value != "" && telpInput.value != "" && passwordInput.value != "" && termsCheckbox.checked) {
        registerBtn.disabled = false;
        registerBtn.classList.add("active");
      } else {
        registerBtn.disabled = true;
        registerBtn.classList.remove("active");
      }
    }
  
    const imgPassword = document.getElementById('img-password');
    const passwordInput = document.getElementById('password');
    imgPassword.addEventListener('click', function() {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        imgPassword.src = 'assets/img/9.png';
      } else {
        passwordInput.type = 'password';
        imgPassword.src = 'assets/img/8.png';
      }
    });
  </script>
  
</html>
