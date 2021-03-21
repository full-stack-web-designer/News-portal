<?php
    session_start();
    include('includes/connection.php');
  	error_reporting(0);
   
        if(isset($_POST['submit']))
        {
            $scatid=intval($_GET['scid']);
            $subcategory=$_POST['SubCategoryname'];
            $description=$_POST['SubCatDescription'];
            $query=mysqli_query($con,"UPDATE  tblsubcategory set Subcategory='$subcategory',SubCatDescription='$description' where SubCategoryId='$scatid'");
            if($query)
            {
                echo "<script>alert('Sub Category Updated.')</script>";
            }
            else{
                echo "<script>alert('Something went wrong . Please try again.')</script>";      
            } 
        }
    
?>



<!DOCTYPE html>
<html>
<head>
	<title>News Portal | Edit Sub Category</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
       	<link href="css/core.css" rel="stylesheet" type="text/css" />

	<style type="text/css">

		
.hadding h3{
		margin-left: 180px;

}
.hadding p{
		text-align: right;
		margin-right: 180px;
}
td{
	padding: 10px;
}
.Cinput{
	padding: 5px;
	border:2px solid silver;
	border-radius: 5px;
}

.btn{
	width: 100%;
	background:silver;
	border:2px solid blue;
	border-radius: 10px; 
	color: black;
	padding: 5px;
	font-size: 17px;
	cursor: pointer;
	margin: 12px 0;
}
.btn:hover{
	background-color: lightgreen;
	transition:0.6s ease;
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

				<h3>Edit Sub Category</h3>
				<p><font color="blue">Admin / Sub Category </font>/ Edit Sub Category</p><hr width="80%"/>

			</div>


				<?php 
                                $catid=intval($_GET['scid']);
                                $query=mysqli_query($con,"SELECT * from tblcategory INNER JOIN tblsubcategory ON tblcategory.id = tblsubcategory.CategoryId where tblsubcategory.Is_Active=1 AND SubCategoryId='$catid'");
                                $cnt=1;
                                while($row=mysqli_fetch_array($query))
                                {
                                ?>

			
			<div>

				<center>
				<form method="POST" name="category">

					<table>
						<tr>
							<td colspan="2"><b><marquee><font size="5">Edit Sub Category</font></marquee></b><hr width="80%">

							</td>

						</tr>

						<tr>
							<td><b>Category :</b></td>
							<td>
	                          <select class="form-control" name="category">
                                  <option value="<?php echo htmlentities($row['catid']);?>"><?php echo htmlentities($row['CategoryName']);?></option>
                                   <?php

                                  $ret=mysqli_query($con,"SELECT id,CategoryName from  tblcategory where Is_Active=1");
                                  while($result=mysqli_fetch_array($ret))
                                    {    
                                    ?>
                                    <option value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['CategoryName']);?></option>
                                    <?php } ?>

                               </select>
                            </td>
						</tr>
						<tr>
							<td>

							 	<b>Sub Category :</b></td><td> <input type="text" name="SubCategoryname" required="" placeholder="Sub Category Name" class="Cinput" value="<?php echo htmlentities($row['Subcategory']);?>"></td>
						</tr>
						<tr>
							 <td><b>Sub Category<br>Description :</b></td><td> <textarea name="SubCatDescription" required="" placeholder="Sub Category Description" class="Cinput" ><?php echo htmlentities($row['SubCatDescription']);?></textarea></td>
							 


						</tr>
						<?php } ?>
						<tr>
							<td><button type="submit" name="submit" class="btn">Update</button></td>
						</tr>
					</table>
					
				</form>
				</center>
			
			</div>

		</div>


</div>
</body>
</html>
