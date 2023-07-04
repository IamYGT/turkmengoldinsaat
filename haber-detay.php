<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Gaziantep Türkmen Gold İnşaat</title>
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
            <div data-parallax-target="" class="bg-image js-lazy" data-bg="<?php echo $ayarlar["strURL"]; ?>/img/backgrounds/1.jpg"></div>
          </div>
          <div class="container">
            <div class="page-masthead__content">
              <div class="row justify-content-between md:justify-content-center align-items-center">
                <div class="col-lg-9 col-md-10">
                  <div data-anim="slide-up delay-1">
                    <div class="page-masthead__subtitle">Türkmen Gold Yatırım İnşaat Sanayi ve Tic. A.Ş</div>
                    <h1 style="text-transform: uppercase;  font-size: 60px; line-height: 1.5; font-weight: 600" class="page-masthead__title text-white"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h1>
                  </div>
                </div>
                <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/index" class="page-masthead-bread__item">Anasayfa</a>
                    /
                    <a data-barba="" href="#" class="page-masthead-bread__item "><?php echo $tekil_veri_cek["haber_baslik"]; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="layout-pt-md layout-pb-md">
          <div class="container">
            <div class="row">
              <div class="col-lg-9">
                <div class="blogSection pr-30 lg:pr-0">
                  <div class="blogCard">
                    <div class="blogCard__image">
                      <div class="ratio ratio-93:53 bg-image js-lazy" data-bg="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>"></div>
                    </div>
                    <div class="blogCard__content mt-20">
                      <div class="blogCard__category x-gap-20 mb-8">
                        <a class="uppercase text-accent" href="#"><?php echo $tekil_veri_cek["haber_tarih"]; ?></a>
                        <a class="uppercase text-accent" href="#">Türkmen Gold İnşaat</a>
                      </div>

                      <h4 class="blogCard__title text-2xl fw-600"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h4>
                      <p class="blogCard__text mt-20"> <?php echo $tekil_veri_cek["haber_aciklama"]; ?></p>

                    </div>

                    <div class="blogSingle-info mt-48">
                      <div class="row justify-content-between y-gap-20">
                        <div class="col-auto">
                          <div class="tags__wrap">
                            <div class="tags__item">
                              <a data-barba="" href="#">TÜRKMEN</a>
                            </div>

                            <div class="tags__item">
                              <a data-barba="" href="#">GOLD</a>
                            </div>

                            <div class="tags__item">
                              <a data-barba="" href="#">İNŞAAT</a>
                            </div>

                          </div>
                        </div>

                        <div class="col-auto">
                          <div class="socials">
                            <div class="socials__title">PAYLAŞ</div>

                            <div class="socials__wrap">
                              <a data-barba="" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>" class="text-black">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                              <a data-barba="" href="https://twitter.com/intent/tweet?url=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>&text=<?php echo $tekil_veri_cek["haber_baslik"]; ?>" class="text-black">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                              <a data-barba="" href="https://pinterest.com/pin/create/button/?url=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>&media=&description=<?php echo $tekil_veri_cek["haber_baslik"]; ?>" class="text-black">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                              </a>
                              <a data-barba="" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $tekil_veri_cek["haber_seo"]; ?>" class="text-black">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="blogSidebar">
                  <div class="blogSidebar__item">
                    <h5 class="blogSidebar__title">SON HABERLER</h5>
                    <div class="recent mt-20">

                      <?php
                          $veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1  AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 4");
                          if ($veri_cek->rowCount()){
                          foreach($veri_cek as $veri_listele){
                    ?>
                      <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>" class="recent__item">
                        <div class="recent__image">
                          <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>"></div>
                        </div>
                        <div class="recent__content ml-20">
                          <div class="text-black"><?php echo 	$veri_listele["haber_baslik"]; ?></div>
                          <div class="text-accent mt-4"><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></div>
                        </div>
                      </a>
                      <?php
                              }
                            }else{
                              "Listelenecek veri bulunamadı.";
                            }
                      ?>
                    </div>
                  </div>
                  <div class="blogSidebar__item">
                    <h5 class="blogSidebar__title">PROJELERİMİZ</h5>
                    <div class="category mt-20">
                      <?php
                    $veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = 'tr' ORDER BY proje_ust_id ASC LIMIT 6 ");
                    if ($veri_cek->rowCount()){
                    foreach($veri_cek as $veri_listele){
                    ?>
                      <div class="category__item">
                        <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/proje/<?php echo $veri_listele["proje_seo"]; ?>"><?php echo 	$veri_listele["proje_baslik"]; ?></a>
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
              </div>
            </div>
          </div>
        </section>
      <?php include 'alt.php'; ?>
</body>
</html>
