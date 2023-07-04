<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Kurumsal - Gaziantep Türkmen Gold İnşaat</title>
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
        <section class="page-masthead">
          <div data-parallax="0.6" class="page-masthead__bg">
            <div data-parallax-target="" class="bg-image js-lazy" data-bg="<?php echo $ayarlar["strURL"]; ?>/img/backgrounds/6.jpg"></div>
          </div>
          <div class="container">
            <div class="page-masthead__content">
              <div class="row justify-content-between md:justify-content-center align-items-center">
                <div class="col-lg-9 col-md-10">
                  <div data-anim="slide-up delay-1">
                    <div class="page-masthead__subtitle">Türkmen Gold Yatırım İnşaat Sanayi ve Tic. A.Ş</div>
                    <h1 style="text-transform: uppercase;  font-size: 60px; line-height: 1.5; font-weight: 600" class="page-masthead__title text-white">Kurumsal</h1>
                  </div>
                </div>
                <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/index" class="page-masthead-bread__item">Anasayfa</a>
                    /
                    <a data-barba="" href="#" class="page-masthead-bread__item ">Kurumsal</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="layout-pt-lg overflow-visible z-2">
          <div class="container">
            <div data-anim-wrap="" class="row align-items-center">
              <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="aboutBack sm:d-none">
                  <img src="img/general/large-logo.svg" alt="logo">
                </div>

                <div data-anim-child="slide-right delay-8" class="sectionHeading -left-line -about pr-12 lg:pr-0">
                  <span class="sectionHeading__subtitle">TÜRKMEN GOLD İNŞAAT</span>
                  <h2 class="sectionHeading__title">Kurumsal</h2>
                  <p style="margin-top: 16px;" class="sectionHeading__text">
<?php echo $ayarlar["hakkimizda_tr"]; ?>
                  </p>
                </div>
              </div>

              <div class="col-xl-7 col-lg-6">
                <div class="overlayImgs md:mt-60">
                  <div data-anim-child="img-right cover-black" class="overlayImgs__back">
                    <img src="img/backgrounds/7.jpg" alt="Image">
                  </div>

                  <div data-anim-child="img-right cover-black delay-3" class="overlayImgs__front -border">
                    <img src="img/backgrounds/3.jpg" alt="Image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- counter -->
        <section class="layout-pt-md layout-pb-md bg-grey counter__section">
          <div class="container">
            <div class="row justify-content-between md:pt-48">

              <div class="col-lg-auto col-md-6">
                <div class="counter">
                  <div class="counter__back">
                    <?php echo $ayarlar["strColorOne"]; ?>
                  </div>

                  <div class="counter__content">
                    <div class="counter__number text-black"><?php echo $ayarlar["strColorOne"]; ?></div>
                    <h5 class="counter__title text-black">Mutlu <br>Müşteri</h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-auto col-md-6">
                <div class="counter">
                  <div class="counter__back">
                    <?php echo $ayarlar["strColorTwo"]; ?>
                  </div>

                  <div class="counter__content">
                    <div class="counter__number text-black"><?php echo $ayarlar["strColorTwo"]; ?></div>
                    <h5 class="counter__title text-black">Yıllık <br>Tecrübe</h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-auto col-md-6">
                <div class="counter">
                  <div class="counter__back">
                    <?php echo $ayarlar["strColorThree"]; ?>
                  </div>

                  <div class="counter__content">
                    <div class="counter__number text-black"><?php echo $ayarlar["strColorThree"]; ?></div>
                    <h5 class="counter__title text-black">Daire<br>Sayısı</h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-auto col-md-6">
                <div class="counter">
                  <div class="counter__back">
                    <?php echo $ayarlar["strMailTitle"]; ?>
                  </div>

                  <div class="counter__content">
                    <div class="counter__number text-black"><?php echo $ayarlar["strMailTitle"]; ?></div>
                    <h5 class="counter__title text-black">Blok <br>Sayısı</h5>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>

        <section class="layout-pt-md layout-pb-md">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="sectionHeading -top-line text-center">
                  <span class="sectionHeading__subtitle">TÜRKMEN GOLD İNŞAAT</span>
                  <h2 class="sectionHeading__title">Bizi daha yakından tanıyın.</h2>
                </div>
              </div>
            </div>

            <div class="row y-gap-32 layout-pt-sm">

              <div class="col-lg-4 col-md-6">
                <div data-anim="slide-up" class="service -card -hover">
                  <div class="service__content -border">
                    <div class="service__icon">
                      <i class="icon icon-pencil text-beige"></i>
                    </div>

                    <h3 class="service__title mt-20">Yüksek Kalite</h3>
                    <p class="service__text">Yüksek kalite standartlarına uygun projlerle hizmetinizdeyiz.</p>

                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div data-anim="slide-up" class="service -card -hover">
                  <div class="service__content -border">
                    <div class="service__icon">
                      <i class="icon icon-rocket text-beige"></i>
                    </div>

                    <h3 class="service__title mt-20">Çevreci</h3>
                    <p class="service__text">Çevreye, doğaya ve geleceğimize duyduğumuz saygıyla inşa ediyoruz.</p>

                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div data-anim="slide-up" class="service -card -hover">
                  <div class="service__content -border">
                    <div class="service__icon">
                      <i class="icon icon-cube text-beige"></i>
                    </div>

                    <h3 class="service__title mt-20">Yeni Nesil Yapı</h3>
                    <p class="service__text">Yapılarımız, yüksek kalitede olup sizler için en yeni nesili yapıyoruz.</p>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
<?php include 'alt.php'; ?>
</body>
</html>
