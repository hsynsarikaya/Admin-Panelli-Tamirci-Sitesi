<?php include 'header.php';?>
<?php include 'sidebar.php';?>





<!-- İndex Göbek -->

<!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MENÜ EKLİYORSUNUZ</h1>


                        <?php 
                            if ($_GET['durum']=="ok") { ?>
                                <h1 style="color: green;" class="page-subhead-line">Menü başarıyla eklendi...</h1>

                           <?php } 
                            elseif ($_GET['durum']=="no") { ?>
                                <h1 style="color: red;" class="page-subhead-line">Menü Eklenemedi.</h1>

                           <?php } else{ ?>
                                <h1 class="page-subhead-line">Sitenize menü ekliyorsunuz.</h1>
                         <?php  }

                        ?>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
                
                <form action="netting/islem.php" method="post">
                 <div class="col-md-12">
                    <div class="form-group col-md-3">
                        <input style="width: 100%" class="btn btn-success" type="submit" name="menukaydet" value="Menü Kaydet"> 
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label>Menü Adı:</label>
                        <input class="form-control" type="text" name="menu_ad" placeholder="Menü Adı Giriniz"> 
                    </div>  
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label>Menü Link:</label>
                        <input class="form-control" type="text" name="menu_link" value="http://"> 
                    </div>  
                </div>

                

                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->







<?php include 'footer.php';?>