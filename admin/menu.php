<?php
include "header.php";
include "sidebar.php";
include "../connection/connect.php";



?>






<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update</h1>
                        <?php
                        
                       
                        if(isset($_GET['status']) && $_GET['status']=="ok"){

                        ?>
                        <h1 style="background-color:green; margin:30px; font-size:30px" class="page-subhead-line">Menu Elave edildi....</h1>
                   <?php }
                   
                   elseif(isset($_GET['status']) && $_GET['status']=="no"){
                       ?>
                    <h1 style="background-color:red; margin:30px; font-size:30px" class="page-subhead-line">Elave  olunmadi....</h1>

                    <?php
                   }
                   ?>
                   
                   
                    </div>

                    <form class="col-md-12" method="post" action="islem.php">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Menu</label>
                                <input type="text" required class="form-control" name="menu_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Menu adi" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Link</label>
                                <input type="text" class="form-control" name="menu_url" id="exampleInputPassword1" placeholder="" value="httpts//">
                            </div>
                           
                            
                            <input name="yukle" type="submit" class="btn btn-primary col-md-12"></input>
                    </form> 
                </div>
            </div>
        </div>

      






<?php  include "footer.php";



?>



