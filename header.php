<?php include "connection/connect.php";



$sql = "Select * from parametres";
$result=$conn->query($sql);
$row=$result->fetch_assoc();


$menucek = "Select * from menu";
$menus=$conn->query($menucek);
$menu="";





?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $row['p_title']?></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/NewsGoth_BT_400.font.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/easyTooltip.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
<div class="extra">
  <div class="main">
    <!--==============================header=================================-->
    <header>
      <div class="indent">
        <div class="row-top">
          <div class="wrapper">
            <h1><a style="background:" href="index.php"><?php echo $row['p_logo']?>  </a></h1>
            <strong class="support"><?php echo $row['p_telefon']?></strong> </div>
        </div>
        <nav>
          
        <ul class="menu">
          <?php while($menu=$menus->fetch_assoc()){ ?>
          
            
              <li><a class="actve" href="<?php echo $menu['menu_url']?>"><?php echo $menu['menu_name']?></a></li>

             

        <?php  } ?>
        </ul>
            
         
        </nav>
      </div>
      
    </header>

    