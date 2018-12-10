<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login | Media Gizi </title>
    
   
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><img src="img/judul2.png" width="150" height="39"></li>
            <li class="active"><a href="index.html">Beranda</a></li>
            <li><a href="#">Artikel Kesehatan</a></li>
            <li><a href="#">Resep &amp; Makanan</a></li>
            <li><a href="#">Diskusi Sehat</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Bantuan</a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  <div class="probootstrap-main-content">
    <section class="probootstrap-slider flexslider">
      <ul class="slides">
         <!-- class="overlay" -->
        <li style="background-image: url(img/slider_1.jpg);">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate mb20"></h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap mb30">
                  <br>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- class="overlay" -->
        <li style="background-image: url(img/slider_1.jpg);">
          <div class="container">
            <div class="row">
              
                  <div class="probootstrap-animate probootstrap-sub-wrap mb30"> <a href="https://uicookies.com/license/"></a></div>
                  <p class="probootstrap-animate"><a href="#" class="btn btn-ghost btn-ghost-white"></a></p>
                </div>
              </div>
        </li>
      </ul>
    </section>
                                <!--Login-->
    <div class="container">
    

    <div class="omb_login">
      <h3 class="omb_authTitle">Login or <a href="signupadmin.php">Sign up</a></h3>
    <div class="row omb_row-sm-offset-3 omb_socialButtons">
        
          <div class="col-xs-10 col-sm-3 col-md-6">
            <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
              <i class="fa fa-twitter visible-xs"></i>
              <span class="hidden-xs">Admin</span>
            </a>
          </div>  
        
    </div> <br>
    <div class="row omb_row-sm-offset-3">
      <div class="col-xs-12 col-sm-6">  
          <form method="POST" action="ceklogin.php">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="username" placeholder="email@gmail.com">
          </div>
          <span class="help-block"></span>
                    
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input  type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <span class="help-block"></span>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
      </div>
      </div>
    <div class="row omb_row-sm-offset-3">
      <div class="col-xs-12 col-sm-3">
        <label class="checkbox">
          <input type="checkbox" value="remember-me">Remember Me
        </label>
      </div>
      <div class="col-xs-12 col-sm-3">
        <p class="omb_forgotPwd">
          <a href="#">Forgot password?</a>
        </p>
      </div>
    </div>        
  </div>
        </div>
<section class="probootstrap-section probootstrap-bg-white">
        <div class="container">
          <!-- END row -->
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth mt50">
                <div class="item">

                  <div class="probootstrap-testimony-wrap">
                    <figure>
                      <img src="img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;&rdquo; <cite class="author">&mdash;  <br> <span></span></cite></blockquote>
                  </div>

                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap">
                    <figure>
                      <img src="img/person_2.jpg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;&rdquo; <cite class="author">&mdash; <br> <span></span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap">
                    <figure>
                      <img src="img/halal.jpg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;&rdquo; <cite class="author">&mdash; <br> <span></span></cite></blockquote>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <!-- END row -->
        </div>
      </section>
    </div>
    <div class="probootstrap-footer-spacer"></div>
    <footer class="probootstrap-footer">
      <div class="probootstrap-footer-section">
        <div class="container">
          <div class="row mb80">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
              <h3>Tentang Kami</h3>
              <p>.</p>
              <p><a href="#" class="btn btn-ghost btn-ghost-white btn-sm">I'm a button</a></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Berkerja Sama Dengan</h3>
                <ul>
                  <li><a href="#"><img src="img/logo_idi.png" width="30" height="30">  Ikatan Dokter Indonesia</a></li>
                  <li><a href="#"><img src="img/halal.jpg">Majelis Ulama Indonesia</a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#">Product Strategy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Terhubung Dengan Kami</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-instagram2"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <p class="text-center">&copy; CopyRight 2018 by <a href="https://uicookies.com/">MediaGizi.com</a>
          </div>
        </div>
      </div>
    </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>