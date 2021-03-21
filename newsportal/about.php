<?php
include('includes/head.php');
?>
<html>
<head>
	<title>News Portal | About</title>
<style>

  
.about-main{
 position: absolute;top:300px;left:350px; 
}
body{
  min-height:140vh;
  background-image: linear-gradient(120deg,#3498db,#8e44ad);
}
.about-div1{
  text-align: center;
  border:1px solid red;
  border-radius:8px;
  width: 700px;
  height: 120px; 
  background-color: skyblue; 
}
.about-div2{
  text-align: center;
  margin-top: 20px; 
  border:1px solid green;
  border-radius:8px;
  width: 700px;
  height: 120px; 
  background-color: skyblue; 
}
.about-div3{
  text-align: center;
  margin-top: 20px; 
  border:1px solid blue;
  border-radius:8px;
  width: 700px;
  height: 120px; 
  background-color: skyblue; 
}
p{
  padding-left: 3px;
  padding-top:10px;
}
.about1{
  position: absolute;top:9px;
  left:20px;
  border:1px solid white;
  width: 100px;
  height: 100px; 
 }
.about2{ 
  position: absolute;top:148px;
  left:20px;
  border:1px solid white;
 
  width: 100px;
  height: 100px; 
}
.about3{ 
  position: absolute;top:289px;
  left:20px;
  border:1px solid white;
  width: 100px;
  height: 100px; 
 }
 .foot{
  position: absolute; top:800px;
  width:100%; 
}
</style>
</head>
<body>
  <div class="about-main">
      <div class="about-div1"><font size="4px"><p><a href="shiv.html"><b>Mr. Shiv Chand Sahu :</b></a></p></font>
          <b>Contact :</b> +91 9170931852<br>
          <b> Email :</b><font color="blue"> rajaji941559@gmail.com</font>
        <div class="about1">
          <img src="image/f.jpg" height="100px" width="100px">
        </div>
      </div>
    <div class="about-div2"> <font size="4px"><p><a href="asif.html"><b>Mr. Asif Ahamad :</b></a></p></font>
     <b> Contact : </b>+91 8709189256<br>
      <b>Email :</b><font color="blue"> ashifansari704@gmail.com</font>
      
        <div class="about2">
          <img src="image/asif.jpg" height="100px" width="100px">
        </div>
    </div>
     <div class="about-div3"><font size="4px"><p> <a href="sandeep.html"><b>Mr. Sandeep Patel :</b></a></p></font>
           <b>Contact :</b> +91 9516161756<br>
           <b>Email :</b><font color="blue"> sandeeppatel1245570@gmail.com</font>
        <div class="about3">
         <img src="image/san.jpg" height="100px" width="100px">
        </div>
      
     </div>
  </div>
</body>
<div class="foot">
<?php
include('includes/footer.php');
?>
</div>
</html>