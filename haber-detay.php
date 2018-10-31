<?php 

include 'header.php';
$haber_id=$_GET['haber_id'];
$habersor=mysql_query("select * from haber where haber_id='$haber_id'");
$habercek=mysql_fetch_assoc($habersor);
$haber_hit=$habercek['haber_hit'];
$haber_hit++;
$haberhit=mysql_query("update haber set haber_hit='".$haber_hit."' where haber_id='$haber_id'");

?>
<!--==============================content================================-->
<section id="content">
  <div class="wrapper">
    <article class="col-1">




      <div class="indent-left">
        <center><figure class="img-indent"><img width="630" height="200" src="nedmin/<?php echo $habercek['haber_resimyolu'] ?>" alt=""></figure></center>

        <div class="wrapper prev-indent-bot">
          <div class="extra-wrap">




            <h6 class="prev-indent-bot"><?php echo $habercek['haber_ad'] ?></h6>
            <?php echo $habercek['haber_detay']; ?>
          </div>
        </div>
        




      </div>
      
      
      <!-- while bitiş -->



    </article>
    <article class="col-2">
      <h4 style="font-size: 20px" class="p1">En Çok Okunan Haberler</h4>
      <ul class="list-1">

        <?php 
        $habersor=mysql_query("select * from haber order by haber_hit DESC limit 10");
        while($habercek=mysql_fetch_assoc($habersor)){?>
        <li><a href="#"><?php echo $habercek['haber_ad'] ?></a></li>
        <?php }?>
      </ul>
    </article>
  </div>
</section>
<!--==============================aside================================-->
<aside>

  <div class="block"></div>
</aside>
</div>
</div>


<?php include 'footer.php' ?>