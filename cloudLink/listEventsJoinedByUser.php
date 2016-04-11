<?php  
/*
	listEventsJoinedByUser.php : Will return all the events joined by specfic user
	the table of events and join table wil used to do this check throw INNER JOIN for the sql query
*/
 require "init.php";  

 $userName = $_POST['userName'];  

 $sql_query = "SELECT * FROM events k INNER JOIN joins p ON k.eventNo=p.eventID  WHERE p.userName LIKE '$userName';";  

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
 echo "No Results Found...";  
 }  
 $con->close();
 ?> 