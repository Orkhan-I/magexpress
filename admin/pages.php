<?php 
     include "header.php";
     include "sidebar.php";
     include "../connection/connect.php";
     $sql = "Select * from pages";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
   ?>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ISMAYILOV</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                       <div style="margin:20px;"> <a href="createpages.php"><button class="btn btn-success" type="submit">Create Pages</button></a>
    <br></div>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                           
                                            <th>Page Id</th>
                                            <th>Page Name</th>
                                            <th>Page Title</th>
                                            <th>Page Body</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        do{
                                            ?>
                                        
                                        <tr>
                                            <td><?php echo $row['page_id']?></td>
                                            <td><?php echo $row['page_name']?></td>
                                            <td><?php echo $row['page_title']?></td>
                                            <td><?php echo substr($row['page_body'],0,200)?></td>
                                            <td><a href="updatepage.php?page_id=<?php echo $row['page_id']?>"><button class="btn btn-primary" type="submit">Edit</button></a></td>
                                           <td><a href="islem.php?page_id=<?php echo $row['page_id'];?>&page_sil=ok"><button class="btn btn-danger" type="submit">Delete </button></a></td>
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