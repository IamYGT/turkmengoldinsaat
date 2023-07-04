<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>İletişim - Gaziantep Türkmen Gold İnşaat</title>
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
                    <h1 style="text-transform: uppercase;  font-size: 60px; line-height: 1.5; font-weight: 600" class="page-masthead__title text-white">İletişim</h1>
                  </div>
                </div>
                <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/index" class="page-masthead-bread__item">Anasayfa</a>
                    /
                    <a data-barba="" href="#" class="page-masthead-bread__item ">İletişim</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="layout-pt-lg layout-pb-xl md:pb-64">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-xl-7 col-lg-7 z-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d446.44039790875274!2d37.37833448141832!3d37.10832182978693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb754af62d3d047f1!2zVMO8cmttZW4gR29sZCBJbsWfYWF0!5e0!3m2!1str!2str!4v1641815378907!5m2!1str!2str" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>

              <div class="col-xl-4 col-lg-4 offset-lg-1">
                <div class="md:pt-40 md:pb-40">
                  <div class="sectionHeading -left-line">
                    <span class="sectionHeading__subtitle">İLETİŞİM BİLGİLERİ</span>
                    <h2 class="sectionHeading__title">Satış Ofisimize bekleriz.</h2>
                  </div>

                  <div style="margin-top: 2rem !important;" class="text-sm text-black leading-4xl mt-48 md:mt-16">
              <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <p>T:  <?php echo $ayarlar["strPhone"]; ?></p> </a>
                <a href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <p>M: <?php echo $ayarlar["strMail"]; ?></p> </a>
                    <br>
                    <p><?php echo $ayarlar["strAddress"]; ?></p>
                  </div>

                  <div class="sectionHeading__button mt-24 md:mt-20">
                    <a data-barba="" href="https://www.google.com/maps?ll=37.108327,37.378503&z=19&t=m&hl=tr&gl=TR&mapclient=embed&cid=13210376445979805681" class="button -simple text-black">HARİTADAN BULUN</a>
                  </div>

                  <div class="socialsSection mt-24">
                    <a data-barba="" href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a data-barba="" href="https://www.twitter.com/<?php echo $ayarlar["strTwitter"]; ?>">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a data-barba="" href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>">
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a data-barba="" href="https://wa.me/<?php echo  $ayarlar["strWhatsappPhone_".$lang];  ?>?text=<?php echo  $ayarlar["strWhatsappMessage_".$lang];  ?>">
                      <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-7 col-lg-7 offset-lg-5 z-5">
                <div class="mt-minus-xl md:mt-0">
                  <div class="sectionHeading -left-line bg-dark py-48 px-48">
                    <span class="sectionHeading__subtitle text-white">BİZE MESAJ GÖNDERİN.</span>
                    <h2 class="sectionHeading__title text-white">İletişim Formu</h2>

                    <form class="-light row" action="#">

                      <div class="col-12 mt-20">
                        <input type="text" name="userName" placeholder="İsminiz">
                      </div>
                      <div class="col-12 mt-20">
                        <input type="text" name="email" placeholder="Eposta Adresiniz">
                      </div>
                      <div class="col-12 mt-20">
                        <input type="text" name="userName" placeholder="Telefon">
                      </div>
                      <div class="col-12 mt-20">
                        <textarea name="comment" id="comment" placeholder="Mesajınız" rows="5"></textarea>
                      </div>
                      <div class="col-12 mt-32">
                        <button type="submit" name="submit" id="submit" class="button -md -accent text-white">
                          GÖNDER
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<?php include 'alt.php'; ?>
</body>
</html>
