<?php
include "baglan.php";
include "static/header.php";
?>
<!-- PAGE LEVEL STYLES -->
<!-- Font Awesome Icons -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- iCheck -->
<link href="assets/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
<!-- END PAGE LEVEL  STYLES -->
<!-- catg header banner section -->
<section id="aa-catg-head-banner">
 <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
 <div class="aa-catg-head-banner-area">
   <div class="container">
    <div class="aa-catg-head-banner-content">
      <h2>iletişim sayfası</h2>
      <ol class="breadcrumb">
        <li><a href="index.html">Anasayfa</a></li>         
        <li class="active">İletişim</li>
      </ol>
    </div>
  </div>
</div>
</section>
<!-- / catg header banner section -->

<!-- start contact section -->
<section id="aa-contact">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="aa-contact-area">
         <div class="aa-contact-top">
           <h2>Size yardımcı olmak istiyoruz ..</h2>
           <p>Aşağıda iletişim bilgilerimiz mevcut oradan veya aşağıdaki kısımdan bize ulaşabilirsiniz..</p>
         </div>
         
   <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Yeni Mesaj Oluştur</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input class="form-control" name="gonderen" placeholder="  Gönderen:"/>
            </div>
            <div class="form-group">
              <input class="form-control" name="alici" placeholder="  Alıcı:"/>
            </div>
            <div class="form-group">
              <input class="form-control" name="konu" placeholder="  Konu:"/>
            </div>
            <div class="form-group">
              <textarea id="compose-textarea" name="mesaj_icerik" class="form-control" rows="10" placeholder=" Mesajınızı Yazın.."></textarea>
            </div><br>             
          </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-right">
              <button type="submit" name="btn_mesaj" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Gönder</button>
            </div>
          </div><!-- /.box-footer -->
        </form>
      </div><!-- /. box -->
    </div><!-- /.col -->
  </div><!-- /.row -->

  <!-- PHP mesaj gönderme KOD -->
  <?php                     
  if(isset($_POST['btn_mesaj'])){

    $gonderen=$_POST["gonderen"];
    $alici = $_POST["alici"];
    $konu = $_POST["konu"];
    $mesaj_icerik = $_POST["mesaj_icerik"];
    
    $ekle=$db->prepare("insert into mesaj set gonderen=?,alici=?,konu=?,mesaj_icerik=?");
    $ekle->execute(array($gonderen,$alici,$konu,$mesaj_icerik));
  }
  ?>
  <!-- PHP mesaj gönderme KOD -->
            <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>SanalPazar</h4>
                     <p>İletişim Bilgilerimize Buradan Ulaşabilirsiniz.</p><hr>
                     <p><span class="fa fa-home"></span>Merkez, ELAZIĞ</p>
                     <p><span class="fa fa-phone"></span>+ 021.343.7575</p>
                     <p><span class="fa fa-envelope"></span>Email: onay0121@gmail.com</p>
                   </address>
                 </div>
               </div>             
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<?php 
include "static/footer.php";
?>