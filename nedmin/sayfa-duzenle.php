<?php include 'header.php';?>
<?php include 'sidebar.php';
$sayfa_id=$_GET['sayfa_id'];
$sayfasor=mysql_query("select * from sayfalar where sayfa_id='$sayfa_id'");
$sayfacek=mysql_fetch_assoc($sayfasor);
?>



<head>
    <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
</head>

<!-- İndex Göbek -->

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SAYFA DUZENLİYORSUNUZ</h1>


                <?php 
                if ($_GET['durum']=="ok") { ?>
                <h1 style="color: green;" class="page-subhead-line">Sayfa başarıyla duzenlendi...</h1>

                <?php } 
                elseif ($_GET['durum']=="no") { ?>
                <h1 style="color: red;" class="page-subhead-line">Sayfa duzenlenemedi.</h1>

                <?php } else{ ?>
                <h1 class="page-subhead-line">Düzenle</h1>
                <?php  }

                ?>

            </div>
        </div>
        <!-- /. ROW  -->

        <form action="netting/islem.php" method="post">
           <div class="col-md-12">
            <div class="form-group col-md-3">
                <input style="width: 100%" class="btn btn-success" type="submit" name="sayfaduzenle" value="Sayfa Duzenle"> 
            </div>
        </div>
        <input class="form-control" type="hidden" name="sayfa_id" value="<?php echo $sayfacek['sayfa_id'] ?>"> 
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Sayfa Adı:</label>
                <input class="form-control" type="text" name="sayfa_ad" value="<?php echo $sayfacek['sayfa_ad'] ?>"> 
            </div>  
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-12">
                <label>Sayfa İçerik:</label>
                <textarea name="sayfa_icerik" class="ckeditor"><?php echo $sayfacek['sayfa_icerik'] ?></textarea> 
            </div>  
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Sayfa Sıra:</label>
                <input class="form-control" type="text" name="sayfa_sira" value="<?php echo $sayfacek['sayfa_sira'] ?>"> 
            </div>  
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Anasayfada Göster</label>
                <select name="sayfa_anasayfa"  class="form-control">

                    <?php 
                    if ($sayfacek['sayfa_anasayfa']==0) {?>
                    <option value="0">HAYIR</option>
                    <option value="1">EVET</option>
                    <?php  }elseif ($sayfacek['sayfa_anasayfa']==1) {?>
                       <option value="1">EVET</option>
                       <option value="0">HAYIR</option>
                   <?php } ?>



                  





                </select>
            </div>
        </div>


    </form>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->







<?php include 'footer.php';?>