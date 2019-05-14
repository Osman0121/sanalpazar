<?php 
require_once("../../baglan.php"); 
include "static/header.php";
include "moduller/sol_menu.php";
?>

<!--Ürün Ekleme-->
<div class="col-lg-3"></div>

<div class="col-lg-9">
        <br><br> <br><br>
        <h4>ÜRÜN İŞLEMLERİ</h4>
        <hr>  
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Ürün İsim</label>
            <input class="form-control" name="urun_isim">                                    
        </div>

        <div class="form-group">
            <label>Ürün Kategori</label>
            <?php $kategorilist = $db->query("SELECT * FROM kategori where firmaId=1")->fetchAll(PDO::FETCH_ASSOC); ?>
            <select class="form-control" name="urun_kategori">
                <option>Bir Kategori Seçiniz</option>
                <?php 
                foreach ($kategorilist as $key => $value) {
                    echo '<option value="'.$value['kategoriId'].'">'.$value['kategoriTitle'].'</option>';
                }
                ?>                                                                                        
            </select>
        </div>

        <div class="form-group">
            <label>Ürün Fiyat</label>
            <input class="form-control" name="urun_fiyat" >                                    
        </div>

        <div class="form-group">
            <label>Ürün Resim</label>
            <input type="file" name="urun_resim" >
        </div>
        <button type="button" class="btn btn-danger btn-sm" >İptal</button>
        <button type="submit" class="btn btn-primary btn-sm" name="btn_kaydet">Kaydet</button>  

    </form> 
    <!-- ÜRÜN EKLEME BİTTİ -->

<?php

if(isset($_POST['btn_kaydet'])){

    $kategoriId = $_POST["urun_kategori"];
    $urunAdi = $_POST["urun_isim"];
    $urunBirimFiyat = $_POST["urun_fiyat"];
    @$urun_resim = $_POST["urun_resim"];

    if($_FILES){
                             
                                $maxSize = 7000000;
                                $dosyaUzantisi = substr($_FILES["urun_resim"]["name"],-4,4);
                                $dosyaAdi      = rand(1,999999).$dosyaUzantisi;
                                $dosyaYolu     = "upload/".$dosyaAdi; 
                              
                             
                                if($_FILES["urun_resim"]["size"]> $maxSize){
                                                
                                    echo '<div class="alert alert-warning">dosya boyutu 700 kb dan buyuk olamaz..</div>';
                    
                                                
                                    }
                                    else{
                                                
                                            $dosya = $_FILES["urun_resim"]["type"];
                                                    
                                                    if($dosya == "image/jpeg" || $dosya == "image/png" || $dosya == "image/gif"){
                                                            
                                                        if(is_uploaded_file($_FILES["urun_resim"]["tmp_name"])){
             
                                                        
                                                        $ok = move_uploaded_file($_FILES["urun_resim"]["tmp_name"],$dosyaYolu);
                                                        
                                                        if($ok){
                                                        
                                                        $urun_resim = $dosyaYolu;
                                                            
                                                        }else {
                                                            
                                                        echo '<div class="alert alert-warning">dosya tasınamadı...</div>';

                                                            
                                                        }
                                                                
                                                            }else{
                                                                
                                                                 echo '<div class="alert alert-warning">dosya yuklenemedi..</div>';
                                                            }
                                                                                                 
                                                            
                                                        }else{
                                                            
                                                            echo '<div class="alert alert-warning">dosya formati sadece resim olmalıdır...</div>';
                                                            
                                                        }                                      
                                                
                                            }
                             
                         }
    
    $ekle=$db->prepare("insert into urun set kategoriId=?,urunAdi=?,urunBirimFiyat=?,urun_resim=?");
    $ekle->execute(array($kategoriId,$urunAdi,$urunBirimFiyat,$urun_resim));

}



?>
</div>



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