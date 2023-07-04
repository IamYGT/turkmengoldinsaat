<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Anasayfa - Gaziantep Türkmen Gold İnşaat</title>
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
        <section class="masthead swiper-container js-slider">
          <div class="swiper-wrapper">
            <?php
                $veri_cek = $db->query("SELECT * FROM slayt WHERE slayt_durum = 1");
                if ($veri_cek->rowCount()){
                foreach($veri_cek as $veri_listele){
            ?> <div class="swiper-slide">
              <div data-parallax="0.6" class="masthead__image" data-swiper-parallax="40%">
                <img data-parallax-target="" class="swiper-lazy" src="<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>" alt="<?php echo 	$veri_listele["slayt_baslik"]; ?>">
              </div>

              <div class="container-fluid h-100 px-32">
                <div class="row align-items-center">
                  <div class="col-lg-10 offset-lg-2 offset-md-1">
                    <div class="masthead__content js-content">
                      <div data-split="lines" data-anim="split-lines" class="js-title-wrap">
                        <h1 class="masthead__title text-white js-title">
                          <?php echo 	$veri_listele["slayt_baslik"]; ?><br><span><?php echo 	$veri_listele["slayt_aciklama"]; ?></span>
                        </h1>
                      </div>
                      <div class="masthead__button js-button">
                        <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/<?php echo 	$veri_listele["slayt_butonlink"]; ?>" class="button -simple text-white">
                          <?php echo 	$veri_listele["slayt_buton"]; ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
                  }
                }else{
                  "Listelenecek veri bulunamadı.";
                }
            ?>
          </div>

          <div class="masthead__pagination_numbers js-pag-numbers lg:d-none">
            <span class="js-current"></span>
            <span>/</span>
            <span class="js-all"></span>
          </div>

          <div class="masthead__socials js-socials md:d-none">
            <div data-anim="slide-up" class="masthead__socials_item">
              <a class="text-white" href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>">.Facebook</a>
              <a class="text-white" href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>">.Instagram</a>
              <a class="text-white" href="https://wa.me/<?php echo  $ayarlar["strWhatsappPhone_tr"];  ?>?text=<?php echo  $ayarlar["strWhatsappMessage_tr"];  ?>">.Whatsapp</a>
             </div>
          </div>

          <div class="masthead-pagination js-pag">
            <?php
                $veri_cek = $db->query("SELECT * FROM slayt WHERE slayt_durum = 1");
                if ($veri_cek->rowCount()){
                foreach($veri_cek as $veri_listele){
            ?>
            <div data-cursor="" class="masthead-pagination__item js-pag-item">
              <span class="masthead-pagination__number">0<?php echo 	$veri_listele["slayt_ust_id"]; ?></span>
              <h4 class="masthead-pagination__title md:d-none">  <?php echo 	$veri_listele["slayt_baslik"]; ?></h4>
              <span class="masthead-pagination__line"></span>
            </div>

            <?php
                  }
                }else{
                  "Listelenecek veri bulunamadı.";
                }
            ?>

          </div>

          <div class="masthead__scroll js-scroll md:d-none">
            <div class="masthead__scroll_item">

              <div class="masthead__scroll_icon">
                <i class="icon icon-right-arrow"></i>
              </div>
            </div>
          </div>
        </section>
        <section class="layout-pt-lg overflow-visible z-2">
          <div class="container">
            <div data-anim-wrap="" class="row align-items-center">
              <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="aboutBack sm:d-none">
                  <img src="<?php echo $ayarlar["strURL"]; ?>/img/general/large-logo.svg" alt="Logo">
                </div>
                <div data-anim-child="slide-right delay-8" class="sectionHeading -left-line -about pr-12 lg:pr-0">
                  <span class="sectionHeading__subtitle">TÜRKMEN GOLD İNŞAAT</span>
                  <h2 class="sectionHeading__title">Kurumsal</h2>
                  <p style="margin-top: 16px;" class="sectionHeading__text">
<?php echo $ayarlar["hakkimizda_tr"]; ?>
                  </p>

                  <div class="sectionHeading__button">
                    <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/kurumsal" class="button -md -dark text-white">KURUMSAL</a>
                  </div>
                </div>
              </div>

              <div class="col-xl-7 col-lg-6">
                <div class="overlayImgs md:mt-60">
                  <div data-anim-child="img-right cover-black" class="overlayImgs__back">
                    <img src="<?php echo $ayarlar["strURL"]; ?>/img/backgrounds/7.jpg" alt="Türkmen Gold Hakkımızda">
                  </div>

                  <div data-anim-child="img-right cover-black delay-3" class="overlayImgs__front -border">
                    <img src="<?php echo $ayarlar["strURL"]; ?>/img/backgrounds/2.jpg" alt="Türkmen Gold Hakkımızda">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="layout-pt-md layout-pb-md bg-grey pattern_bg_1">
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
        <section class="layout-pt-lg layout-pb-lg">
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

        <section class="layout-pb-lg">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-auto">
                <div class="sectionHeading -left-line">
                  <span class="sectionHeading__subtitle">TÜRKMEN GOLD İNŞAAT</span>
                  <h2 class="sectionHeading__title">Projelerimiz</h2>
                </div>
              </div>
            </div>

            <div class="row justify-content-center layout-pt-sm">
              <div class="col-lg-8">
                <div class="sectionSlider js-sectionSlider" data-gap="30" data-slider-col="base-1 lg-1 md-1 sm-1" data-center="" data-loop="" data-pagination="" data-cursor="" data-cursor-label="SÜRÜKLE">

                  <div class="sliderNav -portfolio-slider js-nav">
                    <button class="sliderNav__item -prev js-prev">GERİ</button>
                    <button class="sliderNav__item -next js-next">İLERİ</button>
                  </div>

                  <div class="swiper-wrapper">
                    <?php
                            $veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1");
                            if ($veri_cek->rowCount()){
                            foreach($veri_cek as $veri_listele){
                         $categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND kategori_ust_id = '{$veri_listele['kategori_id']}' AND dil_id='tr'")->fetch(PDO::FETCH_ASSOC); ?>
                    <div class="swiper-slide">
                      <a data-barba="" data-cursor="" data-cursor-label="SÜRÜKLE" href="<?php echo $ayarlar["strURL"]; ?>/proje/<?php echo $veri_listele["proje_seo"]; ?>" class="portfolio">
                        <div class="portfolio__image">
                          <div class="ratio ratio-16:9">
                            <img class="ratio-img swiper-lazy" src="<?php echo $ayarlar["strURL"]; ?>/proje/<?php echo $veri_listele["proje_seo"]; ?>" data-src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $veri_listele["proje_resim"]; ?>" alt="<?php echo 	$veri_listele["proje_baslik"]; ?>">
                            <div class="swiper-lazy-preloader"></div>
                          </div>
                        </div>

                        <div class="portfolio__content text-center">
                          <span class="portfolio__category"><?php echo $categoryInfo["kategori_baslik"]; ?></span>
                          <h3 class="portfolio__title"><?php echo 	$veri_listele["proje_baslik"]; ?></h3>
                        </div>
                      </a>
                    </div>
                    <?php
                            }
                          }else{
                            "Listelenecek veri bulunamadı.";
                          }
                  ?>
                  </div>
                  <div class="pagination -slider mt-48 js-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="layout-pb-lg bg-white">
          <div class="container">
            <div class="row">
              <div class="col-auto">
                <div class="sectionHeading -left-line">
                  <span class="sectionHeading__subtitle">TÜRKMEN GOLD İNŞAAT</span>
                  <h2 class="sectionHeading__title">Haberler</h2>
                </div>
              </div>
            </div>

            <div class="row y-gap-32 layout-pt-sm">
              <?php
                  $veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 3");
                  if ($veri_cek->rowCount()){
                  foreach($veri_cek as $veri_listele){
              ?>
              <div class="col-lg-4 col-md-6">
                <div data-anim-wrap="" class="blog -hover">
                  <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>">
                    <div class="blog__image">
                      <div data-anim-child="img-right cover-black">
                        <div>
                          <div class="ratio ratio-41:35">
                            <img class="ratio-img" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                          </div>
                        </div>
                      </div>
                     </div>
                  </a>

                  <div class="blog__content mt-20">
                    <div data-anim-child="slide-up delay-6" class="blog__info">
                      <a data-barba="" href="#"><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></a>
                     </div>

                    <div data-anim-child="slide-up delay-7">
                      <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>">
                        <h3   style="font-size: 23px" class="blog__title text-black pr-80 lg:pr-0"><?php echo 	$veri_listele["haber_baslik"]; ?></h3>
                      </a>
                    </div>

                    <div data-anim-child="slide-up delay-8">
                      <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>" class="blog__button button -simple text-black">Devamını Oku</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                      }
                    }else{
                      "Listelenecek veri bulunamadı.";
                    }
              ?>

            </div>
          </div>
        </section>
 <?php include 'alt.php'; ?>
</body>

</html>
