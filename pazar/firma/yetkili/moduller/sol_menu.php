    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $uye; ?></div>
                    <div class="email"><?php echo $mail; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="index.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">İşlemler</li>
                    <li class="active">
                        <a href="yetkili_sayfasi.php">
                            <i class="material-icons">home</i>
                            <span>Anasayfa</span>
                        </a>
                    </li>
                    
                    
                    <li>
                     <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>Kategori İşlemleri</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="kategori.php" >
                              <span>Kategori Ekle</span>
                          </a>

                      </li>
                      <li>
                       <a href="kategori_liste.php">
                          <span>Kategori Düzenle</span>
                      </a>
                  </li>
                  <li>
                   <a href="kategori_liste.php">
                      <span>Kategori Kaldır</span>
                  </a>
              </li>

          </li>
      </ul>
  </li>
  <li>
     <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">local_offer</i>
        <span>Ürün İşlemleri</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="urun.php" >
              <span>Ürün Ekle</span>
          </a>

      </li>
      <li>
       <a href="urun_liste.php">
          <span>Ürün Düzenle</span>
      </a>
  </li>
  <li>
   <a href="urun_liste.php">
      <span>Ürün Kaldır</span>
  </a>
</li>

</li>
</ul>
</li>
<li>
                     <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">turned_in_not</i>
                        <span>Kampanya İşlemleri</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="kampanya.php" >
                              <span>Kampanya Oluştur</span>
                          </a>

                      </li>
                      
                  <li>
                   <a href="kampanya_liste.php">
                      <span>Kampanya Kaldır</span>
                  </a>
              </li>

          </li>
      </ul>
  </li>

<li>
    							<a href="javascript:void(0);" class="menu-toggle">
    								<i class="material-icons">message</i>
    								<span>Mesajlar</span>
    							</a>
    							<ul class="ml-menu">
    								<li>
    									<a href="mesajlar.php" >
    										<span>Gelen Kutusu</span>
    									</a>
    									
    								</li>
    								<li>
    									<a href="yetkili_mesaj_gönderilen.php">
    										<span>Gönderilen Kutusu</span>
    									</a>
    									
    								</li>
                                    <li>
                                        <a href="yetkili_mesaj_yaz.php">
                                            <span>Yeni Mesaj Oluştur</span>
                                        </a>
                                        
                                    </li>
    							</ul>
    						</li>


</ul>
</li>
</ul>
</li>
</div>
<!-- #Menu -->
<?php
include "static/footer.php";
?>