<?php
include "header.php";
include "sidebar.php";
include "../connection/connect.php";

$sql = "Select * from parametres";
$result=$conn->query($sql);
$row=$result->fetch_assoc();








?>






<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update</h1>
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
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Logo</label>
                                <input type="text" required class="form-control" name="p_logo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $row['p_logo']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Title</label>
                                <input type="text" class="form-control" name="p_title" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['p_title']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Phone</label>
                                <input type="text" class="form-control" name="p_telefon" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['p_telefon']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Description</label>
                                <input type="text" class="form-control" name="p_description" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['p_description']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Instagram</label>
                                <input type="text" class="form-control " name="p_facebook" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['p_facebook']?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Facebook</label>
                                <input type="text" class="form-control" name="p_instagram" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['p_instagram']?>" >
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputPassword1">Twitter</label>
                                <input type="text" class="form-control" name="p_twitter" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['p_twitter']?>">
                            </div>
                            
                            <input name="update" type="submit" class="btn btn-primary col-md-12"></input>
                    </form> 
                </div>
            </div>
        </div>

      






<?php  include "footer.php";



?>



