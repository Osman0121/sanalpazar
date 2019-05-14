<?php

include "static/header.php";
include "moduller/sol_menu.php";
include "../../baglan.php"
?>
<!--Kategori İşlemleri-->
<div class="container">

    <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-9"><br><br><br><br><br>
            <h3 class="text-center">Kategori / Alt Kategori İşlemleri</h3>
            <div class="row">
             <div class="col-md-6" style="background:#b9b6f9">
                 <h4 class="text-center">Kategori Ekleme</h4>
                 <hr>
                 <form action="" method="post">
                    <div class="form-group">
                        <label>Kategori Adı</label>
                        <input class="form-control" name="kategori_adi">                                    
                    </div>
                    <div class="form-group">
                        <label>Kategori Açıklama</label>
                        <input class="form-control" name="kategori_aciklama">
                    </div>
                    <div class="form-group">
                        <label>Varsa Üst Kategori</label>
                        
                        <?php $ustkategorilist = $db->query("SELECT * FROM kategori where firmaId=1")->fetchAll(PDO::FETCH_ASSOC); ?>
                        <select class="form-control" name="parent_id">
                            <option>Yok</option>
                            <?php 
                            foreach ($ustkategorilist as $key => $value) {
                                echo '<option value="'.$value['kategoriId'].'">'.$value['kategoriTitle'].'</option>';
                            }
                            ?>                                                                                        
                        </select>
                    </div> 
                    <button type="submit" class="btn btn-primary btn-sm" name="btn_kaydet">Kaydet</button>                                        
                    <button type="reset" class="btn btn-danger btn-sm">İptal</button>
                    
                    <br><br>                       
                </form>
            </div> 
            <div class="col-md-6">
              <div class="col-md-11 well" style="background:#b9b6f9">
                <h4 class="text-center">Kategori Hiyerarşisi</h4>
                <hr>


            </div>
        </div>
    </div>
</div>
<?php
$id=1;                     
if(isset($_POST['btn_kaydet'])){
    $firmaId=$id;
    $kategori_adi = $_POST["kategori_adi"];
    $kategori_aciklama = $_POST["kategori_aciklama"];
    $parent_id = $_POST["parent_id"];              
}

$ekle=$db->prepare("insert into kategori set firmaId=?,kategoriTitle=?,kategoriDesc=?,parentId=?");
@$ekle->execute(array($firmaId,$kategori_adi,$kategori_aciklama,$parent_id));

?>



<!--Kategori İşlemleri Bitişs-->
<!-- Jquery Core Js -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>
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