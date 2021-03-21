<?php
    session_start();
    include('includes/connection.php');
    error_reporting(0);
    
    
        if($_GET['action']=='del' && $_GET['rid'])
        {
          $id=intval($_GET['rid']);
          $query=mysqli_query($con,"UPDATE tblsubcategory set Is_Active='0' where SubCategoryId='$id'");
          echo "<script>alert('Sub Category deleted.')</script>";
        }
        if($_GET['resid'])
        {
          $id=intval($_GET['resid']);
          $query=mysqli_query($con,"UPDATE tblsubcategory set Is_Active='1' where SubCategoryId='$id'");
          echo "<script>alert('Sub Category restored successfully.')</script>";
        }
        if($_GET['action']=='parmdel' && $_GET['rid'])
        {
          $id=intval($_GET['rid']);
          $query=mysqli_query($con,"DELETE from  tblsubcategory  where SubCategoryId='$id'");
          echo "<script>alert('Sub Category deleted forever.')</script>";
        }
    

?>

<!DOCTYPE html>
<html>
<head>
	<title>News Portal | Manage Sub Category</title>

	<style type="text/css">

	
.hadding h3{
		margin-left: 180px;

}
.hadding p{
		text-align: right;
		margin-right: 30px;
}

#addToTable{
	margin-left: 20px;
	padding: 5px;
	width: 100px;
	border:1px solid blue;
	border-radius: 5px;
	margin-bottom: 20px;
}

	</style>
</head>
<body>

<div class="container">
		<div>
  				<?php
  				include 'includes/header.php';
  				?>
		</div>
		
			
		<div class="addcategory">

			<div class="hadding">

				<h4>Manage Sub Category</h4>
				<p><font color="blue">Admin / Category </font>/ Manage Sub Category</p><hr width="100%"/>

			</div>
			
			<div>
			
				<a href="add_sub_category.php">
					<button id="addToTable"><i><b>+ Add</b></i></button>
                </a>

			</div>

			<div class="table-responsive">

                <table class="table m-0 table-colored-bordered table-bordered-primary">
                    <thead>
                     <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Description</th>
                        <th>Posting Date</th>
                        <th>Last updation Date</th>
                        <th>Action</th>
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
                            <td><?php echo htmlentities($row['SubCatDescription']);?></td>
                            <td><?php echo htmlentities($row['PostingDate']);?></td>
                            <td><?php echo htmlentities($row['UpdationDate']);?></td>
                            <td><a href="edit_sub_category.php?scid=<?php echo htmlentities($row['SubCategoryId']);?>"><i style="color: #29b6f6;">Edit</i></a> 
                          		&nbsp;<a href="manage_sub_category.php?rid=<?php echo htmlentities($row['SubCategoryId']);?>&&action=del"><i style="color: #f05050">Delete</i></a> </td>
                        </tr>
                        <?php
                        $cnt++;
                        } ?>
                    </tbody>
                                                  
                </table>

        	</div>

        	<div class="m-b-30">

                <h4><i class="fa fa-trash-o" ></i> Deleted Categories</h4>

            </div>

            <div class="table-responsive">

                <table class="table m-0 table-colored-bordered table-bordered-danger">
                    <thead>
                        <tr>
                         <th>#</th>
                         <th>Category</th>
                         <th>Sub Category</th>
                         <th>Description</th>
                         <th>Posting Date</th>
                         <th>Last updation Date</th>
                         <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                         $query=mysqli_query($con,"SELECT * from tblcategory INNER JOIN tblsubcategory ON tblcategory.id = tblsubcategory.CategoryId where tblsubcategory.Is_Active=0");
                          $cnt=1;
                          while($row=mysqli_fetch_array($query))
                          {
                        ?>

                        <tr>
                           <th scope="row"><?php echo htmlentities($cnt);?></th>
                           <td><?php echo htmlentities($row['CategoryName']);?></td>
                            <td><?php echo htmlentities($row['Subcategory']);?></td>
                      		<td><?php echo htmlentities($row['SubCatDescription']);?></td>
                            <td><?php echo htmlentities($row['PostingDate']);?></td>
                            <td><?php echo htmlentities($row['UpdationDate']);?></td>
                            <td><a href="manage_sub_category.php?resid=<?php echo htmlentities($row['SubCategoryId']);?>"><i title="Restore this category">Restore</i></a> &nbsp;<a href="manage_sub_category.php?rid=<?php echo htmlentities($row['SubCategoryId']);?>&&action=parmdel" title="Delete forever"> <i style="color: #f05050">Delete</i> </td>
                        </tr>
                        <?php
                        $cnt++;
                        } ?>
                    </tbody>
                </table>
            </div>


</div>
</body>
</html>
