
<?php 

session_start();
$con =  mysqli_connect('localhost','root','','test_db');

$partialNames = $_POST['partialName'];

$names = mysqli_query($con, "SELECT * FROM test_tbl WHERE name LIKE '%$partialNames%'");
while($name = mysqli_fetch_array($names)){
	echo "{$name['name']}";
		 


} 
?>