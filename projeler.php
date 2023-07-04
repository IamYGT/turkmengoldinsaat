<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM kategoriler WHERE kategori_durum = 1 AND kategori_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo $tekil_veri_cek["kategori_baslik"]; ?> - Gaziantep Türkmen Gold İnşaat</title>
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
            <div data-parallax-target="" class="bg-image js-lazy" data-bg="<?php echo $ayarlar["strURL"]; ?>/img/backgrounds/2.jpg"></div>
          </div>
          <div class="container">
            <div class="page-masthead__content">
              <div class="row justify-content-between md:justify-content-center align-items-center">
                <div class="col-lg-9 col-md-10">
                  <div data-anim="slide-up delay-1">
                    <div class="page-masthead__subtitle">Türkmen Gold Yatırım İnşaat Sanayi ve Tic. A.Ş</div>
                    <h1 style="text-transform: uppercase;  font-size: 60px; line-height: 1.5; font-weight: 600" class="page-masthead__title text-white"><?php echo $tekil_veri_cek["kategori_baslik"]; ?></h1>
                  </div>
                </div>
                <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/index" class="page-masthead-bread__item">Anasayfa</a>
                    /
                    <a data-barba="" href="#" class="page-masthead-bread__item "><?php echo $tekil_veri_cek["kategori_baslik"]; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
          <section class="layout-pt-md layout-pb-md">
          <div class="container">
            <div class="section-filter px-16">
                <div class="masonry -gap-32 -col-2 layout-pt-sm js-masonry js-masonry-no-filter">
                <div class="masonry__sizer"></div>
                <?php
                				$veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = 'tr' AND kategori_id = {$tekil_veri_cek["kategori_ust_id"]} ORDER BY proje_ust_id DESC LIMIT 99");
                 				if ($veri_cek->rowCount()){
                				foreach($veri_cek as $veri_listele){
                                    $categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND kategori_ust_id = '{$veri_listele['kategori_id']}' AND dil_id='tr'")->fetch(PDO::FETCH_ASSOC); ?>

                <div class="masonry__item  modeling buildings">
                  <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/proje/<?php echo $veri_listele["proje_seo"]; ?>" class="portfolioCard -type-1 ratio">
                    <div class="portfolioCard__image">
                      <img class="ratio-img js-lazy" src="<?php echo $ayarlar["strURL"]; ?>/proje/<?php echo $veri_listele["proje_seo"]; ?>" data-src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $veri_listele["proje_resim"]; ?>" alt="<?php echo 	$veri_listele["proje_baslik"]; ?>">
                    </div>

                    <div class="portfolioCard__content px-30 py-30">
                      <span class="portfolioCard__category text-sm uppercase text-beige-dark"><?php echo $categoryInfo["kategori_baslik"]; ?></span>
                      <h3 class="portfolioCard__title text-lg fw-600 mt-8"><?php echo 	$veri_listele["proje_baslik"]; ?></h3>
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
            </div>

          </div>
        </section>
<?php include 'alt.php'; ?>
</body>
</html>
