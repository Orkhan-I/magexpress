<?php 


include "../connection/connect.php";




if(isset($_POST['update'])){
    $update = mysqli_query($conn,"UPDATE parametres SET p_logo ='".$_POST['p_logo']."',
    p_title ='".$_POST['p_title']."',
    p_description ='".$_POST['p_description']."',
    p_telefon ='".$_POST['p_telefon']."',
    p_facebook ='".$_POST['p_facebook']."',
    p_instagram ='".$_POST['p_instagram']."',
    p_twitter ='".$_POST['p_twitter']."'

  WHERE p_id=1");



if (mysqli_affected_rows($conn)) {
    header("location:parameter.php?status=ok");
  } else {
    header("location:parameter.php?status=no");
   }
  }
   ?>


  

   

<?php

session_start();
if(isset($_POST['enter']) ){


  $username=$_POST['username'];
  $password=md5($_POST['password']);

  
  if($username && $password )  {
      $sql="Select * from user Where username='$username' and password='$password'";
      
      $result=$conn->query($sql);
     $row=mysqli_num_rows($result);

     if($row>0){
      $_SESSION['user']=$username;
          header("location:index.php");
     }else{
      header("location:login.php?status=no");
     }
   
  }else{
    header("location:login.php");
  }

}

if(isset($_POST['yukle'])){

  $sql = "INSERT INTO menu (menu_name, menu_url)
  VALUES ('".$_POST['menu_name']."', '".$_POST['menu_url']."')";


if (mysqli_query($conn,$sql)) {
  header("location:menu.php?status=ok");
} else {
  header("location:menu.php?status=no");
 }

}
     





if(isset($_POST['edit'])){
  $menu_id=$_POST['menu_id'];
  $update = mysqli_query($conn,"UPDATE menu SET menu_name ='".$_POST['edit_name']."',
  menu_url ='".$_POST['edit_url']."' where menu_id='$menu_id'");
 
  
   
  
  
  
  if (mysqli_affected_rows($conn)) {
      header("location:updatemenu.php?menu_id=$menu_id");
    } else {
      header("location:updatemenu.php");
     }
    }


    if($_GET['menu_sil']=="ok"){
      $sql = "DELETE FROM menu WHERE menu_id='".$_GET['menu_id']."'";

      if (mysqli_query($conn, $sql)) {
         header('location:menular.php');
      } else {

        header('location:menular.php');
      }

    }





    if(isset($_POST['createPage'])){

      $pages = "INSERT INTO pages (page_name, page_title, page_body)
      VALUES ('".$_POST['page_name']."', '".$_POST['page_title']."', '".$_POST['page_body']."' )";
    
    
    if (mysqli_query($conn,$pages)) {
      header("location:createpages.php?status=ok");
    } else {
      header("location:createpages.php?status=no");
     }
    
    }


    if($_GET['page_sil']=="ok"){
      $sql = "DELETE FROM pages WHERE page_id='".$_GET['page_id']."'";

      if (mysqli_query($conn, $sql)) {
         header('location:pages.php');
      } else {

        header('location:pages.php');
      }

    }



    
if(isset($_POST['editPage'])){
  $page_id=$_POST['page_id'];
  $updatePage = mysqli_query($conn,"UPDATE pages SET page_name ='".$_POST['page_name']."',
  page_title ='".$_POST['page_title']."', page_body ='".$_POST['page_body']."'  where page_id='$page_id'");
 
  
   
  
  
  
  if (mysqli_affected_rows($conn)) {
      header("location:updatepage.php?page_id=$page_id");
    } else {
      header("location:updatepage.php");
     }
    }



   



    if(isset($_POST['createslider'])){
      $image=$_FILES['slider_image']['name'];

      $target="images/".basename($image);

      $sql = "Insert INTO slider (slider_image, slider_name, slider_url, slider_sira) VALUES ('$image', '".$_POST['slider_name']."', '".$_POST['slider_url']."', '".$_POST['slider_sira']."')";
      mysqli_query($conn, $sql);

      if (move_uploaded_file($_FILES['slider_image']['tmp_name'], $target)) {
        header("location:slider.php");
      }else{
        header("location:slider.php");
      }
    
    }


    
    if($_GET['slide_sil']=="ok"){
      $sql = "DELETE FROM slider WHERE slider_id='".$_GET['slider_id']."'";

      if (mysqli_query($conn, $sql)) {
         header('location:sliders.php');
      } else {

        header('location:sliders.php');
      }

    }

    if(isset($_POST['editslider'])){
      $slider_id=$_POST['slider_id'];
      $updateSlider = mysqli_query($conn,"UPDATE slider SET slider_name ='".$_POST['slider_name']."',
      slider_url ='".$_POST['slider_url']."', slider_sira ='".$_POST['slider_sira']."'  where slider_id='$slider_id'");
     
     $image=$_FILES['slider_image']['name'];

     $target="images/".basename($image);

     $sql = "Update  slider (slider_image) VALUES ('$image') where slider_id='$slider_id'";
     mysqli_query($conn, $sql);
       
      
      
      
      if (mysqli_affected_rows($conn)) {
          header("location:updateslider.php?slider_id=$slider_id");
        } else {
          header("location:updateslider.php");
         }
        }




        if(isset($_POST['createnews'])){

          $news_image=$_FILES['news_image']['name'];

          $targets="images/".basename($news_image);
          $sql = "INSERT INTO news (news_title, news_image, news_description)
          VALUES ('".$_POST['news_title']."', '$news_image', '".$_POST['news_description']."')";
        
        
        mysqli_query($conn, $sql);

        if (move_uploaded_file($_FILES['news_image']['tmp_name'], $targets)) {
          header("location:news.php");
        }else{
          header("location:createnews.php");
        }
      
      }
        
        
      if($_GET['news_sil']=="ok"){
        $sql = "DELETE FROM news WHERE news_id='".$_GET['news_id']."'";
  
        if (mysqli_query($conn, $sql)) {
           header('location:news.php');
        } else {
  
          header('location:news.php');
        }
  
      }



      if(isset($_POST['send'])){

        $messages = "INSERT INTO contact (name, mail, phone, message)
        VALUES ('".$_POST['name']."', '".$_POST['mail']."','".$_POST['phone']."', '".$_POST['message']."' )";
      
      
      if (mysqli_query($conn,$messages)) {
        header("location:../contact.php?status=ok");
      } else {
        header("location:../contact.php?status=no");
       }
      
      }