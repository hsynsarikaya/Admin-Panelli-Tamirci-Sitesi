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
                <h1 class="page-head-line">SAYFALAR</h1>
                <h1 class="page-subhead-line">Sitenizdeki SAYFALAR burdan kontrol edeblirisiniz.</h1>
                <?php 
                            if ($_GET['durum']=="ok") { ?>
                                <h1 style="color: green;" class="page-subhead-line">SAYFALAR başarıyla eklendi...</h1>

                           <?php } 
                            elseif ($_GET['durum']=="no") { ?>
                                <h1 style="color: red;" class="page-subhead-line">SAYFALAR eklenemedi.</h1>

                           <?php } else{ ?>
                                <h1 class="page-subhead-line">Sitenize SAYFALAR ekliyorsunuz.</h1>
                         <?php  }

                        ?>
            </div>
            <div class="col-md-12">
                <a href="sayfa-ekle.php"><button class="btn btn-success">SAYFALAR Ekle</button></a>
                <hr>
            </div>

            <div class="col-md-12">
             <!--    Hover Rows  -->
             <div class="panel panel-default">
                <div class="panel-heading">
                    Ekli olan SAYFALAR
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Eklendiği Tarih</th>
                                    <th style="width: 400px;">Sayfa Adı</th>
                                    <th>Anasayfada Göster</th>
                                    <th style="width: 40px;"></th>
                                    <th style="width: 40px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sayfasor=mysql_query("select * from sayfalar");
                                while($sayfacek=mysql_fetch_assoc($sayfasor)){?>
                                <tr>
                                    <td><?php echo $sayfacek['sayfa_id'] ?></td>
                                    <td><?php echo $sayfacek['sayfa_tarih'] ?></td>
                                    <td><?php echo $sayfacek['sayfa_ad'] ?></td>
                                    <td><?php

                                    if($sayfacek['sayfa_anasayfa']==0 ){
                                        echo "HAYIR";
                                    }elseif($sayfacek['sayfa_anasayfa']==1){
                                        echo "EVET";
                                    }


                                     ?></td>
                                    <td><a href="sayfa-duzenle.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></td>
                                    <td><a href="netting/islem.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>&sayfasil=ok"><button class="btn btn-danger">Sil</button></a></td>
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