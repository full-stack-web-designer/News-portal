<?php
 	session_start();
    include('includes/connection.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>News Portal | Dashboard Page</title>

</head>
<body>

<div class="container">

<div>
  <?php
  include 'includes/header.php';
  ?>
</div>
<center>
<div class="haddings">
	<a href="manage_category.php">
	 <div class="wigdet-one-content">

        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Categories Listed</p>
       <?php $query=mysqli_query($con,"SELECT * from tblcategory where Is_Active=1");
        $countcat=mysqli_num_rows($query);
        ?>
        <h2><?php echo htmlentities($countcat);?> <small></small></h2>
                                    
      </div>
  	</a>
  	<a href="manage_sub_category.php">
  		<div class="wigdet-one-content">

         <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Listed Subcategories</p>
        <?php $query=mysqli_query($con,"SELECT * from tblsubcategory where Is_Active=1");
         $countsubcat=mysqli_num_rows($query);
                                    ?>
        <h2><?php echo htmlentities($countsubcat);?> <small></small></h2>
                              
        </div>

  	</a>
  	<a href="manage_posts.php">
  		 <div class="wigdet-one-content">

        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Live News</p>
        <?php $query=mysqli_query($con,"SELECT * from tblposts where Is_Active=1");
        $countposts=mysqli_num_rows($query);
        ?>
        <h2><?php echo htmlentities($countposts);?> <small></small></h2>
                              
        </div>

  	</a>
  	<a href="manage_posts.php">
  		<div class="wigdet-one-content">

        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Trash News</p>
        <?php $query=mysqli_query($con,"SELECT * from tblposts where Is_Active=0");
        $countposts=mysqli_num_rows($query);
        ?>
        <h2><?php echo htmlentities($countposts);?> <small></small></h2>
                              
        </div>
  	</a>
	
</div>
</center>
	
</div>


</body>
</html>