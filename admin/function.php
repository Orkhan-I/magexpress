<?php
ob_start();


  function giris(){
    $server = "localhost";
    $username = "root";
    $password ="";
    $dbname = "blog";
    
    $conn= new mysqli($server, $username, $password, $dbname);
    
    if($conn->connect_error){
        die('connection failed: ' .$conn->connect_error);
        
    }
    $admin=$_SESSION['user'];
$pass=md5('orxan123');

    $sql="SELECT * From user where `username`='$admin' and `password`= '$pass'";
    $result=$conn->query($sql);
    $row=mysqli_num_rows($result);
    
    if($row==0){
      header("location:login.php");
       
    }
    
  }



