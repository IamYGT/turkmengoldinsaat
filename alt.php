
        <footer class="footer -type-1">

          <div class="footer__top">
            <div class="container">
              <div class="row y-gap-48 justify-content-between">

                <div class="col-lg-3 col-md-6">
                  <div class="footer__item">
                    <h3 class="footer__title text-white">İLETİŞİM BİLGİLERİ</h3>
                    <div class="footer__content pr-20">
                      <div class="footer__content__item">
                         <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <p> <span>T: </span> <?php echo $ayarlar["strPhone"]; ?></p> </a>
                          <a href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <p> <span>M: </span> <?php echo $ayarlar["strMail"]; ?></p> </a>
                      </div>

                      <div class="footer__content__item">
                        <p><span>A:</span> <?php echo $ayarlar["strAddress"]; ?></p>
                      </div>

                      <div class="footer__content__item">
                         <a data-barba="" href="https://www.google.com/maps?ll=37.108327,37.378503&z=19&t=m&hl=tr&gl=TR&mapclient=embed&cid=13210376445979805681" class="button -simple text-white">HARİTADAN BULUN</a>
                      </div>
                        <div class="footer__socials">
                      <h3 class="footer__title text-white">SOSYAL MEDYA</h3>
                      <div class="footer__socials_content">
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
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="footer__item">
                    <h3 class="footer__title text-white">HIZLI MENÜ</h3>

                    <div class="footer__content">
                      <div class="footer__content__item">
                        <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a>
                      </div>

                      <div class="footer__content__item">
                        <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/kurumsal">Kurumsal</a>
                      </div>

                      <div class="footer__content__item">
                        <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/haberler">Haberler</a>
                      </div>

                      <div class="footer__content__item">
                        <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/kariyer">Kariyer</a>
                      </div>

                      <div class="footer__content__item">
                        <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/kvkk">Kvkk</a>
                      </div>

                      <div class="footer__content__item">
                        <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="footer__item">
                    <h3 class="footer__title text-white">PROJELERİMİZ</h3>

                    <div class="footer__content">
                      <?php
                   $veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = 'tr' ORDER BY proje_ust_id ASC LIMIT 6 ");
                   if ($veri_cek->rowCount()){
                   foreach($veri_cek as $veri_listele){
                  ?>

                      <div class="footer__content__item">
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
                <div class="col-lg-3 col-md-6">
                  <div style="  text-align: center;   padding-top: 64px; " class="footer__item">
                    <img style="  width: 110px;   text-align: center;" src="<?php echo $ayarlar["strURL"]; ?>/img/general/logo-light.svg" alt="Türkmen Gold İnşaat Logo">
                  </div>
                </div>


              </div>
            </div>
          </div>
          <div class="footer__bottom">
            <div class="container">
              <div class="row align-items-center justify-content-between sm:justify-content-start">
                <div class="col-auto sm:order-2">
                  <div class="footer__bottom_text">© <?php echo date("Y"); ?> Türkmen Gold İnşaat. Her Hakkı Saklıdır.</div>
                </div>
                <div class="col-auto sm:order-1">
                  <div class="footer__logo">
                    <img style="    width: 34px;    opacity: 0.7;" src="<?php echo $ayarlar["strURL"]; ?>/img/general/logo-light.svg" alt="Alt Logo">
                  </div>
                </div>
                <div class="col-auto sm:d-none">
                  <div class="footer__bottom_text">Designed by <a href="https://www.memsidea.com" rel="dofollow" > Memsidea </a></div>
                </div>
              </div>
            </div>
          </div>
          <div data-cursor="" class="backButton js-backButton">
            <div class="nav -slider">
              <div class="nav__item -left">
                <i class="icon icon-right-arrow"></i>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </main>
  </div>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="<?php echo $ayarlar["strURL"]; ?>/js/vendors.js"></script>
  <script src="<?php echo $ayarlar["strURL"]; ?>/js/main.js"></script>
