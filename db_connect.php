<?php 
//we need the database info 

 

$host="echoperfect10.org"; // Host name
$username="echstudent"; // Mysql username
$password="bSdRb5"; // Mysql password
$db_name="ep10_wp1"; // Database name
$tbl_name="wp_timesheet"; // Table name


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

 //the only that's has to change is the tbl... 
// if successfully insert data into database, displays message "Successful".

?>