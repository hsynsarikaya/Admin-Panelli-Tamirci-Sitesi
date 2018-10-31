<?php 

include 'header.php';

?>
<!--==============================content================================-->
<section id="content">
  <div class="wrapper">
    <article class="col-1">


      <!-- while başlangıç -->
      <?php 
      $habersor=mysql_query("select * from haber");
      while($habercek=mysql_fetch_assoc($habersor)){?>
      <div class="indent-left">
        <div class="wrapper prev-indent-bot">
          <figure class="img-indent"><img width="200" height="150" src="nedmin/<?php echo $habercek['haber_resimyolu'] ?>" alt=""></figure>
          <div class="extra-wrap">




            <h6 class="prev-indent-bot"><?php echo $habercek['haber_ad'] ?></h6>
            <?php echo substr($habercek['haber_detay'], 0, 300); ?>
          </div>
        </div>
        <div style="float: right; margin-bottom: 15px;" class="indent-rigth">
          <a class="button-2" href="haber-detay.php?haber_id=<?php echo $habercek['haber_id'] ?>">Read More</a> 
        </div>




      </div><br><br>
      <hr>
      <?php } ?>
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