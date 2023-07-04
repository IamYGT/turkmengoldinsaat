<header class="header  js-header">
 <div class="header__bar  js-header-bar">
   <div class="row justify-content-between align-items-center">
     <div class="col-auto z-5 js-header-item">
       <div class="header__item -margin-sm">
         <div class="header__logo text-white js-header-logo">
           <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/index">
             <img class="kucult" style="width: 250px;" src="<?php echo $ayarlar["strURL"]; ?>/img/logo.png" alt="Türkmen Gold İnşaat Logo">
           </a>
         </div>
       </div>
     </div>
     <div class="menu js-menu ">
       <div class="mobile__background js-mobile-bg"></div>
       <div class="menu__container">
         <div class="mobile__back js-nav-list-back pointer-events-none">
           <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a>
         </div>
         <ul class="nav js-navList ">

           <li class="text-white ">
             <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/index">ANASAYFA</a>
           </li>

           <li class="text-white ">
             <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/kurumsal">KURUMSAL</a>
           </li>

           <li class="text-white menu-item-has-children">
             <a data-barba="" href="#">PROJELERİMİZ</a>

             <ul class="nav__submenu">

               <?php
                      $veri_cek = $db->query("SELECT * FROM kategoriler WHERE altkategori_id = 0");
                      if ($veri_cek->rowCount()){
                      foreach($veri_cek as $veri_listele){
               ?>
                                                                  <li  class="nav__submenu_item" ><a data-barba=""  href="<?php echo $ayarlar["strURL"]; ?>/projeler/<?php echo $veri_listele["kategori_seo"]; ?>"><?php echo $veri_listele["kategori_baslik"]; ?></a></li>
                                        <?php
                        }
                      }else{
                        "Listelenecek veri bulunamadı.";
                      }
               ?>


             </ul>
           </li>
           <li class="text-white">
             <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/haberler">HABERLER</a>
           </li>
           <li class="text-white">
             <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/kariyer">KARİYER</a>
           </li>
           <li class="text-white">
             <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/kvkk">KVKK</a>
           </li>
           <li class="text-white">
             <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İLETİŞİM</a>
           </li>
         </ul>
       </div>

       <div class="mobile__footer js-mobile-footer">
         <div class="mobile__socials">
           <a data-barba="" href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>">
             <i class="fa fa-facebook" aria-hidden="true"></i>
           </a>
           <a data-barba="" href="https://www.twitter.com/<?php echo $ayarlar["strTwitter"]; ?>">
             <i class="fa fa-twitter" aria-hidden="true"></i>
           </a>
           <a data-barba="" href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>">
             <i class="fa fa-instagram" aria-hidden="true"></i>
           </a>
           <a data-barba="" href="https://wa.me/<?php echo  $ayarlar["strWhatsappPhone_tr"];  ?>?text=<?php echo  $ayarlar["strWhatsappMessage_tr"];  ?>">
             <i class="fa fa-whatsapp" aria-hidden="true"></i>
           </a>
         </div>

         <div class="mobile__copyright">
           <img src="<?php echo $ayarlar["strURL"]; ?>/img/general/logo-light.svg" alt="logo" class="icon">
           <p>© <?php echo date("Y"); ?> Türkmen Gold İnşaat. Her Hakkı Saklıdır.</p>
         </div>
       </div>
     </div>


     <div class="col-auto z-5 sm:pos-unset js-header-item">
       <div class="header__icons ">
         <div class="header__cart">
           <a href="tel:<?php echo $ayarlar["strPhone"]; ?>">
             <i class="icon text-white fa fa-phone"></i>
           </a>
         </div>
         <div class="header__cart">
           <a href="https://wa.me/<?php echo  $ayarlar["strWhatsappPhone_tr"];  ?>?text=<?php echo  $ayarlar["strWhatsappMessage_tr"];  ?>">
             <i class="icon text-white fa fa-whatsapp"></i>
           </a>
         </div>



         <div class="header__menu">
           <button type="button" class="nav-button-open md:d-none js-sidebar-open">
             <i class="icon text-white icon-menu"></i>
           </button>

           <button type="button" class="nav-button-open d-none md:d-block js-nav-open">
             <i class="icon text-white icon-menu"></i>
           </button>

           <button type="button" class="nav-button-close d-none md:d-block pointer-events-none js-nav-close">
             <i class="icon text-white icon-cross"></i>
           </button>
         </div>
       </div>
     </div>
   </div>
 </div>
</header>
