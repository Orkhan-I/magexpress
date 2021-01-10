<?php 
     include "header.php";
     include "sidebar.php";
     include "../connection/connect.php";
     $sql = "Select * from news";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
   ?>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ISMAYILOV</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                       <div style="margin:20px;"> <a href="createnews.php"><button class="btn btn-success" type="submit">Create NEWS</button></a>
    <br></div>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                           
                                            <th>news Id</th>
                                            <th>news title</th>
                                            <th>news image</th>
                                            <th>news description</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        do{
                                            ?>
                                        
                                        <tr>
                                            <td><?php echo $row['news_id']?></td>
                                            <td><?php echo $row['news_title']?></td>
                                            <td><?php echo $row['news_image']?></td>
                                            <td><?php echo $row['news_description']?></td>
                                            <td><a href="updatenews.php?news_id=<?php echo $row['news_id']?>"><button class="btn btn-primary" type="submit">Edit</button></a></td>
                                           <td><a href="islem.php?news_id=<?php echo $row['news_id'];?>&news_sil=ok"><button class="btn btn-danger" type="submit">Delete</button></a></td>
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