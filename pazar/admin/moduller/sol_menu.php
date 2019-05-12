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
    					<a href="admin_sayfasi.php">
    						<i class="material-icons">home</i>
    						<span>Anasayfa</span>
    					</a>
    				</li>
    						<li>
    							<a href="javascript:void(0);" class="menu-toggle">
    								<i class="material-icons">layers</i>
    								<span>Yetkilendirme İşlemleri</span>
    							</a>
    							<ul class="ml-menu">
    								<li>
    									<a href="javascript:void(0);" class="menu-toggle">
    										<span>Kullanıcı İşlemleri</span>
    									</a>
    									<ul class="ml-menu">
    										<li>
    											<a href="onay_listesi.php">Onay İşlemleri</a>
    										</li>
    										
    									</ul>
    								</li>
    								<li>
    									<a href="javascript:void(0);" class="menu-toggle">
    										<span>Firma İşlemleri</span>
    									</a>
    									<ul class="ml-menu">
    										<li>
    											<a href="firma_onay.php">Onay İşlemleri</a>
    										</li>
    										
    									</ul>
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
    									<a href="admin_mesaj_gönderilen.php">
    										<span>Gönderilen Kutusu</span>
    									</a>
    									
    								</li>
                                    <li>
                                        <a href="admin_mesaj_yaz.php">
                                            <span>Yeni Mesaj Oluştur</span>
                                        </a>
                                        
                                    </li>
    							</ul>
    						</li>
    						<li>
    							<a href="javascript:void(0);" class="menu-toggle">
    								<i class="material-icons">notifications</i>
    								<span>Bildirimler</span>
    							</a>
    							<ul class="ml-menu">
    								<li>
    									<a href="javascript:void(0);" class="menu-toggle">
    										<span>Kullanıcı Bildirimleri</span>
    									</a>
    									<ul class="ml-menu">
    										<li>
    											<a href="pages/widgets/cards/basic.html">Basic</a>
    										</li>
    										<li>
    											<a href="pages/widgets/cards/colored.html">Colored</a>
    										</li>
    										<li>
    											<a href="pages/widgets/cards/no-header.html">No Header</a>
    										</li>
    									</ul>
    								</li>
    								<li>
    									<a href="javascript:void(0);" class="menu-toggle">
    										<span>Yetkili Bildirimleri</span>
    									</a>
    									<ul class="ml-menu">
    										<li>
    											<a href="pages/widgets/infobox/infobox-1.html">Infobox-1</a>
    										</li>
    										<li>
    											<a href="pages/widgets/infobox/infobox-2.html">Infobox-2</a>
    										</li>
    										<li>
    											<a href="pages/widgets/infobox/infobox-3.html">Infobox-3</a>
    										</li>
    										<li>
    											<a href="pages/widgets/infobox/infobox-4.html">Infobox-4</a>
    										</li>
    										<li>
    											<a href="pages/widgets/infobox/infobox-5.html">Infobox-5</a>
    										</li>
    									</ul>
    								</li>
    							</ul>
    						</li>

    					</ul>
    				</div>
    				<!-- #Menu -->
    				<?php
    				include "static/footer.php";
    				?>