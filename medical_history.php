
<?php
require('connect.php');
  session_start();
  

if(!isset($_SESSION['login_user']))
{

header("location:login.php");
}
$history="";
$family_history="";
$surgical_history="";
$smoking="";
$eating="";
$sleeping="";
$other="";
$allergies="";

$msg="Add Your Medical Details";
if($_SERVER["REQUEST_METHOD"] == "POST")
{//PHP  on submit






if(!empty($_POST['check_list']))
{
//  store and display values of  checked checkbox.
foreach($_POST['check_list'] as $selected){
//echo $selected."</br>";
$history=$history." "."/"." ".$selected;

}






if(!empty($_POST['check_list_family']))
{
//  store and display values of individual checkbox.
foreach($_POST['check_list_family'] as $selected){
//echo $selected."</br>";
$family_history=$family_history." "."/"." ".$selected;

}
}



  $surgical_history = $_POST['surgical'];
  $allergies = $_POST['allergies'];
  
  $smoking = $_POST['smoking'];
  $eating = $_POST['eating'];
  $sleeping = $_POST['sleeping'];
  $other = $_POST['other'];
//----------------------------------------------------------


}


$name=$_SESSION['login_user'];
	

 $check="SELECT id FROM patientdb WHERE username='$name'";


 $res = mysql_query($check);

while( $row = mysql_fetch_assoc($res) )
{

 $pid=$row['id'] ;
}


 $query = "INSERT INTO `medical` (pid, history, family_history, surgical_history, allergies, smoking, eating, sleeping, other) VALUES ('$pid','$history', '$family_history','$surgical_history','$allergies', '$smoking', '$eating', '$sleeping', '$other')";

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

//width:600px;
margin-left:12cm;
margin-top:3em;
margin-right:12cm;
 //background-color: black;
height:155%;
 padding:25px;

 //opacity:0.8;
}

#info1{
	float:left;
	
	
}

#info21{
	margin-top:10px;
	clear:both;
	float:left;
	
	
}
#info2{
	float:left;
	
	margin-top:10px;
}

#info3{
	float:left;
	
clear:both;	
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
<form action="" method="post" name>
<center><div style = " color:black; margin-top:10px"><h2><?php echo $msg; ?></h2></div></center>
<div id="info1">
<b>
Medical History:</b><br>
<input type="checkbox" name="check_list[]" value="Alcohol Dependent"><label>Alcohol Dependent </label><br/>
<input type="checkbox" name="check_list[]" value="Anxiety"><label>Anxiety</label><br/>
<input type="checkbox" name="check_list[]" value="Allergies"><label>Allergies</label><br/>
<input type="checkbox" name="check_list[]" value="Asthma"><label>Asthma</label><br/>

<input type="checkbox" name="check_list[]" value="Cancer-Breast"><label>Cancer-Breast</label><br/>
<input type="checkbox" name="check_list[]" value="Cancer-Colon"><label>Cancer-Colon</label><br/>
<input type="checkbox" name="check_list[]" value="Cancer-Prostate"><label>Cancer-Prostate</label><br/>

<input type="checkbox" name="check_list[]" value="Cancer-Blood"><label>Cancer-Blood</label><br/>
<input type="checkbox" name="check_list[]" value="Cancer-Skin"><label>Cancer-Skin</label><br/>
<input type="checkbox" name="check_list[]" value="Cancer-Thyroid"><label>Cancer-Thyroid</label><br/>

<input type="checkbox" name="check_list[]" value="Depression"><label>Depression</label><br/>
<input type="checkbox" name="check_list[]" value="Diabetis"><label>Diabetis</label><br/>
<input type="checkbox" name="check_list[]" value="Erectile Dysfumction"><label>Erectile Dysfumction</label><br/>

</div>
<!---------------------------------------------------------->

<div id="info1">
<br>
<input type="checkbox" name="check_list[]" value="Headaches"><label>Headaches</label><br/>
<input type="checkbox" name="check_list[]" value="Heart Attack"><label>Heart Attack</label><br/>
<input type="checkbox" name="check_list[]" value="High Blood Pressure"><label>High Blood Pressure</label><br/>

<input type="checkbox" name="check_list[]" value="High Cholesterol"><label>High Cholesterol</label><br/>
<input type="checkbox" name="check_list[]" value="Obesity"><label>Obesity</label><br/>

<input type="checkbox" name="check_list[]" value="Sickle Cell"><label>Sickle Cell</label><br/>
<input type="checkbox" name="check_list[]" value="Surgery-Appendectomy"><label>Surgery-Appendectomy</label><br/>
<input type="checkbox" name="check_list[]" value="Surgery-Bypass"><label>Surgery-Bypass</label><br/>
<input type="checkbox" name="check_list[]" value="Surgery-Joint Replacement"><label>Surgery-Joint Replacement</label><br/>
<input type="checkbox" name="check_list[]" value="Surgery-Tyroidectomy"><label>Surgery-Tyroidectomy</label><br/>
<input type="checkbox" name="check_list[]" value="Surgery-Hysterectomy"><label>Surgery-Hysterectomy</label><br/>

<input type="checkbox" name="check_list[]" value="Ulcers"><label>Ulcers</label><br/>
<input type="checkbox" name="check_list[]" value="Vission Loss"><label>Vission Loss</label><br/>




</div>




<br><br>

<div id="info21">
<b>Family Medical History:</b><br>
<input type="checkbox" name="check_list_family[]" value="Alcohol Dependent"><label>Alcohol Dependent </label><br/>
<input type="checkbox" name="check_list_family[]" value="Anxiety"><label>Anxiety</label><br/>
<input type="checkbox" name="check_list_family[]" value="Allergies"><label>Allergies</label><br/>
<input type="checkbox" name="check_list_family[]" value="Asthma"><label>Asthma</label><br/>

<input type="checkbox" name="check_list_family[]" value="Cancer-Breast"><label>Cancer-Breast</label><br/>
<input type="checkbox" name="check_list_family[]" value="Cancer-Colon"><label>Cancer-Colon</label><br/>
<input type="checkbox" name="check_list_family[]" value="Cancer-Prostate"><label>Cancer-Prostate</label><br/>

<input type="checkbox" name="check_list_family[]" value="Cancer-Blood"><label>Cancer-Blood</label><br/>
<input type="checkbox" name="check_list_family[]" value="Cancer-Skin"><label>Cancer-Skin</label><br/>
<input type="checkbox" name="check_list_family[]" value="Cancer-Thyroid"><label>Cancer-Thyroid</label><br/>

<input type="checkbox" name="check_list_family[]" value="Depression"><label>Depression</label><br/>
<input type="checkbox" name="check_list_family[]" value="Diabetis"><label>Diabetis</label><br/>
<input type="checkbox" name="check_list_family[]" value="Erectile Dysfumction"><label>Erectile Dysfumction</label><br/>

</div>
<!------------------------------------------------->


<div id="info2">
<br>
<input type="checkbox" name="check_list_family[]" value="Headaches"><label>Headaches</label><br/>
<input type="checkbox" name="check_list_family[]" value="Heart Attack"><label>Heart Attack</label><br/>
<input type="checkbox" name="check_list_family[]" value="High Blood Pressure"><label>High Blood Pressure</label><br/>

<input type="checkbox" name="check_list_family[]" value="High Cholesterol"><label>High Cholesterol</label><br/>
<input type="checkbox" name="check_list_family[]" value="Obesity"><label>Obesity</label><br/>

<input type="checkbox" name="check_list_family[]" value="Sickle Cell"><label>Sickle Cell</label><br/>
<input type="checkbox" name="check_list_family[]" value="Surgery-Appendectomy"><label>Surgery-Appendectomy</label><br/>
<input type="checkbox" name="check_list_family[]" value="Surgery-Bypass"><label>Surgery-Bypass</label><br/>
<input type="checkbox" name="check_list_family[]" value="Surgery-Joint Replacement"><label>Surgery-Joint Replacement</label><br/>
<input type="checkbox" name="check_list_family[]" value="Surgery-Tyroidectomy"><label>Surgery-Tyroidectomy</label><br/>
<input type="checkbox" name="check_list_family[]" value="Surgery-Hysterectomy"><label>Surgery-Hysterectomy</label><br/>

<input type="checkbox" name="check_list_family[]" value="Ulcers"><label>Ulcers</label><br/>
<input type="checkbox" name="check_list_family[]" value="Vission Loss"><label>Vission Loss</label><br/>
</div>

<div id="info3">
<br>
<br>
Surgical History:&nbsp;&nbsp;
<input type="text" name="surgical"><br><br>
Allergies:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="allergies"><br>
<br>
Smoking Status:&nbsp;
<input type="radio" name="smoking" value="Yes"> Yes
<input type="radio" name="smoking" value="No" checked>No<br><br>

Eating Habit & Water Usages:
 
<input type="text" name="eating" required><br><br>
Sleeping Frequency: &nbsp;&nbsp;&nbsp;
<select name="sleeping" >
    <option value="4-5 Hours">4-5 Hours</option>
    <option value="5-6 Hours">5-6 Hours</option>
    <option value="6-7 Hours">6-7 Hours</option>
    <option value="7-8 Hours">7-8 Hours</option>
    <option value="8-9 Hours">8-9 Hours</option>
 </select>
<br><br>
Other:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="other"><br><br>

<center><input type="submit" name="submit" value="Submit"/></center><br>
<br><br>
</div>


</form>
</body>
<div id="footer">
 Copyright &copy; Shivprasad Sambhare 
 <br><center>Contact:sambhareshivprasad@gmail.com</center>
</div>
</html>