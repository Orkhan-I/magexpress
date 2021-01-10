<?php
include "header.php";
include "sidebar.php";
include "../connection/connect.php";



?>
<head>
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
</head>






<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PAge Create</h1>
                        <?php
                        
                       
                        if(isset($_GET['status']) && $_GET['status']=="ok"){

                        ?>
                        <h1 style="background-color:green; margin:30px; font-size:30px" class="page-subhead-line">Sehife Elave edildi....</h1>
                   <?php }
                   
                   elseif(isset($_GET['status']) && $_GET['status']=="no"){
                       ?>
                    <h1 style="background-color:red; margin:30px; font-size:30px" class="page-subhead-line">Elave  olunmadi....</h1>

                    <?php
                   }
                   ?>
                   
                   
                    </div>

                    <form class="col-md-12" method="post" action="islem.php">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Page</label>
                                <input type="text" required class="form-control" name="page_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sehife adi" >
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputPassword1">Page Title</label>
                                <input type="text" class="form-control" name="page_title" id="exampleInputPassword1" placeholder="Page Title" >
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputPassword1">Page Text</label>
                                <input id="" type="text" class="form-control" name="page_body" col=30 row=30  placeholder="Page Body" ></input>
                            </div>
                           
                            
                            <input name="createPage" type="submit" class="btn btn-primary col-md-12"></input>
                    </form> 
                </div>
            </div>
        </div>

      






<?php  include "footer.php";



?>

<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

