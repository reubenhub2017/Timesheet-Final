
<?php
include("db_connect.php");
session_start();
$con = mysql_connect("#", "#", "#", "#")or die("cannot connect");

$partialDates = $_POST['partialDate'];
//this is get the names and names information, we can used this sent to result.
$names = mysqli_query($con, "SELECT * FROM wp_timesheet WHERE wkending LIKE '%$partialDates%'" ); //we need the column dates
while($name = mysqli_fetch_array($names, MYSQL_ASSOC)){
	echo "<table id='scroll'>


<tr>
	<th>Name</th>
	<th>School</th>
	<th>Total hours</th>
	<th>Week Ending</th>

					</tr>
<tr>
<td>{$name['sname']}</td>
<td>{$name['location']}</td>
<td>{$name['gtotal']} </td>
<td>{$name['wkending']}</td>



					</tr>

	</table>"
	;
	//we need the column data from the databases


}


?>
