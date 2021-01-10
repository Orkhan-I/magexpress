<?php 
     include "header.php";
     include "sidebar.php";
     include "../connection/connect.php";
     $sql = "Select * from menu";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
   ?>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ISMAYILOV</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                       <div style="margin:20px;"> <a href="menu.php"><button class="btn btn-success" type="submit">Create Menu</button></a>
    <br></div>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                           
                                            <th>Menu Id</th>
                                            <th>Menu Name</th>
                                            <th>Menu Url</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        do{
                                            ?>
                                        
                                        <tr>
                                            <td><?php echo $row['menu_id']?></td>
                                            <td><?php echo $row['menu_name']?></td>
                                            <td><?php echo $row['menu_url']?></td>
                                            <td><a href="updatemenu.php?menu_id=<?php echo $row['menu_id']?>"><button class="btn btn-primary" type="submit">Edit</button></a></td>
                                           <td><a href="islem.php?menu_id=<?php echo $row['menu_id'];?>&menu_sil=ok"><button class="btn btn-danger" type="submit">Delete</button></a></td>
                                        </tr>
                                        <?php  } 
                                         while($row=$result->fetch_assoc());
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>

<?php include "footer.php"?>