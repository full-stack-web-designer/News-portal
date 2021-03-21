
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
                $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
                $query=mysqli_query($con,"INSERT INTO tblposts(PostTitle,CategoryId,SubCategoryId,PostDetails,Is_Active,image) VALUES('$posttitle','$catid','$subcatid','$postdetails','$status','$file')");
                if($query)
                {
                    echo "<script>alert('Post successfully added.')</script>";
                }
                else{
                    echo "<script>alert('Something went wrong . Please try again.')</script>";    
                } 

            
        }
        
    
?>

<!DOCTYPE html>

<html>
<head>
	<title>News Portal | Add Post</title>
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
			width: 80%;
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

		<h3>Add Post</h3>
		<p><font color="blue">Admin / Post </font>/ Add Post</p><hr width="80%"/>

	</div>

	<div>
		<center>
			
			<form method="POST" action="" enctype="multipart/form-data" name="category">
				
				<table>
					
					<tr>
						<td colspan="2"><b><marquee><font size="5">Add Post</font></marquee></b><hr width="80%">

						</td>

					</tr>

					<tr>
						<td><b>Post Title :</b></td><td> <input type="text" name="posttitle" required="" placeholder="Enter Title" class="Cinput"></td>
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
						
						<td><b>Sub Category :</b></td>
							<td>
	                          <select class="form-control" name="subcategory" required>

                               <option value="">Select Sub Category </option>

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
						<td><b>Post<br>Description :</b></td><td> <textarea name="postdescription" required="" placeholder="Post Description" class="Cinput"></textarea></td>
					</tr>
					<tr>
						
						<td><b>Image Feature :</b></td>
						<td><input type="file" name="image" id="image" class="btn" required></td>
					</tr>
					<tr>
						<td colspan="2"><button type="submit" name="submit" value="Upload Image/Data" class="btn">Save and Post</button></td>
					</tr>
				</table>
			</form>
		</center>

	</div>


</div>


</body>
</html>