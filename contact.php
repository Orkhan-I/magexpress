
    <!--==============================content================================-->
 <?php include("header.php");?>
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h3 class="p1">Contact Form</h3>
                        <?php if(isset($_GET['status'])=='ok'){?>

            <div style="background:green;border-radius:10px; font-size:20px; padding:6px; color:white; text-align:center" class="alert alert-success" role="alert">
            Mesajiniz gonderildi!
            </div><br>
          <?php  }else if(isset($_GET['status'])=='no'){?>
               <div style="background:green; font-size:20px; padding:6px; color:white; text-align:center" class="alert alert-success" role="alert">
               Gondermek mumkun olmadi!
               </div><br>
         <?php } ?>
            <form id="contact-form" action="admin/islem.php" method="post" enctype="multipart/form-data">
              <fieldset>
                <label><span class="text-form">Full Name:</span>
                  <input type="text" name="name">
                </label>
                <label><span class="text-form">E-mail:</span>
                  <input type="text" name="mail">
                </label>
                <label><span class="text-form">Telephone:</span>
                  <input type="text" name="phone">
                </label>
                <div class="wrapper">
                  <div class="text-form">Message:</div>
                  <div class="extra-wrap" >
                    <textarea name="message"></textarea>
                  </div>
                </div>
                <div class="buttons"> <a class="button-2" href="#">Clear</a> <button type="submit" name="send" class="button-2" href="send">Send</button> </div>
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


    <?php include("footer.php");?>