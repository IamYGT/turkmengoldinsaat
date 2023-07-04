<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Haberler - Gaziantep Türkmen Gold İnşaat</title>
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
            <div data-parallax-target="" class="bg-image js-lazy" data-bg="<?php echo $ayarlar["strURL"]; ?>/img/backgrounds/3.jpg"></div>
          </div>
          <div class="container">
            <div class="page-masthead__content">
              <div class="row justify-content-between md:justify-content-center align-items-center">
                <div class="col-lg-9 col-md-10">
                  <div data-anim="slide-up delay-1">
                    <div class="page-masthead__subtitle">Türkmen Gold Yatırım İnşaat Sanayi ve Tic. A.Ş</div>
                    <h1 style="text-transform: uppercase;  font-size: 60px; line-height: 1.5; font-weight: 600" class="page-masthead__title text-white">Haberler</h1>
                  </div>
                </div>
                <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/index" class="page-masthead-bread__item">Anasayfa</a>
                    /
                    <a data-barba="" href="#" class="page-masthead-bread__item ">Haberler</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section style="padding-top: 2rem;" class="layout-pt-md layout-pb-md">
          <div class="container">
            <div class="section-filter px-16">

              <div class="masonry -gap-32 -col-3 layout-pt-sm js-masonry js-masonry-no-filter">
                <div class="masonry__sizer"></div>
                <?php
                    $veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1");
                    if ($veri_cek->rowCount()){
                    foreach($veri_cek as $veri_listele){
              ?>   <div class="masonry__item -no-ratio ">
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
                        <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></a>
                       </div>
                      <div data-anim-child="slide-up delay-7">
                        <a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><h2  style="font-size: 23px" class="blog__title text-black pr-80 lg:pr-0"><?php echo 	$veri_listele["haber_baslik"]; ?></h2></a>
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
          </div>
        </section>
<?php include 'alt.php'; ?>
</body>
</html>
