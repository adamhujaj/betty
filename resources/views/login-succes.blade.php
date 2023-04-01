<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Success</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="left">
        <a class="Login">Login Successful</a>
                <div class="bg-garis"><!--ini Untuk Ngasih garis--></div>
                <a class="yourlogin">Your login process to the Betty Cashier application has been <br>successful. You will be redirected to the home page in ( 05 s )</a>
                <br>
        <lottie-player src="{{ asset('assets/TickSuccess.json') }}" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop  autoplay></lottie-player>

        
        <form>        
          </form>
          
          <br>
          
          <div class="label-sizei">
           
          </div>
      </div>
      <div class="right">
        <h2 class="jumbotron-huruf">Betty has become a restaurant point of sale application <br> that is very easy to use, by anyone</h2>
        <div class="garis-biru"></div>            
        <p class="jumbotron-huruf1">Kaesang Pangarep, CEO of Sang Pisang</p>
          <img class="aer" src="{{ asset('assets/img/back.png') }}"  >
          <img class="aor" src="{{ asset('assets/img/back1.png') }}"  >
          </div>
      </div>
    </div>
  </body>

  <script>
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

  const imgPassword = document.getElementById('img-password');
  const passwordInput = document.getElementById('password');
  imgPassword.addEventListener('click', function() {
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      imgPassword.src = "{{ asset('assets/img/9.png') }}";
    } else {
      passwordInput.type = 'password';
      imgPassword.src = "{{ asset('assets/img/8.png') }}";
    }
  });
</script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
