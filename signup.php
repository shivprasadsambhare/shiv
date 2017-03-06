<?php

require('connect.php');



session_start();
if(isset($_SESSION['login_user']))
{

header("location:index.php");
}
 
 $msg="";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password  from form 
      
      $name = $_POST['name'];
      $uname = $_POST['uname']; 
	  $pass = $_POST['pass']; 
	  $pass2=$_POST['pass2']; 
	  
	 



	if($pass==$pass2)
	{
		 $query="select * from patientdb where username='$uname'";
		 $res=mysql_query($query);
	  $numrows=mysql_num_rows($res);
		
	if($numrows==0)
		{
			$q="insert into patientdb (name,username,password)values('$name','$uname','$pass')";
			$result=mysql_query($q);
			$_SESSION['login_user']=$uname;
			 header("location:index.php");
		}
		
		else{
			$msg="Username Already Exist";
			
		}
		
	}
	else{
		
		
		
		$msg="Please Check Password";
	}
	
   }
?>

<html>


<style>



body{

background: url(homeimages/health.jpg) no-repeat center center fixed;

  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
 background-size: cover;
background-color:white;
}


 .button {
    background-color: black;
    border: none;
    color: white;
    padding: 10px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
	font-style: oblique;
  //  margin: 4px 2px;
    cursor: pointer;
	border-radius: 4px;
	opacity: 0.8;
	margin-right:2cm;
margin-left:2cm;
}

.button:hover {
    background-color: #008CBA;
    color: white;
}

#header {
    background-color:black;
    color:white;
opacity: 0.6;

    
    padding:5px;
}









#logintable{


background: url(homeimages/book.jpg) no-repeat center center fixed;
border-style: solid;
font-style: oblique;
///width:100%;
margin-left:12cm;
margin-top:8em;
margin-right:12cm;
 background-color: black;
// height:10cm;
 padding:5px;
 text-align:center;
 //opacity:0.8;
}



</style>



<body>


<div id="logintable">


<h1>Register</h1>


  
<form action="" method="post">

Name:&nbsp;&nbsp;
  <input type="text" name="name" placeholder=FullName required><br><br>
  
Username:&nbsp;&nbsp;
  <input type="text" name="uname" placeholder=username required><br><br>

Password:&nbsp;&nbsp;
  <input type="password" name="pass" required><br><br>
Confirm Password:
  <input type="password" name="pass2" required><br><br>
  
  <br>
<input type="submit" class="button" name=submit value=Sign-Up></form> 

<center><div style = " color:black; margin-top:10px"><h3><?php echo $msg; ?></h3></div></center>
</form>
</body>
</html>
