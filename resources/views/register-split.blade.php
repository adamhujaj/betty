<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Setting</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <div class="container-fluid">
      <div class="left">
        <img src="assets/img/arrow-left.png" style="position:absolute; width: 24px; height: 24px; margin-left: -340px!important; margin-bottom: 520px !important;" alt="Icon" href="">
        <a class="welcome" style="margin-top: 25px !important; font-size:24px; margin-left:16px !important;">Setting Up your Restaurant </a>
        <a class="please" style="margin-left:30px; font-size:12px;">Please enter the details to start manage your restaurant</a>
        <br>
        <form>         
          <div class="form-group" style="margin-top: 15px !important;">      
            <input class="input-field" id="document" type="name" placeholder="restaurant name " name="document" oninput="checkForm()">
          </div>
          <div class="form-group" style="margin-top: 10px !important;">
            <textarea class="input-fieldloc" id="location" placeholder="Place your Restaurant address here" name="location" oninput="checkForm()" rows="4" cols="50"></textarea>
          </div>
        </form>
          <a style="margin-top: 105px!important;  margin-right: 6px!important;">
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
    /*script untuk merubah apabila semua form terisi makan button akan berubah warna*/
    function checkForm() {
      var documentInput = document.getElementById("document");
      var locationInput = document.getElementById("location");
      var termsCheckbox = document.getElementById("termsCheckbox");
      var registerBtn = document.getElementById("register-btn");
  
      if (documentInput.value != "" && locationInput.value != "" && termsCheckbox.checked) {
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
        imgPassword.src = 'assets/img/9.png';
      } else {
        passwordInput.type = 'password';
        imgPassword.src = 'assets/img/8.png';
      }
    });
  </script>  
</html>
