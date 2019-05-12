<?php 

include "static/header.php";
include "../baglan.php"
?>

<?php 

include "moduller/sol_menu.php";

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


<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>DASHBOARD</h2>
		</div>

		<!-- Widgets -->
		<div class="row clearfix">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-pink hover-expand-effect">
					<div class="icon">
						<i class="material-icons">playlist_add_check</i>
					</div>
					<div class="content">
						<div class="text">NEW TASKS</div>
						<div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-cyan hover-expand-effect">
					<div class="icon">
						<i class="material-icons">help</i>
					</div>
					<div class="content">
						<div class="text">NEW TICKETS</div>
						<div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-light-green hover-expand-effect">
					<div class="icon">
						<i class="material-icons">forum</i>
					</div>
					<div class="content">
						<div class="text">NEW COMMENTS</div>
						<div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-orange hover-expand-effect">
					<div class="icon">
						<i class="material-icons">person_add</i>
					</div>
					<div class="content">
						<div class="text">NEW VISITORS</div>
						<div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Mesajlar-->
			<section class="content-header">
	          <h3>MESAJ İŞLEMLERİ</h3>
	          <hr />
	        </section>

	   
          	 <div class="row">
            
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <div class="box-tools pull-right">
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                  </div>
                </div><!-- /.box-header -->
                <?php 
                if (!isset($id)) {
                        $id = $_GET['id'];
                    } 

                    $veri = $db->prepare("SELECT * FROM mesaj where mesajId=$id"); 
                    $veri ->execute();
                        if($veri->rowCount()){                           
                        foreach($veri as $row){  
                            $row['mesajId'];
                ?>
                <div class="box-body no-padding">
                  <div class="mailbox-read-info">
                    <h3>Mesaj Konusu: <?php echo $row['konu'] ?></h3>
                    <h4>Gönderen: <?php echo $row['gonderen'] ?> 
                    <span class="mailbox-read-time pull-right"><?php echo $row['gonderme_tarihi'] ?></span>
                    </h4>
                  </div><!-- /.mailbox-read-info -->
                  
                  <div class="mailbox-read-message">
                    <p><?php echo $row['mesaj_icerik']; ?></p>       
                  </div><!-- /.mailbox-read-message -->
                </div><!-- /.box-body --> 
                <?php
                }
                }
                ?>
                <?php                  
                    $guncelle = $db->prepare("UPDATE mesaj SET mesaj_okundu=? WHERE mesajId =".$id."");
                    $guncelle->execute([1]);
                    $hata = $guncelle->errorInfo();                                                                         
                ?>                
                <div class="box-footer">
                 
                  <button class="btn btn-default" ><i class="fa fa-reply"></i><a style="color:black" href="admin_mesaj_yaz.php"> Cevap Yaz</a></button>
                  <button class="btn btn-default pull-right"><i class="fa fa-trash-o"></i> Delete</button>

                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
      
    

       
		<!-- Mesajlar Bitti-->
		
		<!-- Jquery Core Js -->
		<script src="plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap Core Js -->
		<script src="plugins/bootstrap/js/bootstrap.js"></script>

		<!-- Select Plugin Js -->
		<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

		<!-- Slimscroll Plugin Js -->
		<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

		<!-- Waves Effect Plugin Js -->
		<script src="plugins/node-waves/waves.js"></script>

		<!-- Jquery CountTo Plugin Js -->
		<script src="plugins/jquery-countto/jquery.countTo.js"></script>

		<!-- Morris Plugin Js -->
		<script src="plugins/raphael/raphael.min.js"></script>
		<script src="plugins/morrisjs/morris.js"></script>

		<!-- ChartJs -->
		<script src="plugins/chartjs/Chart.bundle.js"></script>

		<!-- Flot Charts Plugin Js -->
		<script src="plugins/flot-charts/jquery.flot.js"></script>
		<script src="plugins/flot-charts/jquery.flot.resize.js"></script>
		<script src="plugins/flot-charts/jquery.flot.pie.js"></script>
		<script src="plugins/flot-charts/jquery.flot.categories.js"></script>
		<script src="plugins/flot-charts/jquery.flot.time.js"></script>

		<!-- Sparkline Chart Plugin Js -->
		<script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

		<!-- Custom Js -->
		<script src="js/admin.js"></script>
		<script src="js/pages/index.js"></script>

		<!-- Demo Js -->
		<script src="js/demo.js"></script>

		<script>
      $(function () {
        //Enable iCheck plugin for checkboxes
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"]').iCheck({
          checkboxClass: 'icheckbox_flat-blue',
          radioClass: 'iradio_flat-blue'
        });

        //Enable check and uncheck all functionality
        $(".checkbox-toggle").click(function () {
          var clicks = $(this).data('clicks');
          if (clicks) {
            //Uncheck all checkboxes
            $("input[type='checkbox']", ".mailbox-messages").iCheck("uncheck");
          } else {
            //Check all checkboxes
            $("input[type='checkbox']", ".mailbox-messages").iCheck("check");
          }
          $(this).data("clicks", !clicks);
        });

        //Handle starring for glyphicon and font awesome
        $(".mailbox-star").click(function (e) {
          e.preventDefault();
          //detect type
          var $this = $(this).find("a > i");
          var glyph = $this.hasClass("glyphicon");
          var fa = $this.hasClass("fa");          

          //Switch states
          if (glyph) {
            $this.toggleClass("glyphicon-star");
            $this.toggleClass("glyphicon-star-empty");
          }

          if (fa) {
            $this.toggleClass("fa-star");
            $this.toggleClass("fa-star-o");
          }
        });
      });
    </script>