<?php  
/*
	init.php: Connection to database server
	if connection fails an error message will appear 
	This file will be used all over the php files in this 
	folder to connect to the database
	Test this file your web browser localhost to check before start using the app
	Server name and mysql username and password should be changed to the your phpmyadmin database
*/
 $db_name = "cloudlink";  
 $mysql_user = "phpmyadmin";  
 $mysql_pass = "phpmyadmin";  
 $server_name = "root.ctkhjtxaobbw.us-west-2.rds.amazonaws.com";
 $con = new mysqli($server_name,$mysql_user,$mysql_pass,$db_name)
 or die("Error " . mysqli_error($Con)); 
 ?>  