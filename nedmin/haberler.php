<?php include 'header.php';?>
<?php include 'sidebar.php';

if (!isset($_SESSION['admin_kadi'])) {
    header('Location:login.php');
}

?>





<!-- İndex Göbek -->

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">HABERLER</h1>
                <h1 class="page-subhead-line">Sitenizdeki haberleri burdan kontrol edeblirisiniz.</h1>
                <?php 
                            if ($_GET['durum']=="ok") { ?>
                                <h1 style="color: green;" class="page-subhead-line">Haberler başarıyla eklendi...</h1>

                           <?php } 
                            elseif ($_GET['durum']=="no") { ?>
                                <h1 style="color: red;" class="page-subhead-line">Haberler eklenemedi.</h1>

                           <?php } else{ ?>
                                <h1 class="page-subhead-line">Sitenize haberler ekliyorsunuz.</h1>
                         <?php  }

                        ?>
            </div>
            <div class="col-md-12">
                <a href="haber-ekle.php"><button class="btn btn-success">Haberler Ekle</button></a>
                <hr>
            </div>

            <div class="col-md-12">
             <!--    Hover Rows  -->
             <div class="panel panel-default">
                <div class="panel-heading">
                    Ekli olan Haberler
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Haber Zaman</th>
                                    <th style="width: 400px;">Haber Başlık</th>
                                    <th>Haber Hit</th>
                                    <th style="width: 40px;"></th>
                                    <th style="width: 40px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $habersor=mysql_query("select * from haber");
                                while($habercek=mysql_fetch_assoc($habersor)){?>
                                <tr>
                                    <td><?php echo $habercek['haber_id'] ?></td>
                                    <td><?php echo $habercek['haber_zaman'] ?></td>
                                    <td><?php echo $habercek['haber_ad'] ?></td>
                                    <td><?php echo $habercek['haber_hit'] ?></td>
                                    <td><a href="haber-duzenle.php?haber_id=<?php echo $habercek['haber_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></td>
                                    <td><a href="netting/islem.php?haber_id=<?php echo $habercek['haber_id']; ?>&habersil=ok"><button class="btn btn-danger">Sil</button></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End  Hover Rows  -->
        </div>


    </div>
    <!-- /. ROW  -->


</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->







<?php include 'footer.php';?>