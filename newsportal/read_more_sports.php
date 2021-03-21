<?php
    session_start();
    include('includes/connection.php');
    
        if(isset($_POST['submit']))
        {
             $name=$_POST['name'];
             $email=$_POST['email'];
             $comment=$_POST['comment'];
             $postid=intval($_GET['nid']);
             $st1='0';
            $query=mysqli_query($con,"INSERT into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
            if($query)
            {
                echo "<script>alert('comment successfully submit.')</script>";
            }
            else{
                echo "<script>alert('Something went wrong . Please try again.')</script>";  
            } 
        }
    
?>


<html>
  <head>
    <title>News Portal | Sports Page</title>
    <head>
      <style type="text/css">
        .index-div8{
            width:100%;
            height:40px; 
            background-color:#A7F4E4;
            
            padding-left:50px;
            padding-top:8px; 
          }
          .index-div8-in1{
           
            width:300px;
          }
          .index-div8-in2{
            
            color:white;
            background-color:blue;
            font-size:10px;
            padding:5px;
          }
          .index-div8 a{
            text-decoration:none;
            color:red;
            padding:5px;
            margin:10px;
            }

        .index-div9 a{
              text-decoration:none;
              color:black;
              margin-left: 400px; 
            
            }
            p{
              text-align: center;
            }
            h1{
              text-align: center;
            }
              h3{
              text-align: center;
            }
             img{
               margin-left: 400px; 
            }
            #comment{
              margin-left: 300px;
               width: 60%;
            }
      </style>
    </head>
   <body>
    <div>
          <div>
              <?php
                include 'includes/head.php';
              ?>
          </div>
          <br>
          <div class="index-div8">
            <a href="sports.php"><b><i class="fa fa-futbol-o"></i> SPORTS</b></a>
          </div>
          <div class="index-div9">
             
          <a href="sports.php"><h1> India vs South Africa, 2nd T20I,<br> Mohali</h1></a>
         <img src="image/virat.jpg" height="300px" width="550px"><br><br>

          <h3>India Win ...</h3><br>

            <p>After the dampener in Dharamsala, it was all too easy for India in Mohali. Only once have India<br> failed down to chase a score that's shy of 150 while playing a T20I at home. September 18 wasn't<br> going to be an anomaly as India strolled past 150 in 19 overs with seven wickets in hand exposed some<br> of the very visible frailties of the South African line-up as the hosts took a 1-0 lead in the three-match<br> series. Deepak Chahar was India's star - ending with 4-0-22-2 - but the Indian bowlers were aided by<br> South Africa's inability to kick on.<br></p>
          </div>
          <div class="card-body" id="comment">
              <form name="Comment" method="post">
                <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter your fullname" required>
              </div>

              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
              </div>


              <div class="form-group">
                  <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
              </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </form>
          </div>

        <div>
        <?php
            include('includes/footer.php');
        ?>
        </div>
</div>
</body>
</html>