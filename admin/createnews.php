<?php
include "header.php";
include "sidebar.php";
include "../connection/connect.php";



?>






<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">CREATE NEWS</h1>
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

                    <form class="col-md-12" method="post" action="islem.php" enctype="multipart/form-data">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">NEWS TITLE</label>
                                <input type="text" required class="form-control" name="news_title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Image</label>
                                <input type="file" class="form-control" name="news_image" id="exampleInputPassword1" placeholder="" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">NEWS DESCRIPTION</label>
                                <input type="text" required class="form-control" name="news_description" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" >
                            </div>
                           
                            
                            <input name="createnews" type="submit" class="btn btn-primary col-md-12"></input>
                    </form> 
                </div>
            </div>
        </div>

      






<?php  include "footer.php";



?>



