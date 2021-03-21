<?php
    session_start();
    include('includes/connection.php');
  	error_reporting(0);
   
        if(isset($_POST['submit']))
        {
            $catid=intval($_GET['cid']);
            $category=$_POST['Categoryname'];
            $description=$_POST['CategoryDescription'];
            $query=mysqli_query($con,"UPDATE  tblcategory set CategoryName='$category',Description='$description' where id='$catid'");
            if($query)
            {
                echo "<script>alert('Category Updated.')</script>";
            }
            else{
                echo "<script>alert('Something went wrong . Please try again.')</script>";      
            } 
        }
    
?>



<!DOCTYPE html>
<html>
<head>
	<title>News Portal | Edit Category</title>

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

				<h3>Edit Category</h3>
				<p><font color="blue">Admin / Category </font>/ Edit Category</p><hr width="80%"/>

			</div>


				<?php 
                                $catid=intval($_GET['cid']);
                                $query=mysqli_query($con,"SELECT id,CategoryName,Description,PostingDate,UpdationDate from  tblcategory where Is_Active=1 and id='$catid'");
                                $cnt=1;
                                while($row=mysqli_fetch_array($query))
                                {
                                ?>

			
			<div>

				<center>
				<form method="POST" name="category">

					<table>
						<tr>
							<td colspan="2"><b><marquee><font size="5">Edit Category</font></marquee></b><hr width="80%">

							</td>

						</tr>
						<tr>
							<td>

							 	<b>Category :</b></td><td> <input type="text" name="Categoryname" required="" placeholder="Category Name" class="Cinput" value="<?php echo htmlentities($row['CategoryName']);?>"></td>
						</tr>
						<tr>
							 <td><b>Category<br>Description :</b></td><td> <textarea name="CategoryDescription" required="" placeholder="Category Description" class="Cinput" ><?php echo htmlentities($row['Description']);?></textarea></td>
							 


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
