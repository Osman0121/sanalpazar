<?php 

include "static/header.php";
include "../../baglan.php"
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
			<div class="col-md-10">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Yeni Mesaj Oluştur</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
						<form action="" method="post" enctype="multipart/form-data">
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
			$gonderen=$_SESSION["email"];
			$alici = $_POST["alici"];
			$konu = $_POST["konu"];
			$mesaj_icerik = $_POST["mesaj_icerik"];
			
			$ekle=$db->prepare("insert into mesaj set gonderen=?,alici=?,konu=?,mesaj_icerik=?");
			$ekle->execute(array($gonderen,$alici,$konu,$mesaj_icerik));
		}
		?>
		<!-- PHP mesaj gönderme KOD -->
		

		
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
<script>
	$(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
    });
</script>