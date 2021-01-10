<?php include "header.php";

$page_id=$_GET['page_id'];
$page = "Select * from pages where page_id='$page_id'";
$resultPage=$conn->query($page);
$row=$resultPage->fetch_assoc();


?>



 
    <!--==============================aside================================-->
    <aside >
      <div class="wrapper">
        
       
        
        <div style="padding:7px" class="column-">
          <div class="box ">
            <div class="aligncenter">
              <h4><?php echo $row['page_name']?></h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <h6 class="color-1"><?php echo $row['page_title']?></h6>
                <p><?php echo $row['page_body'],0,200?></p>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </aside>
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>
<!--==============================footer=================================-->

<?php include 'footer.php' ?>