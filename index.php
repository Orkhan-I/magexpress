<?php include "header.php";
      include "slider.php";
      $page = "Select * from pages";
      $resultPage=$conn->query($page);
      $news="SELECT * from news order by  inserted DESC limit 2 ";
      $newss=$conn->query($news);



?>



 
    <!--==============================aside================================-->
    <aside>
      <div class="wrapper">
        
        <?php while($row=$resultPage->fetch_assoc()){

          ?>
        
        <div style="padding:7px" class="column-2">
          <div class="box">
            <div class="aligncenter">
              <h4><?php echo $row['page_name']?></h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <h6 class="color-1"><?php echo $row['page_title']?></h6>
                <p><?php echo substr($row['page_body'],0,200)?></p>
              </div>
              <div class="aligncenter"> <a class="button" href="page.php?page_id=<?php echo $row['page_id']?>">More Details</a> </div>
            </div>
          </div>
        </div>
        <?php }?>
      </div>
    </aside>
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h2>Welcome!</h2>
            <h6 class="prev-indent-bot">Handyman is one of free website templates created by TemplateMonster.com</h6>
            <p class="prev-indent-bot"><?php echo $row['p_description']?> <a class="color-2" href="index.html">Home Page</a>, <a class="color-2" href="services.html">Services</a>, <a class="color-2" href="faq.html">FAQ</a>, <a class="color-2" href="prices.html">Prices</a>, <a class="color-2" href="staff.html">Our Staff</a>, <a class="color-2" href="contacts.html">Contacts</a> (note that contact us form – doesn’t work). </div>
        </article>
        <article class="col-2">
          <h3>SON XEBERLER
          <?php echo date("Y-m-d") . "<br>";?>
          </h3>
          <?php 
         
          
          while($rows=$newss->fetch_assoc()){
           
              
?>
          <div class="wrapper indent-bot">
            <figure class="img-indent"><img src="<?php echo "admin/images/".$rows['news_image']?>" alt=""></figure>
            <div class="extra-wrap text-1">
              <div class="margin-top"><br>
                <h6><a class="link color-2" href="#"><?php echo $rows['news_title']?></a></h6>
                <?php echo $rows['news_description']?></div>
            </div>
          </div><hr>
          <?php }?>
          
        </article>
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>
<!--==============================footer=================================-->

<?php include 'footer.php' ?>