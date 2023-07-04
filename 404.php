<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>404 - Gaziantep Türkmen Gold İnşaat</title>
<?php include 'css.php'; ?>
</head>
<body class="preloader-visible" data-barba="wrapper">
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
    <div class="preloader__progress">
      <div class="preloader__progress__inner"></div>
      <img src="<?php echo $ayarlar["strURL"]; ?>/img/general/loader.svg" alt="Yükleniyor İkon" class="preloader__img">
    </div>
  </div>
  <div class="cursor js-cursor">
    <div class="cursor__wrapper">
      <div class="cursor__follower js-follower"></div>
      <div class="cursor__label js-label"></div>
      <div class="cursor__icon js-icon"></div>
    </div>
  </div>
  <div class="barba-container" data-barba="container">
    <main class="main-content  ">
      <?php include 'ust.php'; ?>
        <div class="content-wrapper  js-content-wrapper">
        <section class="no-page">
          <div data-parallax="0.6" class="no-page__bg">
            <div data-parallax-target="" class="bg-image js-lazy" data-bg="<?php echo $ayarlar["strURL"]; ?>/img/backgrounds/6.jpg"></div>
          </div>
          <div class="container">
            <div class="row justify-content-center align-items-center">
              <div class="col-xl-5 col-lg-8 col-md-10">
                <div class="no-page__content">
                  <h1 class="no-page__title text-white">404</h1>
                  <p class="no-page__text text-white mt-8">Aradığınız Sayfa Bulunamadı.</p>
                  <div class="no-page__button mt-64 md:mt-48">
                    <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/index" class="button -md -accent text-white">ANASAYFA</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
  </div>
  <?php include 'alt.php'; ?>
</body>

</html>
