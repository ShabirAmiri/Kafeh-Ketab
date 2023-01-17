<?php 
require('./usersinfo.php');
require('./get-book.php');


 ?>



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

    <style>
      iframe{
        width: 100%;
        min-height: 100vh;
      }

      .inav{
        height: 200px;
        width: 100%;
        background:red;
      }
    </style>
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
              <a class="nav-link active" aria-current="page" href="#">خانه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form/index.php">راجستر</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form/index.php">ورود به سیستم</a>
            </li>
           
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2 srch" type="search" placeholder="جستجو" aria-label="Search">
            <select name="books" id="books" class="nav-item dropdown mydesign" dir="ltr">
              <option value="omomi"><a class="dropdown-item" href="#">عمومی</a></option>
              <option value="athr"><a class="dropdown-item" href="#">نویسنده</a></option>
              <option value="bk"><a class="dropdown-item" href="#">کتاب</a></option>
              <option value="ctgry"><a class="dropdown-item" href="#">کتگوری</a></option>
            </select>
            <button class="btn srch" type="submit">جستجو</button>
          </form>
        </div>
      </div>
  </nav>

    <iframe src="<?php echo $pdf;?>#toolbar=0">
    </iframe>

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
            <div class="footer-details" id="details">
              <i class="fa-solid fa-circle-question"></i>
              <h5>سوالات متداول</h5>
               <div class="links">
                <a href="#top" class="links"> کتاب های برتر </a>
                <a href="#classic" class="links"> کتاب های کلاسیک </a>
                <a href="#novel" class="links"> کتاب های رومان </a>
                <a href="#child" class="links"> کتاب های اطفال </a>
              </div>
            </div>
          </div>
      </div>
    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
