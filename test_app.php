<?php 
session_start();
$con =  mysqli_connect('localhost','root','','test_db');
error_reporting(0);


//$_POST['name'];
$nam = $_POST['name'];
$pass = $_POST['password'];

$s = $_POST['submit'];
if(isset($s)){
if(!isset($nam) || trim($nam) == "") {

	echo  "You did not fill out the required fields.";
}
$result = "INSERT INTO test_tbl (name, password) VALUES ('$nam','$pass')";
mysqli_query($con,$result);
}






//$g = mysqli_query($con,"SELECT * FROM test_tbl");
//$result = $g;
//if($result -> num_rows > 0 ){
//	while($row = $result -> fetch_assoc()){
//		echo " ".$row['name']." ". $row['password']." "; 
//	}

//}else {
//	echo "0 result";
//}








?>
<html>
	<head>
 <script src="bower_components/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>x

		

 <script type="text/javascript">
   setTimeout(function () { swal("WOW!","Message!","success");
  }, 1000);
</script>'

<script type="text/javascript">
		function getNames(value){
			$.post("get_test.php",{partialName:value},function(data) { 
				$("#results").html(data);
});
			}
		

</script>



		<title>Timesheet Application</title>
</head>






<body>
<a id="showPayTypeOptions">Do something</a>

<div id="payTypeOptions">
 <p>Content</p>
</div>



	<h1>ECHO Timesheet Application</h1>
<form action="test_app.php" method="POST" name="regg">

</br>First Name: 
	<input type="text" name="name" placeholder="First Name" >
</br>Last Name: 
	<input type="text" name="password" placeholder="Last Name"  > 
</br>
<input type="submit" name="submit" placeholder="Submit"/>

</br>


<input type="text" onkeyup="getNames(this.value)"/>
<div id="results"></div>


 


</body>

</html>