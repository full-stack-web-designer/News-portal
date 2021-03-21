<?php
    session_start();
    include('includes/connection.php');
    error_reporting(0);
    
    
        if($_GET['action']=='del' && $_GET['pid'])
        {
          $id=intval($_GET['pid']);
          $query=mysqli_query($con,"UPDATE tblposts set Is_Active='0' where id='$id'");
          echo "<script>alert('Post deleted.')</script>";
        }
        if($_GET['presid'])
        {
          $id=intval($_GET['presid']);
          $query=mysqli_query($con,"UPDATE tblposts set Is_Active='1' where id='$id'");
          echo "<script>alert('Post restored successfully.')</script>";
        }
        if($_GET['action']=='parmdel' && $_GET['pid'])
        {
          $id=intval($_GET['pid']);
          $query=mysqli_query($con,"DELETE from  tblposts  where id='$id'");
          echo "<script>alert('Post deleted forever.')</script>";
        }
    

?>


<!DOCTYPE html>
<html>
<head>
	<title>News Portal | Manage Post</title>

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

				<h4>Manage Posts</h4>
				<p><font color="blue">Admin / Posts </font>/ Manage Posts</p><hr width="100%"/>

			</div>
			
			<div>
			
				<a href="add_Post.php">
					<button id="addToTable"><i><b>+ Add</b></i></button>
                </a>

			</div>

			<div class="table-responsive">

                <table class="table m-0 table-colored-bordered table-bordered-primary">
                    <thead>
                     <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>SubCategory</th>
                        <th>Action</th>
                     </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $query=mysqli_query($con,"SELECT * from  tblcategory INNER JOIN tblsubcategory ON tblsubcategory.CategoryId = tblcategory.id INNER JOIN tblposts ON tblposts.SubCategoryId = tblsubcategory.SubCategoryId where tblposts.Is_Active=1");
                  
                        while($row=mysqli_fetch_array($query))
                        {
                        ?>

                        <tr>
                        
                            <td><?php echo htmlentities($row['PostTitle']);?></td>
                            <td><?php echo htmlentities($row['CategoryName']);?></td>
                            <td><?php echo htmlentities($row['Subcategory']);?></td>
                           
                            <td><a href="edit_post.php?pid=<?php echo htmlentities($row['id']);?>"><i class="fa fa-pencil" style="color: #29b6f6;">Edit</i></a> 
                            &nbsp;<a href="manage_posts.php?pid=<?php echo htmlentities($row['id']);?>&&action=del" onclick="return confirm('Do you realy want to delete ?')"> <i class="fa fa-trash-o" style="color: #f05050">Delete</i></a> </td>
         
                        </tr>
                        <?php
                       
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
                         <th>Title</th>
                        <th>Category</th>
                        <th>SubCategory</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                         $query=mysqli_query($con,"SELECT * from  tblcategory INNER JOIN tblsubcategory ON tblsubcategory.CategoryId = tblcategory.id INNER JOIN tblposts ON tblposts.SubCategoryId = tblsubcategory.SubCategoryId where tblposts.Is_Active=0");
                        
                          while($row=mysqli_fetch_array($query))
                          {
                        ?>

                        <tr>
                           
                           <td><?php echo htmlentities($row['PostTitle']);?></td>
                            <td><?php echo htmlentities($row['CategoryName']);?></td>
                            <td><?php echo htmlentities($row['Subcategory']);?></td>
                           
                            <td><a href="manage_posts.php?presid=<?php echo htmlentities($row['id']);?>"><i class="fa fa-pencil" style="color: #29b6f6;">Restore</i></a> 
                            &nbsp;<a href="manage_posts.php?pid=<?php echo htmlentities($row['id']);?>&&action=parmdel" onclick="return confirm('Do you realy want to delete ?')"> <i class="fa fa-trash-o" style="color: #f05050">Delete</i></a> </td>
         
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
