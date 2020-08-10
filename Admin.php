<?php 
session_start();
error_reporting(0);
include("new_echostudentscript.php");
$password = $_POST['password'];	

$sub = @$_POST['sub'];
if(isset($sub)){
if(!isset($password) || trim($password)==""){
	echo "Fill in everything";
	}else {
	$result = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');;
	$s_p = md5($password);
	echo $s_p;
	$sql = mysqli_query($result, "SELECT * FROM echoadmin WHERE password = '$s_p'");
	
	if(mysqli_num_rows($sql) == 1){
	$_SESSION['password'] = $password ;
	header("Location: home_time.php");
	exit();

	}
}
}
	
else {
	
	

	

}


?>
<html>
	<head>
		<title>Admin | Timesheet
	</title>
	<link rel="stylesheet" href="style.css"/>
</head>
	<body>
		<center>
			<form action="Admin.php" method="POST" name="admin-log">

<div class="header">Admin</div> 
	
</br><input type="password" name="password" placeholder="Enter the Admin log in"   >

	</br><input type="submit" name="sub" placeholder="submit"  >
</form ></center>

		</body>
</htmk>