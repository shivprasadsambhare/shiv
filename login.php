

<?php

require('connect.php');


session_start();
if(isset($_SESSION['login_user']))
{

header("location:index.php");
}



   
   $error='';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password  from form 
      
      $user = $_POST['username'];
      $pass = $_POST['password']; 
      
      $sql = "SELECT id FROM patientdb WHERE username = '$user' and password = '$pass'";
      $result = mysql_query($sql);
   
      $count = mysql_num_rows($result);
      
      // If result matched table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $user;
         
         header("location: index.php");
      }else {
         $error = "Your Username or Password is invalid";
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
margin-top:10em;
margin-right:12cm;
 //background-color: black;
// height:10cm;
 padding:10px;
 text-align:center;
 //opacity:0.8;
}



</style>




   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   
   
   <body>
   <div id="logintable">


<h1>Student Discussion & Help</h1>

<form action = "" method = "post">
               
               
			   
			   Username:
  <input type="text" name="username" placeholder=username><br><br>

  Password:&nbsp;
  <input type="password" name="password" placeholder=password><br><br>


<input type="submit" class="button" name=submit value=Login ></form> 

<a href=signup.php><h3 style="color:blue"> Sign Up </h3></a>


			   
<div style = "color:black; margin-top:10px"><h3><?php echo $error; ?></h3></div>



</div>


</body>
</html>