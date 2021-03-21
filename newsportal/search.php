<?php 
session_start();
error_reporting(0);
include('includes/connection.php');

?>

<!DOCTYPE html>
<html>

  <head>

    <title>News Portal | Search  Page</title>
   

  </head>

  <body>
    <div>
    <div>
      <?php include('includes/head.php');?>
    </div>
    <div class="table-responsive">

                <table class="table m-0 table-colored-bordered table-bordered-primary">
                    <thead>
                     <tr>
                        <th>#</th>
                        <th>Sub Category</th>
                        <th>Post Title</th>
                        <th>Posting Date</th>
                        
                     </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $query=mysqli_query($con,"SELECT * from  tblcategory INNER JOIN tblsubcategory ON tblsubcategory.CategoryId = tblcategory.id INNER JOIN tblposts ON tblposts.SubCategoryId = tblsubcategory.SubCategoryId where tblposts.Is_Active=1");
                        $cnt=1;
                        while($row=mysqli_fetch_array($query))
                        {
                        ?>

                        <tr>
                            <th><?php echo htmlentities($cnt);?></th>
                  
                            <td><?php echo htmlentities($row['Subcategory']);?></td>
                            <td><?php echo htmlentities($row['PostTitle']);?></td>
                            <td><?php echo htmlentities($row['PostingDate']);?></td>
                            
                           
                        </tr>
                        <?php
                        $cnt++;
                        } ?>
                    </tbody>
                                                  
                </table>

          </div>

   <div>
      <?php include('includes/footer.php');?>
    </div>
   </div>
  </body>

</html>
