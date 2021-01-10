<?php
include "header.php";
include "sidebar.php";
include "../connection/connect.php";
$slider_id=$_GET['slider_id'];
$sql = "Select * from slider where slider_id='$slider_id'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();








?>






<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Slider Update</h1>
                        <?php
                        
                       
                        if(isset($_GET['status']) && $_GET['status']=="ok"){

                        ?>
                        <h1 style="background-color:green; margin:30px; font-size:30px" class="page-subhead-line">Melumatlar ugurla yenilendi....</h1>
                   <?php }
                   
                   elseif(isset($_GET['status']) && $_GET['status']=="no"){
                       ?>
                    <h1 style="background-color:red; margin:30px; font-size:30px" class="page-subhead-line">Hecne Yenilenmedi....</h1>

                    <?php
                   }
                   ?>
                   
                   
                    </div>

                    <form class="col-md-12" method="post" action="islem.php">
                        <input type="text" hidden name="slider_id" value="<?php echo $row['slider_id'];?>" >
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Slider Name</label>
                                <input type="text" required class="form-control" name="slider_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $row['slider_name']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Slider Url</label>
                                <input type="text" class="form-control" name="slider_url" id="exampleInputPassword1" placeholder="" value="<?php echo $row['slider_url']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Slider Sira</label>
                                <input type="text" class="form-control" name="slider_sira" id="exampleInputPassword1" placeholder="" value="<?php echo $row['slider_sira']?>">
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Slider Image</label>
                                <input type="file" class="form-control" name="slider_image" id="exampleInputPassword1" placeholder="" value="<?php echo $row['slider_image']?>">
                            </div>
                            
                            
                            <input name="editslider" type="submit" class="btn btn-primary col-md-12"></input>
                    </form> 
                </div>
            </div>
        </div>

      






<?php  include "footer.php";



?>



