<?php 
session_start();
error_reporting(0);
include('includes/connection.php');
?>

<!DOCTYPE html>
<html>

  <head>

    <title>News Portal | Category Page</title>

  </head>

<body>
  <div>
    <div>
      <?php include('includes/head.php');?>
    </div class="container">
    
   <div class="table-responsive">

                <table class="table m-0 table-colored-bordered table-bordered-primary">
                    <thead>
                     <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Category Description</th>
                        <th>Posting Date</th>
                        
                     </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $query=mysqli_query($con,"SELECT * from tblcategory INNER JOIN tblsubcategory ON tblcategory.id = tblsubcategory.CategoryId where tblsubcategory.Is_Active=1");
                        $cnt=1;
                        while($row=mysqli_fetch_array($query))
                        {
                        ?>

                        <tr>
                            <th><?php echo htmlentities($cnt);?></th>
                            <td><?php echo htmlentities($row['CategoryName']);?></td>
                            <td><?php echo htmlentities($row['Subcategory']);?></td>
                            <td><?php echo htmlentities($row['Description']);?></td>
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
