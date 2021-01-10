<?php
include "header.php";
include "sidebar.php";
include "../connection/connect.php";
$menu_id=$_GET['menu_id'];
$sql = "Select * from menu where menu_id='$menu_id'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();








?>






<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Menu Update</h1>
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
                        <input type="text" hidden name="menu_id" value="<?php echo $row['menu_id'];?>" >
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Menu Name</label>
                                <input type="text" required class="form-control" name="edit_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $row['menu_name']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Menu Url</label>
                                <input type="text" class="form-control" name="edit_url" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['menu_url']?>">
                            </div>
                            
                            
                            <input name="edit" type="submit" class="btn btn-primary col-md-12"></input>
                    </form> 
                </div>
            </div>
        </div>

      






<?php  include "footer.php";



?>



