 <?php

  include 'includes/connection.php'
 ?>

 <html>
 <head>
  <style type="text/css">
    body{
      margin:0px;
      padding: 0px;
    }
  .search-box{
    border:1px solid green;
    height: 180px;
    width: 380px;
    border-radius:10px;
  }
   .search-text{
    text-align:center;
    margin:20px;
   }
   .search{
    padding-left:50px;
    margin:10px;
   }
   .cat-box{
    position:absolute;top:270px;
    border:1px solid green;
    height:300px;
    width:380px;
    border-radius:10px;
    padding:20px;
    padding-left:40px;
   }
   .cate{
    padding-left:30px;
   }
.recent{
     position:absolute;top:670px;
    border:1px solid green;
    height:500px;
    width:380px;
    border-radius:10px;
    padding:20px;
    padding-left:40px;
}
    
  </style>
 </head>
 <body>
  <div class="search-box"> 
      <div class="search">
          <h1>Search</h1>
      </div>
      <div class="search-text">
        <form method="POST" action="search.php" name="search">
          <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required="">
          <button class="btn btn-secondary" type="submit">Go!</button>
          </form>
    </div>
  </div>
  <div class="cat-box">
      <div class="cate">
          <h1> Categories</h1>
      </div>
      <div>
          <ul>
          <?php $query=mysqli_query($con,"SELECT id,CategoryName from tblcategory");
          while($row=mysqli_fetch_array($query))
          {
          ?>

          <li>
          <a href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
          </li>
          <?php } ?>
          </ul>
      </div>
       
  </div> 
  <div class="recent">
      <div class="cate">
          <h1>Recent News</h1>
      </div>
      <div class="card-body">
      <ul class="mb-0">
      <?php
      $query=mysqli_query($con,"SELECT tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
      while ($row=mysqli_fetch_array($query)) 
      {

      ?>
      <li>
      <a href="news_detail.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
      </li>
        <?php } ?>
      </ul>
  </div> 
  </div>   
</body>
</html>