<html>
  <head>
    <title>News Portal</title>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
      <style type="text/css">

        @import "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css";
        @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";

.index-main-div{
  width:100%;
  height:auto;
  margin:auto;
}
.index-div1{
  text-align:right;
  width:100%;
  height:30px; 
  background-color: skyblue;
  padding-right:40px; 
}
.index-div1 ul li{
  float:left;
  list-style-type:none;
}
.index-div1 ul li a{
  color:red;
  text-decoration:none;
  padding:5px;
  margin:10px;
  }
 .index-div1 ul li a:hover{
  background-color:green;
  color:yellow;
  transition:0.6s ease;
  }
  .index-div2{
  border:1px solid white;
  width: 100%;
  height: 150px; 
  background-color:white; 
  }
.index-div2 h1 a{
  text-decoration:none;
  color:blue;
}
.index-div2 h1 {
  position: absolute; top:80px; left:40px;
}
.index-div3{ 
  position: absolute;top:60px;
  left:700px;
  border:1px solid white;
  height:100px; 
  width:630px;
  background-color:black; 
  }
.index-div3 h2{
  position: absolute;left:40px; top:25px;
}
.index-div3 h2 a{
  text-decoration:none;
  }
.index-div3 h3 a{
  position: absolute;top:28px;left:380px; 
  border:1px solid skyblue;
  width:175px;
  height:45px;
  background-color:skyblue; 
  text-decoration:none;
  color:white;
  padding:5px; 
  border-radius: 10px;

  }
.index-div4{
  margin-top:10px;
  border:1px solid skyblue;
  width: 100%;
  height: 50px;
  background-color:skyblue; 
  }
  .index-div4 ul li{
  margin-top:12px;
  float:left;
  list-style-type:none;
}
.index-div4 ul li a{
  color:red;
  text-decoration:none;
  padding:5px;
  margin:10px;
  }
 .index-div4 ul li a:hover{
  background-color:green;
  color:yellow;
  transition:0.6s ease;
  }
  .login{
    float:right;
  }
  .allis{
    position: absolute;left:70px;top:60px; 
  }
   #slider
  {
    margin-top: 5px;
  }
  #slider *{margin: 0; padding: 0;}
    @keyframes slide
    {
      0%{left: 0%;}
      10%{left: 0%;}
      20%{left: -100%;}
      30%{left: -100%;}
      40%{left: -200%;}
      50%{left: -200%;}
      60%{left: -300%;}
      70%{left: -300%;}
      80%{left: -400%;}
      90%{left: -400%;}
      100%{left: 0;}
            
    }
      #slider{overflow:hidden;}
      #slider figure img{float: left;width: 20%;}
      #slider figure{position: relative; width: 500%; animation: slide 20s infinite;
    }
.index-div5{
    position: absolute;
    margin-left: 0px;
    width:45%;
  }
.index-div6{
  position: absolute;left:610px;
  margin-top:5px;
}
.index-div6-in1{
  position: absolute;top:175px;left:30px;
  background-color:#E68B10;
  border:1px solid #E68B10;
  padding:5px; 
}
.index-div6-in2{
  position: absolute;top:220px;left:30px;
}
.index-div6-in3{
  position: absolute;top:245px;left:30px;
}
.index-div7{
  position: absolute;left:980px;
  margin-top:5px;
}
.index-div7-in1{
  position: absolute;top:175px;left:30px;
  background-color:#DC3D12;
  border:1px solid #DC3D12;
  padding:5px; 
}
.index-div7-in2{
  position: absolute;top:220px;left:30px;
}
.index-div7-in3{
  position: absolute;top:245px;left:30px;
}
.index-div8{
  width:100%;
  height:40px; 
  background-color:#A7F4E4;
  position: absolute;top:560px;
  padding-left:50px;
  padding-top:8px; 
}
.index-div8-in1{
  position: absolute;left:965px;top:5px;
  width:300px;
}
.index-div8-in2{
  position: absolute;left:1270px;top:5px;
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
.index-div9{
   position: absolute;top:630px;left:50px;
}
.index-div9 a{
  text-decoration:none;
  color:black;
}
.index-div11{
  width:800px;
  height:40px; 
  background-color:#A7F4E4;
  position: absolute;top:1350px;
  padding-left:50px;
  padding-top:8px; 
}
.index-div11 a{
  text-decoration:none;
  color:red;
  padding:5px;
  }
.index-div12{
   position: absolute;top:1400px;left:50px;
}
.index-div12 a{
  text-decoration:none;
  color:black;
}
.sider{
  position:absolute;top:680px;left:900px;
}
.foot{
  position: absolute;top:2100px;
  width:100%;
}

      </style>
  </head>
<body>
  <div class="sider">
    <?php
    include('includes/sider.php');
    ?>
  </div>
  <div class="index-main-div">
       <div class="index-div1">
          <ul class="index-about">
            <li><a href="about.php">About us</a></li>
            <li><a href="contact.php">Contact us</a></li>
            
          
            <a href="facebook.html"><font color="red"><i class="fa fa-facebook-square"></i></font></a>
            <a href="twitter.html"><font color="red"><i class="fa fa-twitter-square"></i></font></a>
            <a href="google.html"><font color="red"><i class="fa fa-google-plus-square"></i></font></a>
            <a href="pinterest.html"><font color="red"><i class="fa fa-pinterest-square"></i></font></a>
            <a href="youtube.html"><font color="red"><i class="fa fa-youtube-square"></i></font></a>
          </ul>
       </div>

      <div class="index-div2">
         <h1 class="animated heartBeat"><a href="#"><i class="fa fa-globe" aria-hidden="true"></i> <font color="black" >NEWS</font> PORTAL</h1></a>
        <div class="index-div3">
          <h2><a href="#"><font color="white">NEWS</font> PORTAL</h2><font color="white" class="allis">All is Well</font></a>
          <h3><a href="#">DOWNLOAD</h3></a>
        </div>
      </div>
      <div class="index-div4">
        <ul>
          <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li><a href="#">Breking News</a></li>
          <li><a href="education.php">Education</a></li>
          <li><a href="fashion.php">Fashion</a></li>
          <li><a href="technology.php">Technology</a></li>
          <li><a href="sports.php">Sports</a></li>
          <span class="login">
          <li><a href="login.php"><b>Login</b></a></li>
          <li><a href="signup.php"><b>Sign up</b></a></li>
          </span>
        </ul>
      </div>
  </div>
<div class="index-div5">
    <div id="slider">
      <figure>
          <a href="#"> <img src="image/a.jpg" height="300px" width="500px"></a>
          <a href="#"> <img src="image/b.jpg" height="300px" width="500px"></a>
          <a href="#"> <img src="image/c.jpg" height="300px" width="500px"></a>
          <a href="#"> <img src="image/d.jpg" height="300px" width="500px"></a>
          <a href="#"> <img src="image/g.jpg" height="300px" width="500px"></a>
      </figure>
    </div>
</div>

    <div class="index-div6">
            <a href="#" class="index-div6-in1"><font color="white">Music</font></a>
            <a href="#" class="index-div6-in2"><font color="white">Grand Live Concert In Germany 2019</font></a>
            <a href="#" class="index-div6-in3"><font color="white"><i class="fa fa-calendar"></i> September 18, 2019</font></a>
            <img src="image/son.jpg" height="300px" width="366px">
    </div>
        <div class="index-div7">
            <a href="sports.php" class="index-div7-in1"><font color="white">Sports</font></a>
            <a href="sports.php" class="index-div7-in2"><font color="white">Grand Live Match In India 2019</font></a>
            <a href="sports.php" class="index-div7-in3"><font color="white"><i class="fa fa-calendar"></i> September 20, 2019</font></a>
            <img src="image/sport.jpg" height="300px" width="366px">
        </div>
      <div class="index-div8">
         <a href="#"><b><i class="fa fa-futbol-o"></i> SPORTS</b></a>
      </div>
<div class="index-div9">
        <a href="sports.php"><h1> India vs South Africa, 2nd T20I,<br> Mohali</h1></a>
        <a href="sports.php"> <img src="image/virat.jpg" height="300px" width="550px"></a><br><br>

        <h3>India Win ...</h3><br>

<p>After the dampener in Dharamsala, it was all too easy for India in Mohali. Only once have India<br> failed down to chase a score that's shy of 150 while playing a T20I at home. September 18 wasn't<br> going to be an anomaly as India strolled past 150 in 19 overs with seven wickets in hand exposed some<br> of the very visible frailties of the South African line-up as the hosts took a 1-0 lead in the three-match<br> series. Deepak Chahar was India's star - ending with 4-0-22-2 - but the Indian bowlers were aided by<br> South Africa's inability to kick on.<br><br>
  <a href="read_more_sports.php"><button type="button" class="btn btn-primary">Read more</button><a>
  <a href="#"><button type="button" class="btn btn-primary">Next</button><a>  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

</div>
<div class="index-div11">
         <a href="education.php"><b><i class="fa fa-futbol-o"></i> EDUCATION</b></a>
</div>
<div class="index-div12">
  <a href="education.php"><h1>AICTE to approve B.Tech course in AI,<br> data science</h1></a><br>
    
    <a href="education.php"><img src="image/Education5.jpeg" height="300px" width="550px"></a>
    <p class="Educationp1"><font size="6">T</font>he All India Council for Technical Education (AICTE) has decided to approve a Bachelor of<br>Technology (B. Tech) course in Artificial Intelligence and data science to cater to the growing <br>demand for skilled manpower in these technologies, said AICTE chairman Anil Dattatraya<br> Sahasrabudhe in Chennai on Saturday.<br>

    Responding to a question during a session at a conference organised by Education Promotion Society<br> for India (EPSI), he said a committee constituted to assess the need for offering degree programmes<br> in technologies, which are driving the next big transformation, had approved AI and data science alone.<br><br>
    <a href="#"><button type="button" class="btn btn-primary">Read more</button><a>
  <a href="#"><button type="button" class="btn btn-primary">Next</button><a>  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</div>

<div class="foot">
<?php
include('includes/footer.php');
?>
</div>
</body>
</html>