<?php
    session_start();
    include('includes/connection.php');
    error_reporting(0);
    
    
       
        if($_GET['appid'])
        {
          $id=intval($_GET['appid']);
          $query=mysqli_query($con,"UPDATE tblcomments set status='0' where id='$id'");
          echo "<script>alert('Comment Unapprove successfully.')</script>";
        }
        if($_GET['action']=='del' && $_GET['rid'])
        {
          $id=intval($_GET['rid']);
          $query=mysqli_query($con,"DELETE from  tblcomments  where id='$id'");
          echo "<script>alert('Comment Delete successfully.')</script>";
        }
    

?>

<!DOCTYPE html>
<html>
<head>
	<title>News Portal | Approve Comments</title>

	<style type="text/css">

	
.hadding h3{
		margin-left: 180px;

}
.hadding p{
		text-align: right;
		margin-right: 30px;
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

				<h4>Manage Approve Comments</h4>
				<p><font color="blue">Admin / Comments </font>/ Approve Comments</p><hr width="100%"/>

			</div>
			
	
			<div class="table-responsive">

                <table class="table m-0 table-colored-bordered table-bordered-primary">
                    <thead>
                     <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email Id</th>
                        <th>Comments</th>
                        <th>Status</th>
                        <th>Post / News</th>
                        <th>Posting Date</th>
                        <th>Action</th>
                     </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $query=mysqli_query($con,"SELECT tblcomments.id,  tblcomments.name,tblcomments.email,tblcomments.postingDate,tblcomments.comment,tblposts.id as postid,tblposts.PostTitle from  tblcomments join tblposts on tblposts.id=tblcomments.postId where tblcomments.status=1");
                        $cnt=1;
                        while($row=mysqli_fetch_array($query))
                        {
                        ?>

                        <tr>
                            <th><?php echo htmlentities($cnt);?></th>
                            <td><?php echo htmlentities($row['name']);?></td>
                            <td><?php echo htmlentities($row['email']);?></td>
                            <td><?php echo htmlentities($row['comment']);?></td>
                            <td><?php $st=$row['status'];
                            if($st=='0'):
                              echo "Wating for approval";
                            else:
                              echo "Approved";
                            endif;
                            ?></td>

                            <td><?php echo htmlentities($row['PostTitle']);?></td>
                            <td><?php echo htmlentities($row['postingDate']);?></td>
                           
                            <td><a href="approve_comments.php?appid=<?php echo htmlentities($row['id']);?>"><i style="color: #29b6f6;">Unapprove</i></a> 
                          		&nbsp;<a href="approve_comments.php?rid=<?php echo htmlentities($row['id']);?>&&action=del"><i style="color: #f05050">Delete</i></a> </td>
                        </tr>
                        <?php
                        $cnt++;
                        } ?>
                    </tbody>
                                                  
                </table>

        	</div>

        	</div>

</div>
</body>
</html>
