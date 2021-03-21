<html>
  <head>
     <link rel="stylesheet" type="text/css" href="css/animate.css">
      <style type="text/css">
        @import "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css";
        @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";

.header-main-div{
  width:100%;
  height:auto;
  margin:auto;
}
.header-div1{
  text-align:right;
  width:100%;
  height:30px; 
  background-color: skyblue;
  padding-right:40px; 
}
.header-div1 ul li{
  float:left;
  list-style-type:none;
}
.header-div1 ul li a{
  color:red;
  text-decoration:none;
  padding:5px;
  margin:10px;
  }
 .header-div1 ul li a:hover{
  background-color:green;
  color:yellow;
  transition:0.6s ease;
  }
  .header-div2{
  border:1px solid white;
  width: 100%;
  height: 150px; 
  background-color:white; 
  }
.header-div2 h1 a{
  text-decoration:none;
  color:blue;
}
.header-div2 h1 {
  position: absolute; top:80px; left:40px;
}
.header-div3{ 
  position: absolute;top:55px;
  left:700px;
  border:1px solid white;
  height:100px; 
  width:630px;
  background-color:black; 
  }
.header-div3 h2{
  position: absolute;left:40px; top:20px;
}
.header-div3 h2 a{
  text-decoration:none;
  color:blue;
}
.header-div3 h3 a{
  position: absolute;top:25px;left:380px; 
  border:1px solid skyblue;
  width:175px;
  height:45px;
  background-color:skyblue; 
  text-decoration:none;
  color:white;
  padding:5px; 
  border-radius: 10px;

  }
.header-div4{
  border:1px solid skyblue;
  width: 100%;
  height: 50px;
  background-color:skyblue; 
  }
  .header-div4 ul li{
  margin-top:12px;
  float:left;
  list-style-type:none;
}
.header-div4 ul li a{
  color:red;
  text-decoration:none;
  padding:5px;
  margin:10px;
  }
 .header-div4 ul li a:hover{
  background-color:green;
  color:yellow;
  transition:0.6s ease;
  }
  .allis{
    position: absolute;left:70px;top:60px; 
  }
      </style>
  </head>
<body>
  <div class="header-main-div">
	     <div class="header-div1">
          <ul class="header-about">
            <li><a href="about.php">About us</a></li>
            
            <a href="facebook.html"><font color="red"><i class="fa fa-facebook-square"></i></font></a>
            <a href="twitter.html"><font color="red"><i class="fa fa-twitter-square"></i></font></a>
            <a href="google.html"><font color="red"><i class="fa fa-google-plus-square"></i></font></a>
            <a href="pinterest.html"><font color="red"><i class="fa fa-pinterest-square"></i></font></a>
            <a href="youtube.html"><font color="red"><i class="fa fa-youtube-square"></i></font></a>
          </ul>
	     </div>

      <div class="header-div2">
	       <h1 class="animated flash"><a href="index.php"><i class="fa fa-globe" aria-hidden="true"></i> <font color="black">NEWS</font> PORTAL</h1></a>
	      <div class="header-div3">
          <h2><a href="index.php"><font color="white">NEWS</font> PORTAL</h2><font color="white" class="allis">All is Well</font></a>
          <h3><a href="index.php">DOWNLOAD</h3></a>
        </div>
      </div>
      <div class="header-div4">
        <ul>
          <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li><a href="breking.php">Breking News</a></li>
          <li><a href="education.php">Education</a></li>
          <li><a href="fashion.php">Fashion</a></li>
          <li><a href="Technology.php">Technology</a></li>
          <li><a href="Sports.php">Sports</a></li>
        </ul>
      </div>
  </div>
</body>
</html>