<?php
//we need the database info



$host="#"; // Host name
$username="#"; // Mysql username
$password="#"; // Mysql password
$db_name="#"; // Database name
$tbl_name="#"; // Table name


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

 //the only that's has to change is the tbl...
// if successfully insert data into database, displays message "Successful".

?>
