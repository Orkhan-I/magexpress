
<?php "connection/connect.php";

$sql = "Select * from slider";
$result=$conn->query($sql);


?>

<div class="wrapper">
        <div class="slider">
          <ul class="items">
         <?php  while($row=$result->fetch_assoc()){?>

          
            <li><img src="<?php echo "admin/images/".$row['slider_image']?>" alt=""></li>
         <?php }?>
          </ul>
        </div>
        <a class="prev">prev</a> <a class="next">next</a>
        <div class="banner1-bg"></div>
        <div class="banner-1"></div>
      </div>