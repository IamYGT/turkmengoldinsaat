<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Kariyer - Gaziantep Türkmen Gold İnşaat</title>
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
            <div data-parallax-target="" class="bg-image js-lazy" data-bg="<?php echo $ayarlar["strURL"]; ?>/img/backgrounds/4.jpg"></div>
          </div>
          <div class="container">
            <div class="page-masthead__content">
              <div class="row justify-content-between md:justify-content-center align-items-center">
                <div class="col-lg-9 col-md-10">
                  <div data-anim="slide-up delay-1">
                    <div class="page-masthead__subtitle">Türkmen Gold Yatırım İnşaat Sanayi ve Tic. A.Ş</div>
                    <h1 style="text-transform: uppercase;  font-size: 60px; line-height: 1.5; font-weight: 600" class="page-masthead__title text-white">Kariyer</h1>
                  </div>
                </div>
                <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba="" href="<?php echo $ayarlar["strURL"]; ?>/index" class="page-masthead-bread__item">Anasayfa</a>
                    /
                    <a data-barba="" href="#" class="page-masthead-bread__item ">Kariyer</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="layout-pt-lg layout-pb-xl md:pb-64">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-xl-12 col-lg-12 ">

                           <?php
                            if(isset($submit)){
                              if(!empty($isim) || !empty($pozisyon) || !empty($telefon) || !empty($eposta) || !empty($dtarih) || !empty($dyeri) || !empty($cinsiyet) || !empty($ogretim) ||   !empty($document) ||   !empty($aciklama)){
                                  // require 'include/PHPMailer/src/Exception.php';
                                                            // require 'include/PHPMailer/src/PHPMailer.php';
                                                            // require 'include/PHPMailer/src/SMTP.php';


                                if ($_FILES["document"]) {
                                  $yol = "uploads/document";
                                  $dosyaAdi = uniqid().'-'.$_FILES["document"]["name"];
                                  $yuklemeYeri = __DIR__ . DIRECTORY_SEPARATOR . $yol . DIRECTORY_SEPARATOR . $dosyaAdi;
                                  if ($_FILES["document"]["size"]  > 5000000) {
                                    $error = array(
                                      'type'	=>	'danger',
                                      'title'	=>	'Hata!',
                                      'text'	=>	'Maksimum 5MB dosya yükleyebilirsiniz. <a class="alert-link" href="/index"> burayı tıklayın </a> ..'
                                    );
                                    // return;
                                  } else {
                                    $dosyaUzantisi = pathinfo($_FILES["document"]["name"], PATHINFO_EXTENSION);
                                    if ($dosyaUzantisi != "pdf" && $dosyaUzantisi != "word" && $dosyaUzantisi != "jpg") { # Dosya uzantı kontrolü
                                      $error = array(
                                        'type'	=>	'danger',
                                        'title'	=>	'Hata!',
                                        'text'	=>	'Sadece jpg ve png uzantılı dosyalar yüklenebilir. <a class="alert-link" href="/index"> burayı tıklayın </a> ..'
                                      );
                                      // return;
                                    } else {
                                     //uploads/document/605661a8b1a7a-kvkk-formu.pdf
                                      $YuklemeDurumu = move_uploaded_file($_FILES["document"]["tmp_name"], $yuklemeYeri);
                                      $dosyaLink = $dosyaAdi;
                                    }
                                  }
                                } else {
                                  $error = array(
                                    'type'	=>	'danger',
                                    'title'	=>	'Hata!',
                                    'text'	=>	'Lütfen bir dosya seçiniz <a class="alert-link" href="/index"> burayı tıklayın </a> ..'
                                  );
                                  // return;
                                }
                                                            require_once("include/phpmailer/class.phpmailer.php");
                                                            $mail = new PHPMailer(true);
                                                            $mail->IsSMTP();
                                                            $mail->SMTPDebug = 1;
                                                            $mail->SMTPAuth = true;
                                                            $mail->SMTPSecure = 'ssl';
                                                            $mail->Host = 'smtp.yandex.ru';
                                                            $mail->Port = 465;
                                                            $mail->IsHTML(true);
                                                            $mail->SetLanguage("tr", "phpmailer/language");
                                                            $mail->CharSet ="utf-8";
                                                            $mail->Username = "info@turkmengoldinsaat.com"; //yandex mail adresi
                                                            $mail->Password = "tqvkacyhqulfjqkt";
                                                            $mail->SetFrom("info@turkmengoldinsaat.com", "Kariyer Formundan Gelen Mesaj"); // Mail attığımızda yazacak isim
                                                            $mail->AddAddress("info@turkmengoldinsaat.com"); // Maili gondereceğimiz kişi/alıcı
                                                            $mail->Subject = "Kariyer Formundan Gelen Mesaj"; // Konu başlığı
                                                            $mail->Body = '
                                                            <html>
                                                                <body>
                                                                    <table class="made-in_text" border="0" cellSpacing="10" cellPadding="4" height="254" width="700">
                                        <tr>
                                                                            <td height="30" width="145" align="left">
                                                                            <font face="Tahoma" size="2"><strong>Adı :</strong></font></td>
                                                                            <td align="left" width="509" bgcolor="#F6FDEC">
                                                                            <font size="2" face="Tahoma">'. $isim . '</font></td>
                                                                        </tr>
                                         <tr>
                                                                            <td height="30" width="145" align="left">
                                                                            <font face="Tahoma" size="2"><strong>Eposta :</strong></font></td>
                                                                            <td align="left" width="509" bgcolor="#F6FDEC">
                                                                            <font size="2" face="Tahoma">'. $eposta . '</font></td>
                                                                        </tr>
                                         <tr>
                                                                            <td height="30" width="145" align="left">
                                                                            <font face="Tahoma" size="2"><strong>Telefon :</strong></font></td>
                                                                            <td align="left" width="509" bgcolor="#F6FDEC">
                                                                            <font size="2" face="Tahoma">'. $telefon . '</font></td>
                                                                        </tr>
                                         <tr>
                                                                            <td height="30" width="145" align="left">
                                                                            <font face="Tahoma" size="2"><strong>İş Pozisyonu :</strong></font></td>
                                                                            <td align="left" width="509" bgcolor="#F6FDEC">
                                                                            <font size="2" face="Tahoma">'. $pozisyon . '</font></td>
                                                                        </tr>
                                         <tr>
                                                                            <td height="30" width="145" align="left">
                                                                            <font face="Tahoma" size="2"><strong>Doğum Tarihi :</strong></font></td>
                                                                            <td align="left" width="509" bgcolor="#F6FDEC">
                                                                            <font size="2" face="Tahoma">'. $dtarih . '</font></td>
                                                                        </tr>
                                         <tr>
                                                                            <td height="30" width="145" align="left">
                                                                            <font face="Tahoma" size="2"><strong>Doğum Yeri :</strong></font></td>
                                                                            <td align="left" width="509" bgcolor="#F6FDEC">
                                                                            <font size="2" face="Tahoma">'. $dyeri . '</font></td>
                                                                        </tr>
                                         <tr>
                                                                            <td height="30" width="145" align="left">
                                                                            <font face="Tahoma" size="2"><strong>Cinsiyet :</strong></font></td>
                                                                            <td align="left" width="509" bgcolor="#F6FDEC">
                                                                            <font size="2" face="Tahoma">'. $cinsiyet . '</font></td>
                                                                        </tr>
                                         <tr>
                                                                            <td height="30" width="145" align="left">
                                                                            <font face="Tahoma" size="2"><strong>Eğitim Durumu :</strong></font></td>
                                                                            <td align="left" width="509" bgcolor="#F6FDEC">
                                                                            <font size="2" face="Tahoma">'. $egitim . '</font></td>
                                                                        </tr>

                                         <tr>
                                                                            <td height="30" width="145" align="left">
                                                                            <font face="Tahoma" size="2"><strong>CV :</strong></font></td>
                                                                            <td align="left" width="509" bgcolor="#F6FDEC">
                                                                            <font size="2" face="Tahoma">'. 'https://www.turkmengoldinsaat.com/uploads/document/'.$dosyaLink . '</font></td>
                                                                        </tr>
                                         <tr>
                                                                            <td height="30" width="145" align="left">
                                                                            <font face="Tahoma" size="2"><strong>Hakkında Bilgiler :</strong></font></td>
                                                                            <td align="left" width="509" bgcolor="#F6FDEC">
                                                                            <font size="2" face="Tahoma">'. $aciklama . '</font></td>
                                                                        </tr>

                                                                    </table>
                                                                </body>
                                                            </html>
                                                            '; // Mailin içeriği

                                if($mail->send()){
                                  $error = array(
                                    'type'	=>	'success',
                                    'title'	=>	'Başarılı!',
                                    'text'	=>	'Talebiniz başarıyla gönderildi, Ana sayfaya dönmek için <a class="alert-link" href="/index"> burayı tıklayın </a> ..'
                                  );
                                } else {
                                  $error = array(
                                    'type'	=>	'danger',
                                    'title'	=>	'Hata!',
                                    'text'	=>	'Mesajınız Gönderilemedi.'
                                  );
                                }
                              } else {
                                $error = array(
                                  'type'	=>	'danger',
                                    'title'	=>	'Hata!',
                                    'text'	=>	'Mesajınız Gönderilemedi.'
                                );
                              }
                            }
                ?>


                          <?php
                if(isset($error)) {
                ?>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="alert alert-<?php echo $error["type"]; ?> solid alert-dismissible fade show">
                        <strong><?php echo $error["title"]; ?></strong>
                        <p><?php echo $error["text"]; ?></p>
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>

                            <form class="form" action="" method="POST" enctype="multipart/form-data">

                          <div class="row">

                                <div class="col-xl-6">
                                                        <div class="contact_page1__item">
                                                            <input class="form-control" type="text" name="isim" placeholder="Adınız" required="">
                                                         </div>
                                                    </div>
                              <div class="col-xl-6">
                                                        <div class="contact_page1__item">
                                                            <input class="form-control" type="text" name="eposta" placeholder="E-Mail Adresiniz" required="">
                                                         </div>
                                                    </div>

                              <div class="col-xl-6">
                                                        <div class="contact_page1__item">
                                                            <input class="form-control" type="text" name="telefon" placeholder="Telefon" required="">
                                                         </div>
                                                    </div>

                              <div class="col-xl-6">
                                                        <div class="contact_page1__item">
                                                            <input class="form-control" type="text" name="pozisyon" placeholder="İş Pozisyonu" required="">
                                                         </div>
                                                    </div>





                              <div class="col-xl-6">
                                                        <div class="contact_page1__item">
                                                            <input class="form-control" type="text" name="dtarih" placeholder="Doğum Tarihiniz" required="">
                                                         </div>
                                                    </div>





                              <div class="col-xl-6">
                                                        <div class="contact_page1__item">
                                                            <input class="form-control" type="text" name="dyeri" placeholder="Doğum Yeriniz" required="">
                                                         </div>
                                                    </div>

                              <div class="col-xl-6">
                                                        <div  class="contact_page1__item">
                                  <div   class="form-group">
                                    <select class="form-control" id="cinsiyet"  name="cinsiyet" >
                                    <option selected>Cinsiyet Seçiniz</option>
                                    <option value="Erkek" >Erkek</option>
                                    <option value="Kadın" >Kadın</option>
                                    </select>
                                  </div>
                                </div>
                                                    </div>

                              <div class="col-xl-6">
                                <div  class="contact_page1__item">
                                  <div   class="form-group">
                                    <select  id="egitim" name="egitim" class="form-control"   >
                                          <option selected="">Eğitim</option>
                                          <option value="İlkokul">İlkokul</option>
                                          <option value="Ortaokul">Ortaokul</option>
                                          <option value="Lise">Lise</option>
                                          <option value="Üniversite">Üniversite</option>
                                    </select>
                                  </div>
                                </div>
                                                    </div>


                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <div class="entry">
                                         <div class="mb-3">
                                          <label for="formFile" class="form-label">CV</label>
                                          <input style="    padding: 28px 20px 49px 31px;" id="dosya" name="document" class="form-control" type="file">
                                        </div>
                                      </div>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <div class="entry">
                                        <label>Hakkınızda Bilgiler</label>
                                        <textarea class="form-control" id="aciklama" name="aciklama" required="required" data-error="Please,leave us a message."></textarea>
                                      </div>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="text-center">
                                      <button type="submit" name="submit" class="button -md -dark text-white">Gönder</button>
                                    </div>
                                  </div>

                                </div></form>
                              </div>
            </div>
          </div>
        </section>
<?php include 'alt.php'; ?>

</body>
</html>
