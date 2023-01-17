<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!-- minified CSS with RTL enabled -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous"> -->
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.css" />
    <link rel="stylesheet" href="style.css" />
    <title>BookZone</title>
  </head>
  <body>

    <nav class="navbar  navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" alt="logo" width="80" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">خانه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">راجستر</a>
            </li>
           
          </ul>
          
        </div>
      </div>
  </nav>

    <section class="main-section">

        <div class="inner-section">
            <h2>فورم ورود به سیستم</h2>
      <p class="loginpara">
        اگر قبلاً راجستر نموده اید با وارد نمودن ایمیل و رمز تان میتوانید وارد سیستم شوید.
      </p>
      <button class="register-btn">
        <img class="google-icon" src="images/icons8-google-48.png" alt="">
        ورود با حساب گوگل        
      </button>
      <hr>
      <form class="mform" action="">
            <label for="mail">ایمیل آدرس تانرا وارد کنید:</label>
            <input class="form-input" type="email"  placeholder="ahmad@gmail.com" dir="ltr" id="mail" required>
            <label for="pass"> رمز تان را وارد کنید: </label>
            <input class="form-input" type="password" placeholder="letters A-z, numbers 0-9, symbols $#&*" dir="ltr" id="pass" required>
          
            
            <div>
                <button class="reg">ورود به سیستم</button>
                <button class="reg">لغو</button>
            </div>
           
      </form>
    </div>
      

    <div class="footer">
        <div class="footer-content">
          <div class="footer-details">
            <i class="fa-solid fa-circle-info"></i>
            <h5>دربارهٔ ما</h5>
          </div>
          <div class="con">
              <div class="footer-details">
              <i class="fa-solid fa-address-card"></i>
              <h5>ارتباط با ما</h5>
              </div>
              <div class="m-icons">
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-whatsapp"></i>
                <i class="fa-brands fa-github"></i>
              </div>
              <p class="pfooter">Copyright 2023&#169;</p>
          </div>
          <div class="footer-details">
            <i class="fa-solid fa-circle-question"></i>
            <h5>سوالات متداول</h5>
          </div>
        </div>
    </div>
    </section>
    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
