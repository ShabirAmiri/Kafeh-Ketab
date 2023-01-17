<?php 
require('login-config.php');
require('signup-config.php');


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
    <title>Book Zone-- signin-signup</title>
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <form action="" method="POST" class="sign-in-form">
                <h2 class="title">ورود</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="gmail" placeholder="ست الکترونیک">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="کلمه عبور">
                </div>
                <input type="submit" value="وارد شدن" name="login" class="btn">
                <!--
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            -->
                <p class="account-text">حساب کاربری ندارید؟ <a href="#" id="sign-up-btn2">ثبت نام</a></p>
            </form>
            <form action="" method="POST" class="sign-up-form">
                <h2 class="title">ثبت نام</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="نام کاربری">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="gmail" placeholder="پست الکترونیک">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password"  name="password" placeholder="کلمه عبور">
                </div>
                <input type="submit" value="ثبت نام" name="signup" class="btn">

                <!--
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            -->
                <p class="account-text">از قبل حساب کاربری دارید؟ <a href="#" id="sign-in-btn2">ورود</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>عضو Book Zone?</h3>
                    <p>با ایمیل/نام کاربری و رمز عبور خود وارد سیستم شوید؟</p>
                    <button class="btn" id="sign-in-btn">ورود</button>
                </div>
                <img src="signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>جدید به Book Zone?</h3>
                    <p>ثبت نام کنید و راه‌اندازی حساب خود را دریافت کنید، بنابراین باید برخی از ویژگی‌ها را باز کنید و از کتاب‌های مورد علاقه‌تان لذت ببرید.</p>
                    <button class="btn" id="sign-up-btn">ثبت نام</button>
                </div>
                <img src="signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>