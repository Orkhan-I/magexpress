<?php
include "header.php";
include "sidebar.php";
include "../connection/connect.php";
$page_id=$_GET['page_id'];
$sql = "Select * from pages where page_id='$page_id'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();








?>






<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Page Update</h1>
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
                        <input type="text" hidden name="page_id" value="<?php echo $row['page_id'];?>" >
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Page Name</label>
                                <input type="text" required class="form-control" name="page_name" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo $row['page_name']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Page Title</label>
                                <input type="text" class="form-control" name="page_title" id="exampleInputPassword1"  value="<?php echo $row['page_title']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Page Body</label>
                                <input style="height:50px" name="page_body" cols="30" rows="10"    type="text" class="form-control"  id="exampleInputPassword1"  value="<?php echo substr($row['page_body'],0,200)?>"></input>
                            </div>
                            
                            
                            <input name="editPage" type="submit" class="btn btn-primary col-md-12"></input>
                    </form> 
                </div>
            </div>
        </div>

      






<?php  include "footer.php";



?>



