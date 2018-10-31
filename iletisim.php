<?php include 'header.php' ?>
    <!--=============================content================================-->
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h3 class="p1">Bize Ulaşın</h3>
            <form id="contact-form" action="http://www.emrahyuksel.com.tr/phpmail/index.php" method="post" enctype="multipart/form-data">
              <fieldset>
                <label><span class="text-form">Ad Soyad:</span>
                  <input type="text" name="adsoyad">
                </label>
                <label><span class="text-form">E-mail:</span>
                  <input type="text" name="eposta">
                </label>
                <label><span class="text-form">Telefon:</span>
                  <input type="text" name="telefon">
                </label>
                <div class="wrapper">
                  <div class="text-form">Mesajınız:</div>
                  <div class="extra-wrap">
                    <textarea name="mesaj"></textarea>
                  </div>
                </div>
                <button style="float: right; margin-top: 15px;" type="submit" name="iletisimform" class="button-2">Mail Gönder</button>
              </fieldset>
            </form>
          </div>
        </article>
        <article class="col-2">
          <h3 class="p1">Our Contacts</h3>
          <h6>USA</h6>
          <dl class="img-indent-bot">
            <dt>8901 Marmora Road, Glasgow, D04</dt>
            <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
            <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
            <dd><span>Email:</span><strong><a href="#">mail@thomsander.com</a></strong></dd>
          </dl>
          <h6>Canada</h6>
          <dl class="img-indent-bot">
            <dt>8901 Marmora Road, Glasgow, D04</dt>
            <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
            <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
            <dd><span>Email:</span><strong><a href="#">mail@thomsander.com</a></strong></dd>
          </dl>
          <h6>Great Britain</h6>
          <dl>
            <dt>8901 Marmora Road, Glasgow, D04</dt>
            <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
            <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
            <dd><span>Email:</span><strong><a href="#">mail@thomsander.com</a></strong></dd>
          </dl>
        </article>
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>
<!--==============================footer=================================-->

<!--coded by cheh-->
</body>
</html>
<?php include 'footer.php' ?>