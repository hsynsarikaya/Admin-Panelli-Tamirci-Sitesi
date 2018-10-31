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
                <h1 class="page-head-line">Haber EKLİYORSUNUZ</h1>


                <?php 
                if ($_GET['durum']=="ok") { ?>
                <h1 style="color: green;" class="page-subhead-line">Haber başarıyla eklendi...</h1>

                <?php } 
                elseif ($_GET['durum']=="no") { ?>
                <h1 style="color: red;" class="page-subhead-line">Haber Eklenemedi.</h1>

                <?php } else{ ?>
                <h1 class="page-subhead-line">Sitenize Haber ekliyorsunuz.</h1>
                <?php  }

                ?>

            </div>
        </div>
        <!-- /. ROW  -->
        

        <form action="netting/islem.php" method="post" enctype="multipart/form-data">
         <div class="col-md-12">
            <div class="form-group col-md-3">
                <input style="width: 100%" class="btn btn-success" type="submit" name="haberekle" value="Haber Kaydet"> 
            </div>
        </div>

        <div class="col-md-6">

            <div class="form-group">
                <label class="control-label col-lg-4">Slide Resim</label>
                <div class="">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <span class="btn btn-file btn-default">
                            <span class="fileupload-new">Resim Seç</span>
                            <span class="fileupload-exists">Değiştir</span>
                            <input type="file" name="haber_resimyolu">
                        </span>
                        <span class="fileupload-preview"></span>
                        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Haber Adı:</label>
                <input class="form-control" type="text" required="" name="haber_ad" placeholder="Haber Adı Giriniz"> 
            </div>  
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-12">
                <label>Haber İçerik:</label>
                <textarea name="haber_detay" class="ckeditor"></textarea> 
            </div>  
        </div>
        


    </form>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->







<?php include 'footer.php';?>