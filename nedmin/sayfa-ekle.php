<?php include 'header.php';?>
<?php include 'sidebar.php';?>



<head>
    <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
</head>

<!-- İndex Göbek -->

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SAYFA EKLİYORSUNUZ</h1>


                <?php 
                if ($_GET['durum']=="ok") { ?>
                <h1 style="color: green;" class="page-subhead-line">Sayfa başarıyla eklendi...</h1>

                <?php } 
                elseif ($_GET['durum']=="no") { ?>
                <h1 style="color: red;" class="page-subhead-line">Sayfa Eklenemedi.</h1>

                <?php } else{ ?>
                <h1 class="page-subhead-line">Sitenize Sayfa ekliyorsunuz.</h1>
                <?php  }

                ?>

            </div>
        </div>
        <!-- /. ROW  -->

        <form action="netting/islem.php" method="post">
           <div class="col-md-12">
            <div class="form-group col-md-3">
                <input style="width: 100%" class="btn btn-success" type="submit" name="sayfakaydet" value="Sayfa Kaydet"> 
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Sayfa Adı:</label>
                <input class="form-control" type="text" name="sayfa_ad" placeholder="Sayfa Adı Giriniz"> 
            </div>  
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-12">
                <label>Sayfa İçerik:</label>
                <textarea name="sayfa_icerik" class="ckeditor"></textarea> 
            </div>  
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Sayfa Sıra:</label>
                <input class="form-control" type="text" name="sayfa_sira" placeholder="Syafa Sırasını Giriniz"> 
            </div>  
        </div>
        <div class="col-md-12">
        <div class="form-group col-md-6">
        <label>Anasayfada Göster</label>
            <select name="sayfa_anasayfa"  class="form-control">
                <option value="0">HAYIR</option>
                <option value="1">EVET</option>
                
            </select>
        </div>
        </div>


    </form>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->







<?php include 'footer.php';?>