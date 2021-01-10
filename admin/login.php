<?php 
include "../connection/connect.php";?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Bootstrap Advance Admin Template</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>
 
  </style>
</head>
<body style='background-image:url("assets/img/ok.jpg");  background-repeat: no-repeat; background-size: cover;'>
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                <div class="panel-body">
                    <form role="form" method="post" action="islem.php">
                        <hr />
                      
                        
                        <br />

                     
                       
                        <div class="form-group ">
                           
                            <input type="email" required class="form-control" name="username" placeholder="Username" />
                        </div>
                        <div class="form-group ">
                            <input type="password" class="form-control" name="password"  placeholder="Password" />
                        </div>
                        

                     <button type="submit"  name="enter" class="btn btn-primary ">Submit</button>
                     <hr />
                     Not register ? <a href="index.html" >click here </a> or go to <a href="index.html">Home</a> 
                 </form>
             </div>

         </div>


     </div>
 </div>

</body>
</html>
