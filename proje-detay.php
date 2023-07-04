<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND proje_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC);
$categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_ust_id = {$tekil_veri_cek['kategori_id']} AND dil_id = 'tr'")->fetch(PDO::FETCH_ASSOC);  ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo $tekil_veri_cek["proje_baslik"]; ?> - Gaziantep Türkmen Gold İnşaat</title>
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
                    <h1 style="text-transform: uppercase;  font-size: 60px; line-height: 1.5; font-weight: 600" class="page-masthead__title text-white"><?php echo $tekil_veri_cek["proje_baslik"]; ?></h1>

                  </div>
                </div>
                <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/index" class="page-masthead-bread__item">Anasayfa</a>
                    /
                    <a data-barba="" href="#" class="page-masthead-bread__item "><?php echo $tekil_veri_cek["proje_baslik"]; ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="layout-pt-md layout-pb-sm">
         <div class="container">
           <div class="row">
             <div class="col-lg-12">
               <h3 class="text-4xl leading-2xl md:mt-48"><?php echo $tekil_veri_cek["proje_baslik"]; ?></h3>

               <div style="margin-bottom: -3rem;"  class="row y-gap-32 pt-32">
                 <div class="col-lg-8 col-md-8 col-12">
                   <div style="margin-bottom: -3rem;" class="row y-gap-32 pt-32">

                 <div  style="margin-bottom: 30px;"  class="col-lg-3 col-md-4 col-6">
                   <div class="text-xs leading-2xl uppercase text-black fw-600">YIL</div>
                   <div class="text-sm leading-2xl"><?php echo $tekil_veri_cek["proje_yil"]; ?></div>
                 </div>


                 <div  style="margin-bottom: 30px;"  class="col-lg-3 col-md-4 col-6">
                   <div class="text-xs leading-2xl uppercase text-black fw-600">ADRES</div>
                   <div class="text-sm leading-2xl"><?php echo $tekil_veri_cek["proje_adres"]; ?></div>
                 </div>


                 <div  style="margin-bottom: 30px;"  class="col-lg-3 col-md-4 col-6">
                   <div class="text-xs leading-2xl uppercase text-black fw-600">METRE KARE</div>
                   <div class="text-sm leading-2xl"><?php echo $tekil_veri_cek["proje_metrekare"]; ?></div>
                 </div>


                 <div  style="margin-bottom: 30px;"  class="col-lg-3 col-md-4 col-6">
                   <div class="text-xs leading-2xl uppercase text-black fw-600">DAİRE SAYISI</div>
                   <div class="text-sm leading-2xl"><?php echo $tekil_veri_cek["proje_daire"]; ?></div>
                 </div>


                 <div  style="margin-bottom: 30px;"  class="col-lg-3 col-md-4 col-6">
                   <div class="text-xs leading-2xl uppercase text-black fw-600">BLOK SAYISI</div>
                   <div class="text-sm leading-2xl"><?php echo $tekil_veri_cek["proje_blok"]; ?></div>
                 </div>

                 <div  style="margin-bottom: 30px;"  class="col-lg-3 col-md-4 col-6">
                   <div class="text-xs leading-2xl uppercase text-black fw-600">TAMAMLANMA TARİHİ</div>
                   <div class="text-sm leading-2xl"><?php echo $tekil_veri_cek["proje_tamamlanma"]; ?></div>
                 </div>

               </div>
               </div>
               <div class="col-lg-4 col-md-4 col-12">
                    <div class="row y-gap-32 pt-32">
                  <div class="col-lg-12 col-md-12 col-12">
                  <iframe width="100%" style="width:100%; height: 200px;" height="200" src="https://www.youtube.com/embed/<?php echo $tekil_veri_cek["proje_video"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

               </div>
               </div>

               </div>
             </div>
           </div>
         </div>
       </section>
       <section class="layout-pt-sm layout-pb-sm">
                <div class="container">
                  <div class="row y-gap-32">
                    <div class="col-lg-4">
                      <a data-barba href="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $tekil_veri_cek["proje_resim"]; ?>" class="gallery__item js-gallery" data-gallery="gallery1">
                        <div class="ratio ratio-63:60">
                          <img class="ratio-img" src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $tekil_veri_cek["proje_resim"]; ?>" alt="<?php echo $tekil_veri_cek["proje_baslik"]; ?>">
                        </div>

                        <div class="gallery__button">
                          <i class="icon" data-feather="plus"></i>
                        </div>
                      </a>
                    </div>
                    <?php
                            $imagesList = $db->query("SELECT * FROM files WHERE ustid = {$tekil_veri_cek["proje_ust_id"]} AND itable = 2");
                            if ($imagesList->rowCount()){
                                foreach($imagesList as $image){
                    ?>
                    <div class="col-lg-4">
                      <a data-barba href="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $image["name"]; ?>" class="gallery__item js-gallery" data-gallery="gallery1">
                        <div class="ratio ratio-63:60">
                          <img class="ratio-img" src="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $image["name"]; ?>" alt="project image">
                        </div>

                        <div class="gallery__button">
                          <i class="icon" data-feather="plus"></i>
                        </div>
                      </a>
                    </div>

                                        <?php
                                                    }
                                                }
                                        ?>

                  </div>
                </div>
              </section>

              <section class="layout-pt-md layout-pb-sm">
               <div class="container">
                 <div class="row">
                   <div class="col-lg-12">
                     <h3 class="text-4xl leading-2xl md:mt-48">Proje Adresi</h3>

                     <div class="row y-gap-32 pt-32">
 <iframe src="<?php echo $tekil_veri_cek["proje_harita"]; ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
                   </div>
                 </div>
               </div>
             </section>


        <section class="related-nav py-40 z-5">
          <div class="container">
            <div class="row justify-content-between align-items-center z-5">
              <div class="col-md-auto col-6">
                <?php
             $veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = 'tr' ORDER BY proje_ust_id DESC LIMIT 1 ");
             if ($veri_cek->rowCount()){
             foreach($veri_cek as $veri_listele){
            ?>
                <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/proje/<?php echo $veri_listele["proje_seo"]; ?>" class="related-nav__item -prev">
                  <div class="related-nav__arrow">
                    <i class="icon icon-left-arrow"></i>
                  </div>
                  <div class="related-nav__content">
                    <span>Sonraki</span>
                    <p><?php echo 	$veri_listele["proje_baslik"]; ?></p>
                  </div>
                </a>
                <?php
              }
              }else{
              "Listelenecek veri bulunamadı.";
              }
              ?>
              </div>

              <div class="col-auto md:d-none">
                <div class="related-nav__icon">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>

              <div class="col-md-auto col-6">
                <?php
             $veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = 'tr' ORDER BY proje_ust_id ASC LIMIT 1 ");
             if ($veri_cek->rowCount()){
             foreach($veri_cek as $veri_listele){
            ?>
                <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/proje/<?php echo $veri_listele["proje_seo"]; ?>" class="related-nav__item -prev">
                  <div class="related-nav__arrow">
                    <i class="icon icon-left-arrow"></i>
                  </div>
                  <div class="related-nav__content">
                    <span>Sonraki</span>
                    <p><?php echo 	$veri_listele["proje_baslik"]; ?></p>
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
          </div>
        </section>
      <?php include 'alt.php'; ?>

</body>
</html>
