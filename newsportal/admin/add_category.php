<?php
    session_start();
    include('includes/connection.php');
    
        if(isset($_POST['submit']))
        {
            $category=$_POST['Categoryname'];
            $description=$_POST['CategoryDescription'];
            $status=1;
            $query=mysqli_query($con,"INSERT INTO tblcategory(CategoryName,Description,Is_Active) VALUES('$category','$description','$status')");
            if($query)
            {
                echo "<script>alert('Category created.')</script>";
            }
            else{
                echo "<script>alert('Something went wrong . Please try again.')</script>";  
            } 
        }
    
?>



<!DOCTYPE html>
<html>
<head>
	<title>News Portal | Add Category</title>



	<style type="text/css">


		
.hadding h3{
		margin-left: 180px;

}
.hadding p{
		text-align: right;
		margin-right: 180px;
}

form{
	border:2px solid green;
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
		
			
		<div class="addcategory">

			<div class="hadding">

				<h3>Add Category</h3>
				<p><font color="blue">Admin / Category </font>/ Add Category</p><hr width="80%"/>

			</div>
			
			<div>
				<center>
				<form method="POST" action="add_category.php">
					<table>
						<tr>
							<td colspan="2"><b><marquee><font size="5">Add Category</font></marquee></b><hr width="80%">

							</td>

						</tr>
						<tr>
							 <td><b>Category :</b></td><td> <input type="text" name="Categoryname" required="" placeholder="Category Name" class="Cinput"></td>
						</tr>
						<tr>
							 <td><b>Category<br>Description :</b></td><td> <textarea name="CategoryDescription" required="" placeholder="Category Description" class="Cinput"></textarea></td>
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
