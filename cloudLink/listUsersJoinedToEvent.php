<?php  
/*
	listUsersJoinedToEvent.php : Will return all the users linked from events table and join table who
	are joined to a specfic event for a givin event ID within the app 
*/
 require "init.php";  

 $eID = $_POST['eID'];  

 // Change String to Int
 $eID_INT=(int)$eID;

 $sql_query = "SELECT * FROM events k INNER JOIN joins p ON k.eventNo=p.eventID  WHERE k.eventNo LIKE '$eID_INT';";  

 // If results exisit return the records
 $result = mysqli_query($con,$sql_query);  
 
 if(mysqli_num_rows($result) >0 )  
 {
 while($row = mysqli_fetch_assoc($result) )  {
 	$output [] = $row ; 
 }
 
 print (json_encode($output));
 }  
 else  
 {   
 echo "No Results Found...";  
 }  
 ?> 