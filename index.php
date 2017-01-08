<?php
	   
require('connect.php');
session_start();
if(!isset($_SESSION['login_user']))
{

header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<title>HealthCare</title>
<head>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<style>


body{



background-color:#DCD9D8;
}

#session{

text-align:right;
float:right;
padding:30px;

}

#session a{
color:black;
text-decoration:none;
}

#session a:hover{
color:blue;

}

#header {

width:100%;
float:left;
text-align:center;
//background-color:red;
background:url(homeimages/head.jpg);
background-size:cover;
border-radius:5px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}



#header img{
	padding:10px;	
//	background-color:white;
float:left;
}







#board{

padding:30px;


width:100%
}
#box1{
    width:30%;
    float:left;
   // padding:80px;	
text-align:center


   
}
#box2{
   width:40%;
    float:left;
 //   padding:80px;	
text-align:center


}

#box2 img{
	
	margin-top:30px;
}

#board a{
	
	text-decoration:none;
	
}

#footer {
    background-color:grey;
    color:white;

    clear:both;
    text-align:center;
   padding:20px;	
	 
}


</style>

	

</head>

<body >
<div id="body">


<div id="header">
<img src="homeimages/logo3.png" height=110 width=150>
<div id="session">
<b>
<?php 


$uname=$_SESSION['login_user'];
 $check="SELECT Name FROM patientdb WHERE username='$uname'";


 $result = mysql_query($check);

while( $row = mysql_fetch_assoc($result) )
{

 echo "Welcome : {$row['Name']}" ; 
}?>
</b>
<br>

<br>
<a href=logout.php><button style="background-color:green; border-radius:5px; color:white; padding:7px;">Logout</button></a>
</div>
<h1>HealthCare</h1>
<?php require('menu.html');?>
</div>



<hr>



<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/slide1.jpg" alt="slide1" title="slide1" id="wows1_0"/></li>
		<li><img src="data1/images/slide2.jpg" alt="slide2" title="slide2" id="wows1_1"/></li>
		<li><img src="data1/images/slide3.jpg" alt="slide3" title="slide3" id="wows1_2"/></li>
		<li><a href="http://wowslider.com/vi"><img src="data1/images/slide4.jpg" alt="slider jquery" title="slide4" id="wows1_3"/></a></li>
		<li><img src="data1/images/slide5.jpg" alt="slide5" title="slide5" id="wows1_4"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="slide1"><span><img src="data1/tooltips/slide1.jpg" alt="slide1"/>1</span></a>
		<a href="#" title="slide2"><span><img src="data1/tooltips/slide2.jpg" alt="slide2"/>2</span></a>
		<a href="#" title="slide3"><span><img src="data1/tooltips/slide3.jpg" alt="slide3"/>3</span></a>
		<a href="#" title="slide4"><span><img src="data1/tooltips/slide4.jpg" alt="slide4"/>4</span></a>
		<a href="#" title="slide5"><span><img src="data1/tooltips/slide5.jpg" alt="slide5"/>5</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">jquery slider free download</a> by WOWSlider.com v7.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->






<div id="line"></div>



<div id="board">
<center>
<div id="box1"><a href="demographics.php"><h2> Add Your Details</h2><img src="homeimages/demo.jpg" height=170 width=250></a>
</div>
<div id="box2"><a href="medical_history.php"><h2> Add Medical History</h2><img src="homeimages/logo3.png" height=120 width=250></a>
</div></a>


<center>
</div>

<div id="footer">
 Copyright &copy; Shivprasad Sambhare 
 <br><center>Contact:sambhareshivprasad@gmail.com</center>
</div>
</div>

</body>
</html>
