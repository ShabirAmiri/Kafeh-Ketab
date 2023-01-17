<?php 
require('./usersinfo.php');
require('./get.php');


$display = "none";
if (isset($_POST['srcbtn'])) {
  $search = $_POST['search'];
  $display = "block";
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
            <li class="nav-item">
              <a class="nav-link" href="form/index.php">راجستر</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form/index.php">ورود به سیستم</a>
            </li>
           
          </ul>
          <form class="d-flex" role="search" method="POST" >
            <input class="form-control me-2 srch" type="search" name="search" placeholder="جستجو" aria-label="Search">
            <select name="books" id="books" class="nav-item dropdown mydesign" dir="ltr">
              <option value="omomi"><a class="dropdown-item" href="#top">عمومی</a></option>
              <option value="athr"><a class="dropdown-item" href="#top">نویسنده</a></option>
              <option value="bk"><a class="dropdown-item" href="#top">کتاب</a></option>
              <option value="ctgry"><a class="dropdown-item" href="#top">کتگوری</a></option>
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
      <div class="part1">
        <h2 class="head-one">به کافهٔ کتاب خوش آمدید</h2>
        <!-- Carousel -->
        <div
          id="carouselExampleIndicators"
          class="carousel carousel-dark slide"
          data-bs-ride="true"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="mitems">
                <div class="item1">
                  <img src="images/ebook.svg" alt="ebook" class="ebook" />
                  <div>
                    <h5 class="interest-text">
                      کتاب مورد علاقهٔ تان را آنلاین بخوانید
                    </h5>
                    <p>صد ها کتاب را آنلاین اینجا دریابید.</p>
                  </div>
                </div>

                <div class="item1">
                  <img
                    src="images/icons8-books-96.png"
                    alt="ebook"
                    class="ebook"
                  />
                  <div>
                    <h5 class="interest-text">
                      کتاب مورد علاقهٔ تان را آنلاین بخوانید
                    </h5>
                    <p>صد ها کتاب را آنلاین اینجا دریابید.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="mitems">
                <div class="item1">
                  <img src="images/ebook.svg" alt="ebook" class="ebook" />
                  <div>
                    <h5 class="interest-text">
                      کتاب مورد علاقهٔ تان را آنلاین بخوانید
                    </h5>
                    <p>صد ها کتاب را آنلاین اینجا دریابید.</p>
                  </div>
                </div>

                <div class="item1">
                  <img
                    src="images/icons8-books-96.png"
                    alt="ebook"
                    class="ebook"
                  />
                  <div>
                    <h5 class="interest-text">
                      کتاب مورد علاقهٔ تان را آنلاین بخوانید
                    </h5>
                    <p>صد ها کتاب را آنلاین اینجا دریابید.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="mitems">
                <div class="item1">
                  <img src="images/ebook.svg" alt="ebook" class="ebook" />
                  <div>
                    <h5 class="interest-text">
                      کتاب مورد علاقهٔ تان را آنلاین بخوانید
                    </h5>
                    <p>صد ها کتاب را آنلاین اینجا دریابید.</p>
                  </div>
                </div>

                <div class="item1">
                  <img
                    src="images/icons8-books-96.png"
                    alt="ebook"
                    class="ebook"
                  />
                  <div>
                    <h5 class="interest-text">
                      کتاب مورد علاقهٔ تان را آنلاین بخوانید
                    </h5>
                    <p>صد ها کتاب را آنلاین اینجا دریابید.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="part2" id="top">

        <h2 class="bestbook head-one">کتاب های برتر</h2>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
             
              <!-- Bootstrap Card -->
              <div class="row row-design">
                  <?php  foreach($top_lists as $top_list) {?>
                    <?php 
                  $bookid = $top_list['bookid'];
                  $bname = $top_list['bname'];
                  $aname = $top_list['aname'];
                  $image = $top_list['image'];
                  $genre = $top_list['genre'];

                   ?>
                  <div class="card  col-lg-4" style="width: 15rem;">
                      <img src="<?php echo $image; ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $bname; ?></h5>
                        <p class="card-text"><?php echo $aname ?></p>
                      </div>
                      <div class="card-body">
                        <a href="book-list.php?id=<?php echo $genre;?>" class="btn btn-outline-warning">مطالعه</a>
                        <a href="form/" class="btn btn-outline-warning">ذخیره</a>
                      </div>
                  </div>

                    <?php } ?>
              </div>
            </div>

             <div class="carousel-item active" data-bs-interval="10000">
             
              <!-- Bootstrap Card -->
              <div class="row row-design">
                  <?php  foreach($top_lists as $top_list) {?>
                    <?php 
                  $bookid = $top_list['bookid'];
                  $bname = $top_list['bname'];
                  $aname = $top_list['aname'];
                  $image = $top_list['image'];
                  $genre = $top_list['genre'];


                   ?>
                  <div class="card  col-lg-4" style="width: 15rem;">
                      <img src="<?php echo $image; ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $bname; ?></h5>
                        <p class="card-text"><?php echo $aname ?></p>
                      </div>
                      <div class="card-body">
                        <a href="book-list.php?id=<?php echo $genre;?>" class="btn btn-outline-warning">مطالعه</a>
                        <a href="form/" class="btn btn-outline-warning">ذخیره</a>
                      </div>
                  </div>

                    <?php } ?>
              </div>
            </div>


             <div class="carousel-item active" data-bs-interval="10000">
             
              <!-- Bootstrap Card -->
              <div class="row row-design">
                  <?php  foreach($top_lists as $top_list) {?>
                    <?php 
                  $bookid = $top_list['bookid'];
                  $bname = $top_list['bname'];
                  $aname = $top_list['aname'];
                  $image = $top_list['image'];
                  $genre = $top_list['genre'];

                   ?>
                  <div class="card  col-lg-4" style="width: 15rem;">
                      <img src="<?php echo $image; ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $bname; ?></h5>
                        <p class="card-text"><?php echo $aname ?></p>
                      </div>
                      <div class="card-body">
                        <a href="book-list.php?id=<?php echo $genre;?>" class="btn btn-outline-warning">مطالعه</a>
                        <a href="form/" class="btn btn-outline-warning">ذخیره</a>
                      </div>
                  </div>

                    <?php } ?>
              </div>
            </div>

          </div>

           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>
      </div>

      <div class="part3" id="classic">
        <h2 class="bestbook head-one">کتاب های کلاسیک</h2>
        <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
             
              <!-- Bootstrap Card -->
              <div class="row row-design">
                 <?php  foreach($clas_lists as $clas_list) {?>
                    <?php 
                  $bookid = $clas_list['bookid'];
                  $bname = $clas_list['bname'];
                  $aname = $clas_list['aname'];
                  $image = $clas_list['image'];
                  $genre = $clas_list['genre'];


                   ?>
                  <div class="card  col-lg-4" style="width: 15rem;">
                      <img src="<?php echo $image; ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $bname; ?></h5>
                        <p class="card-text"><?php echo $aname ?></p>
                      </div>
                      <div class="card-body">
                        <a href="book-list.php?id=<?php echo $genre;?>" class="btn btn-outline-warning">مطالعه</a>
                        <a href="form/" class="btn btn-outline-warning">ذخیره</a>
                      </div>
                  </div>

                    <?php } ?>
                  
              </div>
            </div>
          </div>
        
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>


        </div>
      </div>

      <div class="part4" id="novel">
        <h2 class="bestbook head-one">کتاب های رومان</h2>
        <div id="carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
             
              <!-- Bootstrap Card -->
              <div class="row row-design">

                 <?php  foreach($rom_lists as $rom_list) {?>
                    <?php 
                  $bookid = $rom_list['bookid'];
                  $bname = $rom_list['bname'];
                  $aname = $rom_list['aname'];
                  $image = $rom_list['image'];
                  $genre = $rom_list['genre'];


                   ?>
                  <div class="card  col-lg-4" style="width: 15rem;">
                      <img src="<?php echo $image; ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $bname; ?></h5>
                        <p class="card-text"><?php echo $aname ?></p>
                      </div>
                      <div class="card-body">
                        <a href="book-list.php?id=<?php echo $genre;?>" class="btn btn-outline-warning">مطالعه</a>
                        <a href="form/" class="btn btn-outline-warning">ذخیره</a>
                      </div>
                  </div>

                    <?php } ?>
                
              </div>
            </div>
           
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="part5" id="child">
        <h2 class="bestbook head-one">کتاب های اطفال</h2>
        <div id="carouselExam" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExam" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExam" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExam" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
             
              <!-- Bootstrap Card -->
              <div class="row row-design">
                   <?php  foreach($child_lists as $child_list) {?>
                    <?php 
                  $bookid = $child_list['bookid'];
                  $bname = $child_list['bname'];
                  $aname = $child_list['aname'];
                  $image = $child_list['image'];
                  $genre = $child_list['genre'];


                   ?>
                  <div class="card  col-lg-4" style="width: 15rem;">
                      <img src="<?php echo $image; ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $bname; ?></h5>
                        <p class="card-text"><?php echo $aname ?></p>
                      </div>
                      <div class="card-body">
                        <a href="book-list.php?id=<?php echo $genre;?>" class="btn btn-outline-warning">مطالعه</a>
                        <a href="form/" class="btn btn-outline-warning">ذخیره</a>
                      </div>
                  </div>

                    <?php } ?>

              </div>
            </div>
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExam" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExam" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
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
