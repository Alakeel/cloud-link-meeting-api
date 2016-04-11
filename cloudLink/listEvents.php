<?php  
/*
	listEvents.php : Will return and display all 
	the events inside the database from events table
	Since our demo was only in Oshawa we will only show Oshawa events
	To show all events around the world , take out (where eventCity like 'Oshawa') from the query
*/
 require "init.php";  
 
 $sql_query = "SELECT * FROM events WHERE eventCity LIKE 'Oshawa';";  

 $result = mysqli_query($con,$sql_query);  
 
 // If results exisit return the records
 if(mysqli_num_rows($result) >0 )  
 {
 while($row = mysqli_fetch_assoc($result) )  {
 	$output [] = $row ; 
 }
 
 print (json_encode($output));
 }  
 else  
 {   
 echo "Login Failed.......Try Again..";  
 }  
 ?> 