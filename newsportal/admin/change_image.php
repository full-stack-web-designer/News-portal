
<?php 
    session_start();
    include('includes/Connection.php');
    error_reporting(0);
    
        if(isset($_POST['update']))
        {
             
       		 $postid=intval($_GET['pid']);
       		 $file = $_FILES["image"]["tmp_name"];
       		 $newfile = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
       		 $newfile_name = addslashes($_FILES["image"]["tmp_name"]);
       		 move_uploaded_file($_FILES["image"]["tmp_name"], "image/" . $_FILES["image"]["name"]);
       		 $image_save = "image/" . $_FILES["image"]["name"];
       		 
            $query=mysqli_query($con,"UPDATE tblposts set image='$image_save' where id='$postid'");
            if($query)
            {
                echo "<script>alert('Change Image Successfully.')</script>";
            }
            else{
            echo "<script>alert('Something went wrong . Please try again.')</script>";    
            } 
        }
    
    
?>


<!DOCTYPE html>

<html>
<head>
	<title>News Portal | Change Image</title>
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
			width: 50%;
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
	
	<div class="hadding">

		<h3>Change Image</h3>
		<p><font color="blue">Admin / Post </font>/ Change Image</p><hr width="80%"/>

	</div>

		<?php 
                $catid=intval($_GET['pid']);
                $query=mysqli_query($con,"SELECT * from  tblcategory INNER JOIN tblsubcategory ON tblcategory.id = tblsubcategory.CategoryId INNER JOIN tblposts ON tblsubcategory.SubCategoryId = tblposts.SubCategoryId where tblposts.Is_Active=1 AND tblposts.id='$catid'");
              	  $cnt=1;
                while($row=mysqli_fetch_array($query))
                {
                ?>

	<div>
		<center>
			
			<form method="POST" name="category" enctype="multipart/form-data">
				
				<table>
					
					<tr>
						<td colspan="2"><b><marquee><font size="5">Change Image</font></marquee></b><hr width="80%">

						</td>

					</tr>

					<tr>
						<td><b>Post Title :</b></td><td> <input type="text" name="posttitle" required="" placeholder="Enter Title" class="Cinput" value="<?php echo htmlentities($row['PostTitle']);?>"></td>
					</tr>
					<?php
					$query=mysqli_query($con,"SELECT id,image from  tblposts where Is_Active=1 AND id='$catid'");
					while ($row = mysqli_fetch_array($query)) 
					{
						
					?>	
					<tr>
						
						<td><b>Current Post Image</b></td>
							<td><?php echo '<img src="data:image;base64, '.base64_encode($row['image']).'" alt="Image" style="width : 200px; height : 200px;" >'; ?>
							</td>
					</tr>
					<?php } ?>
					<tr>
						
						<td><b>New Feature Image</b></td>
							<td>
	                         <input type="file" name="postimage" class="btn" required> 
                          </td>
					</tr>
					<?php } ?>
					<tr>
						<td colspan="2"><button type="submit" name="update" class="btn">Update</button></td>
					</tr>
				</table>
			</form>
		</center>

	</div>


</div>


</body>
</html>