

<?php

require('connect.php');
session_start();
if(!isset($_SESSION['login_user']))
{

header("location:login.php");
}


$msg="Add Your Demographics";
   $error='';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password  from form 
      
      $gender = $_POST['gender'];
      $dob = $_POST['bdate']; 
	  $emailid = $_POST['email']; 
	  $country = $_POST['country'];
      $lang = $_POST['language']; 
	  $cell = $_POST['cell']; 
	  $home = $_POST['home'];
      $addr = $_POST['address']; 
	  $state = $_POST['state']; 
	  $city = $_POST['city'];
      $zip = $_POST['zipcode']; 
	
	
	$name=$_SESSION['login_user'];
	

 $check="SELECT id FROM patientdb WHERE username='$name'";


 $res = mysql_query($check);

while( $row = mysql_fetch_assoc($res) )
{

 $pid=$row['id'] ;
}
//echo $pid;
//echo $zip;
//echo $addr;
//echo $gender;
//echo $country;

 $query = "INSERT INTO `demo` (pid, gender, dob, email, country, language, cell_phone, home_phone, address, state, city, zipcode) VALUES ('$pid','$gender', '$dob','$emailid','$country', '$lang', '$cell', '$home', '$addr', '$state', '$city', '$zip')";


    $result = mysql_query($query);
   $msg="Record Saved Successfully";
   }	
   
?>


<html>
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





form{


background: url(homeimages/book.jpg) no-repeat center center fixed;
border-style: solid;
font-style: oblique;
///width:100%;
margin-left:12cm;
margin-top:3em;
margin-right:12cm;
 //background-color: black;
// height:10cm;
 padding:10px;

 //opacity:0.8;
}
input[type=submit]{
	
	background-color:blue;
	color:white;
	border-radius:5px;
	padding:10px;
	width:90px;
	
}
#footer {
    background-color:grey;
    color:white;

    clear:both;
    text-align:center;
   padding:20px;	
	 
}


</style>
<body>

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

<form action="" method="post">

<center><div style = " color:black; margin-top:10px"><h2><?php echo $msg; ?></h2></div></center>

Gender : <input type="radio" name="gender" value="Male" checked> Male
			<input type="radio" name="gender" value="Female" >Female<br><br>
	DOB : <input type="date" name="bdate" value="1990-01-01"><br><br>
			
	Email : &nbsp;&nbsp;<input type="email" name="email" placeholder="example@form.com" required><br>		
		<br>

Country:<select name="country">
    <option value="India">India</option>
    <option value="USA">USA</option>
    <option value="RASIA">RASIA</option>
    <option value="FINLAND">FINLAND</option>
    <option value="CANADA">CANADA</option>
 </select>
<br><br>
Language:<select name="language" >
    <option value="English">English</option>
    <option value="Marathi">Marathi</option>
    <option value="Hindi">Hindi</option>
  
 </select>
<br><br>
Cell Phone:<input type="text" name="cell" required=""> <br><br>
Home Phone:<input type="text" name="home" > <br><br>
Address:<input type="text" name="address" required=""> <br><br>
State:<select name="state" >
    <option value="Maharashtra">Maharashtra</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Gujarat">Gujarat</option>
  
 </select>&nbsp;&nbsp;&nbsp;&nbsp;
City:<select name="city" >
    <option value="Mumbai">Mumbai</option>
    <option value="Pune">Pune</option>
    <option value="Bangalore">Bangalore</option>
  
 </select><br><br>


Zip Code: <input type="text" name="zipcode" required=""> <br> <br>

<center><input type="submit" value="Save"></center>

			   
</form>
</body>
<div id="footer">
 Copyright &copy; Shivprasad Sambhare 
 <br><center>Contact:sambhareshivprasad@gmail.com</center>
</div>
</html>