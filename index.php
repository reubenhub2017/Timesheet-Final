
<!--This script is for posting the timesheet for each student it's sent to admin-->

<html>
	<head>
		<meta char="utf-8">
		<title>Timesheet Application</title>
	<link rel="stylesheet" href="style.css"/> <!--This is for javascript codes, Jquery , Css links -->
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/redmond/jquery-ui.css" rel="stylesheet" type="text/css"/>
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	 <script src="bower_components/sweetalert/dist/sweetalert.min.js"></script>
  	<link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">
  	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="js/noty/packaged/jquery.noty.packaged.min.js"></script>
</head>
<body background="https://download.unsplash.com/uploads/1412594480669535c9ef9/9d85c477">
<script type="text/javascript">
$(window).load(function(){
	$("#loader").delay(5000).animate({
		top: -2000
	},1000);
});


</script>


<h2 class="indexnav"><center>ECHO TIMESHEET</center></h2>

<form action="index.php" method="POST" >
<center><div class= "pure-grouped">

<?php
session_start();
error_reporting(0);
include("new_echostudentscript.php"); //This includes the functions file.
$result = mysqli_connect('#','#','#','#'); //Connects to the mysql database 

	$fname = ucfirst(@$_POST['f_name']);
	$lname = @$_POST['l_name'];
	$age = @$_POST['age_number'];
	$date = @$_POST['week_date'];
	$email = strip_tags(@$_POST['email']);
	$hours =  @$_POST['hours'];
	$school  = @$_POST['schools'];
	$p = @$_POST['post'];

if(isset($p)){
if(!isset($fname) || trim($fname) == "" || !isset($lname) || trim($lname) == "" || !isset($age) ||
	trim($age) == "" || !isset($date)   || trim($date) == "" || !isset($school)   || trim($school) == ""|| !isset($email) || trim($email) == "" ||
  !isset($hours) || trim($hours) == "")
{
	 echo "Please fill out everything in the form";
	 //we will replace this the notification noty applicatoin

}
else{


register($fname,$lname,$age,$date,$hours,$school,$email);
 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("WOW!","You completed the work for this week Congrats!","success");';
  echo '}, 1000);</script>';
 updatingstudenthours($fname,$hours,$school);
updatingschoolshours($hours,$school);
//sending a message to valita
//emailsender($fname);

//this sends the information to the database/

  	}
}
?>
</br>
Basic info
	<input type="text" name="f_name" placeholder="First Name" >
</br>
	<input type="text" name="l_name" placeholder="Last Name"    >
</br>
	<input type="number" name="age_number" min="0" max="100" placeholder="Age"  >
</br>

	<input type="text" name="email" placeholder="Email" >
</br>
Weekending
	<input type="date" name="week_date" min="2000-01-02" placeholder="Date"  >
</br>
Where do you go to school ?
<select name="schools">
	<option value="Wilbur">Wilbur Cross</option>
	<option value="Coop" >COOP</option>
	<option value="Notre Damn" >Notre Damn</option>
	<option value="Career" >Career</option>
	<option value="Hill">Hill House</option>
	<option value="Other">Other</option>


</br>
</select>

</br>
	How many total hours for this week ending did you do ?
<input type="number" name="hours" min="0" max="100"  placeholder="How many hours ex.40-50hrs"   >
</br>



</br>
		<center>
				<input type="submit" name="post" placeholder="Submit" id="submit-button">
								</center>

</div>

</center>
	<!--this submits the form to the index php script-->

	</div>
</form>

<div id="loader">
<img src="https://d13yacurqjgara.cloudfront.net/users/12755/screenshots/1037374/hex-loader2.gif"/>
</div>

</body>

<a href="Admin.php"id="adminlink">Are you a admin?</a> <!--Links to the admin file, mainly used for valita and other for verfied users-->

</html>
