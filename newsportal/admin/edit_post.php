
<?php 
    session_start();
    include('includes/connection.php');
    error_reporting(0);
    
        if(isset($_POST['submit']))
        {
            $posttitle=$_POST['posttitle'];
            $catid=$_POST['category'];
            $subcatid=$_POST['subcategory'];
            $postdetails=$_POST['postdescription'];
           
            $status=1;
            $postid=intval($_GET['pid']);
            $query=mysqli_query($con,"UPDATE tblposts set PostTitle='$posttitle',CategoryId='$catid',SubCategoryId='$subcatid',PostDetails='$postdetails',Is_Active='$status' where id='$postid'");
            if($query)
            {
                echo "<script>alert('Post Updated.')</script>";
            }
            else{
                echo "<script>alert('Something went wrong . Please try again.')</script>";    
            } 
        }
    
?>

<!DOCTYPE html>

<html>
<head>
	<title>News Portal | Edit Post</title>
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

		<h3>Edit Post</h3>
		<p><font color="blue">Admin / Post </font>/ Edit Post</p><hr width="80%"/>

	</div>

		<?php 
                $catid=intval($_GET['pid']);
                $query=mysqli_query($con,"SELECT * from  tblcategory INNER JOIN tblsubcategory ON tblcategory.id = tblsubcategory.CategoryId INNER JOIN tblposts ON tblsubcategory.SubCategoryId = tblposts.SubCategoryId where tblposts.Is_Active=1 AND tblposts.id='$catid'");
              	
                while($row=mysqli_fetch_array($query))
                {
                ?>

	<div>
		<center>
			
			<form method="POST" action="" enctype="multipart/form-data" name="category">
				
				<table>
					
					<tr>
						<td colspan="2"><b><marquee><font size="5">Edit Post</font></marquee></b><hr width="80%">

						</td>

					</tr>

					<tr>
						<td><b>Post Title :</b></td><td> <input type="text" name="posttitle" required="" placeholder="Enter Title" class="Cinput" value="<?php echo htmlentities($row['PostTitle']);?>"></td>
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
						
						<td><b>Sub Category :</b></td>
							<td>
	                          <select class="form-control" name="subcategory">
                                  <option value="<?php echo htmlentities($row['catid']);?>"><?php echo htmlentities($row['Subcategory']);?></option>
                                   <?php

                                  $ret=mysqli_query($con,"SELECT SubCategoryId,Subcategory from  tblsubcategory where Is_Active=1");
                                  while($result=mysqli_fetch_array($ret))
                                    {    
                                    ?>
                                    <option value="<?php echo htmlentities($result['SubCategoryId']);?>"><?php echo htmlentities($result['Subcategory']);?></option>
                                    <?php } ?>

                               </select>
                          </td>
					</tr>

					<tr>
						<td><b>Post<br>Description :</b></td><td> <textarea name="postdescription" required="" placeholder="Post Description" class="Cinput"><?php echo htmlentities($row['PostDetails']);?></textarea></td>
					</tr>
					<?php
					$query=mysqli_query($con,"SELECT id,image from  tblposts where Is_Active=1 AND id='$catid'");
					while ($row = mysqli_fetch_array($query)) 
					{
						
					?>
					<tr>
						
						<td><b>Image Feature :</b></td>
						<td><?php echo '<img src="data:image;base64, '.base64_encode($row['image']).'" alt="Image" style="width : 200px; height : 200px;" >'; ?>
						
						</td>
					</tr>
						<tr>
						<td colspan="2">
                        	<a href="change_image.php?pid=<?php echo htmlentities($row['id']);?>">Update Image</a></td>
							
					</tr>
					 <?php } ?>
					<?php } ?>
					<tr>
						<td colspan="2"><button type="submit" name="submit" class="btn">Update</button></td>
					</tr>
				</table>
			</form>
		</center>

	</div>


</div>


</body>
</html>