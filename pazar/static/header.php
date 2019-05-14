<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <title>Sanal Pazar | Anasayfa</title>

  <!-- Font awesome -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">   
  <!-- SmartMenus jQuery Bootstrap Addon CSS -->
  <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
  <!-- Product view slider -->
  <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <!-- price picker slider -->
  <link rel="stylesheet" type="text/css" href="css/nouislider.css">
  <!-- Theme color -->
  <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
  <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
  <!-- Top Slider CSS -->
  <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

  <!-- Main style sheet -->
  <link href="css/style.css" rel="stylesheet">    

  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
  <body> 

  	<!-- php üye giriş kontrol -->
    <?php                  
    session_start();
    $v = $db->prepare("select * from kullanici where kullaniciMail=? and kullaniciParola=?");

    if(isset($_POST['btn_giris'])){

      $kullaniciMail = $_POST["kullaniciMail"];
      $kullaniciParola = $_POST["kullaniciParola"];

      $v->execute(array($kullaniciMail,$kullaniciParola));

      $x = $v->fetch(PDO::FETCH_ASSOC);

      $d = $v->rowCount();

      if($d){

        $_SESSION["id"] = $x["kullaniciId"];
        $_SESSION["email"] = $x["kullaniciMail"];
        $_SESSION["uye"] = $x["kullaniciKadi"];
        $_SESSION["durum"] = $x["onayDurumu"];

        if($_SESSION["durum"] == 1){
          header ("Location:kullanici/index.php");      
        }

        else {
          echo '<div class="alert alert-danger">Üyeliğiniz Henüz Onaylanmadı</div>';
          header('Refresh: 2; url=../index.php'); 
        }
      }

      else{
        echo '<div class="alert alert-danger">Kullanıcı Adı veya Parola Yanlış</div>';
        header("refresh: 2; url=account.php");
      } 
    }
    ?>
    <!-- php üye giriş kontrol bitti -->


    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->


    <!-- Start header section -->
    <header id="aa-header">
      <!-- start header top  -->
      <div class="aa-header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-header-top-area">

                <div class="aa-header-top-right">
                  <ul class="aa-head-top-nav-right">
                    <li><a href="account.php">Kayıt Ol</a></li>
                    <li><a href="" data-toggle="modal" data-target="#login-modal">Giriş Yap</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / header top  -->

      <!-- Login Modal -->  
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">                      
           <div class="modal-body">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
         </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
     </div>    



     <!-- start header bottom  -->
     <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.php">
                  <span class="fa fa-shopping-cart"></span>
                  <p>sanal<strong>Pazar</strong> <span>Eğlenceli AlışVeriş</span></p>
                </a>
                
              </div>
              <!-- / logo  -->

              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Aramak istediğiniz ürün veya firma...">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.php">Anasayfa</a></li>
              <li><a href="iletisim.php">İletişim</a></li>              
              <li><a href="#" data-toggle="modal" data-target="#exampleModal1">Hakkımızda</a></li>        
              <li><a href="blog-archive.html">Ürünler<span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="blog-archive.html">Blog Style 1</a></li>
                  <li><a href="blog-archive-2.html">Blog Style 2</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>                
                </ul>
              </li>
              <li><a href="#">Sepet</a></li> 
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
    <!--Hakkımızda Bilgileri-->
    
    <?php 
        $id=1;
        $veri= $db->query("SELECT * FROM admin where adminId='$id'", PDO::FETCH_ASSOC);            
              foreach($veri as $row){  
                $row['adminId'];
    ?>

    <!--Hakkımızda Bilgileri Bitiş-->
    <!--Hakkımızda-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
       <div class="modal-content">
        <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; text-align:center">Hakkımızda</h5>   
       </div>
       <div class="modal-body">
        <p>
          Sanal Pazar Hakkında:<br>
          <?php echo $row['adminHakkinda'] ?><br><br>
          Eposta Adresimiz:<br>
          <?php echo $row['adminMail'] ?><br><br>
          Telefon Numaramız:<br>
          <?php echo $row['adminTel'] ?><br>
        </p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>
  <?php
  }
  ?>  

<!--Hakkımızda Bitiş-->