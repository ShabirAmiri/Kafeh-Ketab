<?php 
require('./usersinfo.php');


$display = "none";
if (isset($_POST['srcbtn'])) {
  $search = $_POST['search'];
  $display = "block";
}



if(isset($_REQUEST['id']) ){
    $id = $_REQUEST['id'];

    if (empty($id)) {
      header('location: ./index.php');
    }else{

      $get = "SELECT * FROM books WHERE genre = '$id'";
      $query = mysqli_query($conn, $get);
      $results = mysqli_fetch_all($query, MYSQLI_ASSOC);

          


    }
}else{
    header('location: ../index.php');
}




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
     
        .i-con{
          height: auto;
          width:  80%;
           position: fixed;
        z-index: 10000;
        display: <?php echo $display; ?>;
        }
      iframe{
        width: 100%;
        height: 70vh;
        border-radius: 5px;
        margin: 10px;
        box-shadow: -10px 20px 20px rgba(0, 0, 0, 0.3);
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
          </ul>
          <form class="d-flex" role="search" method="POST" >
            <input class="form-control me-2 srch" type="search" name="search" placeholder="جستجو" aria-label="Search">
            <select name="books" id="books" class="nav-item dropdown mydesign" dir="ltr">
              <option value="omomi"><a class="dropdown-item" href="#">عمومی</a></option>
              <option value="athr"><a class="dropdown-item" href="#">نویسنده</a></option>
              <option value="bk"><a class="dropdown-item" href="#">کتاب</a></option>
              <option value="ctgry"><a class="dropdown-item" href="#">کتگوری</a></option>
            </select>
            <button class="btn srch" type="submit" name="srcbtn">جستجو</button>
          </form>
        </div>
      </div>
  </nav>

  <div class="i-con" id="i-con">
    <button id="cancel">cancel</button>
    <iframe src="https://en.wikipedia.org/wiki/<?php echo $search; ?>"></iframe>
</div>

    <section class="main-section">
      

      <div class="part2" id="top">

        <h2 class="bestbook head-one">کتاب های برتر</h2>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
             
              <!-- Bootstrap Card -->
              <div class="row row-design">
                  <?php  foreach($results as $result) {?>
                    <?php 
                  $bookid = $result['bookid'];
                  $bname = $result['bname'];
                  $aname = $result['aname'];
                  $image = $result['image'];

                   ?>
                  <div class="card  col-lg-4" style="width: 15rem;">
                      <img src="<?php echo $image; ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $bname; ?></h5>
                        <p class="card-text"><?php echo $aname ?></p>
                      </div>
                      <div class="card-body">
                        <a href="read.php?id=<?php echo $bookid;?>" class="btn btn-outline-warning">مطالعه</a>
                        <a href="fav.php?id=<?php echo $bookid; ?>" class="btn btn-outline-warning">ذخیره</a>
                      </div>
                  </div>

                    <?php } ?>
              </div>
            </div>
          </div>

          

        </div>
      </div>

      <div class="category">
        <h2 class="bestbook head-one ct">کتگوری</h2>
          <div class="category-container">
              
             <a href="#top" class="categ">
              <div>
                <i class="fa-regular fa-star cnt"></i>
                <h5 class="cat-head">کتاب های برتر</h5>
                <p class="cnt">۱۳ جلد</p>
              </div>
            </a>
           
              <a href="#classic" class="categ">
              <div>
                <img src="images/icons8-historical-40.png" class="cnt" alt="sand-clock">
                <h5 class="cat-head">کتاب های کلاسیک</h5>
                <p class="cnt">۱۲ جلد</p>
              </div>
            </a>

               <a href="#novel" class="categ">
              <div>
                <img src="images/icons8-heart-suit-48.png" class="cnt" alt="sand-clock">
                <h5 class="cat-head">کتاب های رومان</h5>
                <p class="cnt">۸ جلد</p>
              </div>
            </a>
              <a href="#child" class="categ">
                <div>
                  <img src="images/icons8-children-48.png" class="cnt" alt="sand-clock">
                  <h5 class="cat-head">کتاب های اطفال</h5>
                  <p class="cnt">۱۰ جلد</p>
                </div>
              </a>
          </div>
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

    </section>
    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>


    <script>
      const cancel = document.getElementById("cancel");
      const icon = document.getElementById("i-con");
    cancel.addEventListener("click", () => {
      icon.style.display = "none";
    });

    </script>
  </body>
</html>
