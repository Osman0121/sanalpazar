<?php 
require_once("baglan.php"); 
include "static/header.php";
?>
<!-- catg header banner section -->
<section id="aa-catg-head-banner">
  <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
  <div class="aa-catg-head-banner-area">
   <div class="container">
    <div class="aa-catg-head-banner-content">
      <h2>Kayıt Olma Sayfası</h2>
      <ol class="breadcrumb">
        <li><a href="index.html">Anasayfa</a></li>                   
        <li class="active">Kayıt Ekranı</li>
      </ol>
    </div>
  </div>
</div>
</section>
<!-- / catg header banner section -->

<!-- Cart view section -->
<section id="aa-myaccount">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
      <div class="aa-myaccount-area">         
        <div class="row">
          <div class="col-md-6">
            <div class="aa-myaccount-login">
              <h4>Giriş Yap</h4>
              <form class="aa-login-form" action="" method="post">
              <label for="">Kullanıcı Mail<span>*</span></label>
                <input type="text" name="kullaniciMail" placeholder="Email Adresiniz...">             
                <label for="">Parola<span>*</span></label>
                <input type="password" name="kullaniciParola" placeholder="Şifreniz...">   
                <button type="submit" name="btn_giris" class="aa-browse-btn">Giriş Yap</button>
              <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Beni Hatırla </label>
              <p class="aa-lost-password"><a href="#">Şifreni mi unuttun?</a></p>
              <div class="aa-register-now">
                Hesabınız yok mu?<a href="account.php">Hemen Kayıt Ol!</a>
              </div>
            </form>
            </div>
          </div>

          

          <div class="col-md-6">
            <div class="aa-myaccount-register">                 
             <h4>Kayıt Ol</h4>
             <form action="" class="aa-login-form" method="post">
              <label for="">Kullanıcı Mail<span>*</span></label>
              <input type="text" name="kullaniciMail" placeholder="Email Adresinizi Giriniz..">
              <label for="">Kullanıcı Adı<span>*</span></label>
              <input type="text" name="kullaniciKadi" placeholder="Kullanıcı Adınızı Giriniz..">
              <label for="">Parola<span>*</span></label>
              <input type="password" name="kullaniciParola" placeholder="Şifrenizi Giriniz..">            
              <input type="checkbox" name="kullaniciBildirimAlmak" value="1"> Kampanyalar ve İndirimler Hakkında Mail Almak İstiyorum.<br>
              <input type="checkbox" name="kullaniciUyelikSözlesmesi" value="1"> Üyelik Sözleşmesini Okudum, Kabul Ediyorum.<br>
              <button type="submit" name="btn_kayit" class="aa-browse-btn">Kayıt Ol</button>                    
            </form>
          </div>
        </div>
      </div>          
    </div>
  </div>
</div>
</div>
</section>
<!-- / Cart view section -->

<!-- php uye ekleme -->
  <?php 
    if(isset($_POST['btn_kayit'])){
      $kullaniciMail = $_POST["kullaniciMail"];
      $kullaniciKadi = $_POST["kullaniciKadi"];
      $kullaniciParola = $_POST["kullaniciParola"];
      @$kullaniciBildirimAlmak = $_POST["kullaniciBildirimAlmak"];
      @$kullaniciUyelikSözlesmesi = $_POST["kullaniciUyelikSözlesmesi"];       
      if (empty($_POST["kullaniciUyelikSözlesmesi"])) {
        $kullaniciUyelikSözlesmesi=0;
        # code...
      }
      if (empty($_POST["kullaniciBildirimAlmak"])) {
        $kullaniciBildirimAlmak=0;
        # code...
      }
      $ekle=$db->prepare("insert into kullanici set kullaniciMail=?,kullaniciKadi=?,kullaniciParola=?,kullaniciBildirimAlmak=?,kullaniciUyelikSözlesmesi=?");
      $ekle->execute(array($kullaniciMail,$kullaniciKadi,$kullaniciParola,$kullaniciBildirimAlmak,$kullaniciUyelikSözlesmesi));
    }
  ?>
  <!-- php uye ekleme -->


<?php
include "static/footer.php";
?>