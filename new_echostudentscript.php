<?php 

include("db_connect.php");
$result = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');
//this is to add the echo student database
function register($fn, $ln, $ag, $d, $hr, $sch, $mail) {

$result = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');

//connects to the databases 
$sql = "INSERT INTO users (f_name,l_name,age,week,hours,school,email) VALUES ('$fn', '$ln','$ag','$d','$hr','$sch','$mail')";
$k = mysqli_query($result,$sql);
	

}

function redirect(){
	header("location:/echoadmin");
}
//I noticed that the database probably wont noticed it's the same name
//so we can change the first name to capital case every time they input their timesheet



//this function is to see if the inputs is empty 



function loginout(){
	session_start();
	session_destroy();
	//redirect this to the home page 
	header("Location:index.php");
	exit();


}
function emailsender($name) {
	$to = "";
	$subject = "New Student Timesheet submission Notification";
	$message = " We have a new notification of ". $name ."sending a new time information";
	$headers = 'From : www.echotimesheet.com' . "\r\n" . 
		'Reply-To: www.echotimesheet.com'. "\r\n" . 
		'X-Mailer: PHP:' . phpversion();



}
function protection($inputs){
	$protected = strip_tags($inputs);
	$protected = mysql_real_escape_string($protected);


}
function updatingstudenthours($fname1,$hours1, $school1){
	$con = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');
	//we need to check if the students match
	$query = mysqli_query($con, "SELECT Name FROM individual_student WHERE Name = '$fname1' AND school = '$school1'");
	$result = $query;
	if(mysqli_num_rows($result) == 1){
		$query3 = mysqli_query($con, "UPDATE individual_student SET t_hours  = t_hours + $hours1 WHERE Name = '$fname1' AND school = '$school1' ");
		

	}else {
		$query2 = mysqli_query($con, "INSERT INTO individual_student (Name,t_hours,school) VALUES ('$fname1', '$hours1','$school1')");
		

	}
	

}
function updatingschoolshours($hrs,$schl){

$con = mysqli_connect('localhost','ECHOstudent','bSdRb5','Timesheet');

$qu = mysqli_query($con, "SELECT Name FROM School2 WHERE Name = '$schl' ");

$results = $qu;

if(mysqli_num_rows($results) == 1){
	$q =  mysqli_query($con,"UPDATE School2 SET Thours  = Thours + $hrs WHERE Name = '$schl' ");
	
}else {
	$q2 =  mysqli_query($con,"INSERT INTO School2 (Name,Thours) VALUES ('$schl', '$hrs')");
	
}
}
function tbl_deletion(){
	//deleting a years database
	$del = mysqli_query("DELETE * FROM users");
	$del = mysqli_query("DELETE * FROM individual_students");
	$del = mysqli_query("DELETE * FROM schools");




}
function admin_add(){
	$a_a = $_POST['admin_new_name'];
	$a_c = $_POST['admin_change'];
	if(isset($pst)){
		if(!isset($a_a)){
			
		}
	}
	



}




?>