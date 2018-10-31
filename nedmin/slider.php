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
                <h1 class="page-head-line">SLİDER</h1>
                <h1 class="page-subhead-line">Sitenizdeki sliderları burdan kontrol edeblirisiniz.</h1>

                
                <?php 
                if ($_GET['durum']=="ok") { ?>
                <h1 style="color: green;" class="page-subhead-line">Slider başarıyla silindi...</h1>

                <?php } 
                elseif ($_GET['durum']=="no") { ?>
                <h1 style="color: red;" class="page-subhead-line">Slider silinemedi.</h1>

                <?php } 



                ?>
                <?php 
                if ($_GET['duzen']=="ok") { ?>
                <h1 style="color: green;" class="page-subhead-line">Slider başarıyla duzenlendi...</h1>

                <?php } 
                elseif ($_GET['duzen']=="no") { ?>
                <h1 style="color: red;" class="page-subhead-line">Slider duzenlenemedi.</h1>

                <?php } else{ ?>
                <h1 class="page-subhead-line">Sitenize slider ekliyorsunuz.</h1>
                <?php  }

                ?>
            </div>
            <div class="col-md-12">
                <a href="slider-ekle.php"><button class="btn btn-success">Slider Ekle</button></a>
                <hr>
            </div>

            <div class="col-md-12">
               <!--    Hover Rows  -->
               <div class="panel panel-default">
                <div class="panel-heading">
                    Ekli olan Sliderlar
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Slider Adı</th>
                                    <th>Slider Resmi</th>
                                    <th>Slider Link</th>
                                    <th>Slider Sıra</th>
                                    <th style="width: 40px;"></th>
                                    <th style="width: 40px;"></th>
                                </tr>
                            </thead>
                            <tbody>




                                <?php 
                                $slidersor=mysql_query("select * from slider");
                                while($slidercek=mysql_fetch_assoc($slidersor)){?>
                                <tr>
                                    <td><?php echo $slidercek['slider_id'] ?></td>
                                    <td><?php echo $slidercek['slider_ad'] ?></td>
                                    <td><img width="200" src="<?php echo $slidercek['slider_resimyolu'] ?>" ></td>
                                    <td><?php echo $slidercek['slider_url'] ?></td>

                                    <td><input type="text" name="slider_sira" value="<?php echo $slidercek['slider_sira'] ?>">

                                    </td>




                                    <td><a href="netting/islem.php?slider_id=<?php echo $slidercek['slider_id']; ?>&slidersil=ok&sliderresimsil=<?php echo $slidercek['slider_resimyolu'] ?>" >
                                        <button class="btn btn-danger" >Sil</button></a></td>
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