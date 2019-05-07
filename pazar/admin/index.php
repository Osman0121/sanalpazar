 <?php
 include "../baglan.php" ;

 ?>
 <title>Admin Paneli</title>

 <!-- Font awesome -->
 <link href="css/font-awesome.css" rel="stylesheet">
 <!-- Bootstrap -->
 <link href="../css/bootstrap.css" rel="stylesheet">   
 <!-- SmartMenus jQuery Bootstrap Addon CSS -->
 <link href="../css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
 <!-- Product view slider -->
 <link rel="stylesheet" type="text/css" href="../css/jquery.simpleLens.css">    
 <!-- slick slider -->
 <link rel="stylesheet" type="text/css" href="../css/slick.css">
 <!-- price picker slider -->
 <link rel="stylesheet" type="text/css" href="../css/nouislider.css">
 <!-- Theme color -->
 <link id="switcher" href="../css/theme-color/default-theme.css" rel="stylesheet">


 <!-- Main style sheet -->
 <link href="../css/style.css" rel="stylesheet">    

 <!-- Google Font -->
 <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
 <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
 <div class="container"> 

    <form class="aa-login-form" action="" method="post">
        <div class="col-md-3"></div>
        <div class="container col-md-6">
            <h2>ADMİN PANELİ GİRİŞ SAYFASI</h2>
            <hr>
            <label for="">Kullanıcı Adı<span>*</span></label>
            <input type="text" name="adminKullaniciAdi" placeholder="Kullanıcı Adınızı Giriniz.." required>             
            <label for="">Parola<span>*</span></label>
            <input type="password" name="adminParola" placeholder="Parolanızı Giriniz.." required>   
            <button type="submit" name="btn_giris" class="aa-browse-btn">Giriş Yap</button>
        </div>
        <div class="col-md-3"></div>
    </form>
</div>

<!-- php admin giriş kontrol -->
<?php      

session_start();
$v = $db->prepare("select * from admin where adminKullaniciAdi=? and adminParola=?");

if(isset($_POST['btn_giris'])){

  $adminKulAd = $_POST["adminKullaniciAdi"];
  $adminPass = $_POST["adminParola"];

  $v->execute(array($adminKulAd,$adminPass));

  $x = $v->fetch(PDO::FETCH_ASSOC);

  $d = $v->rowCount();

  if($d){

      $_SESSION["id"] = $x["adminId"];
      $_SESSION["email"] = $x["adminMail"];
      $_SESSION["uye"] = $x["adminKullaniciAdi"];

      header ("Location:admin_sayfasi.php");      

  }
}
?>
          <!-- php admin giriş kontrol bitti -->