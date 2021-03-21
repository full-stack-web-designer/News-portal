<?php
    session_start();
    include('includes/connection.php');
    error_reporting(0);
        if(isset($_POST['submit']))
        {
        	 $categoryid=$_POST['category'];
            $subcategory=$_POST['SubCategoryname'];
            $subcatdescription=$_POST['SubCategoryDescription'];
            $status=1;
            $query=mysqli_query($con,"INSERT INTO tblsubcategory(CategoryId,Subcategory,SubCatDescription,Is_Active) VALUES('$categoryid','$subcategory','$subcatdescription','$status')");
            if($query)
            {
                echo "<script>alert('Sub Category created.')</script>";
            }
            else{
                echo "<script>alert('Something went wrong . Please try again.')</script>";  
            } 
        }
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>News Portal | Add Sub Category</title>

	<style type="text/css">


		
.hadding h3{
		margin-left: 180px;

}
.hadding p{
		text-align: right;
		margin-right: 180px;
}

form{
	border:2px solid blue;
	border-radius: 10px;
	height: 400px;
	width: 500px;
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
	background-color: green;
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
		
			
		<div class="subaddcategory">

			<div class="hadding">

				<h3>Add Sub Category</h3>
				<p><font color="blue">Admin / Sub Category </font>/ Add Sub Category</p><hr width="80%"/>

			</div>
			
			<div>
				<center>
				<form method="POST" action="add_sub_category.php">
					<table>
						<tr>
							<td colspan="2"><b><marquee><font size="5">Add Sub Category</font></marquee></b><hr width="80%">

							</td>

						</tr>
						<tr>
							<td><b>Category :</b></td>
							<td>
	                          <select class="form-control" name="category" required>

                               <option value="">Select Category </option>

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
							 <td><b>Sub Category :</b></td><td> <input type="text" name="SubCategoryname" required="" placeholder="Sub Category Name" class="Cinput"></td>
						</tr>
						<tr>
							 <td><b>Sub Category<br>Description :</b></td><td> <textarea name="SubCategoryDescription" required="" placeholder="Sub Category Description" class="Cinput"></textarea></td>
						</tr>
						<tr>
							<td><button type="submit" name="submit" class="btn">Submit</button></td>
						</tr>
					</table>
				</form>
				</center>

			</div>
		</div>


</div>
</body>
</html>
