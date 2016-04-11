<?php  
/*
	listEventsCreatedByUser.php : this php will show all events data for a specfic user (list Own Events Only) ,
	will be used to show the records of current user events that is inserted to the database
*/
 require "init.php";  

 $userName = $_POST['userName'];  

 $sql_query = "SELECT * FROM events WHERE eventCreator LIKE '$userName';";  

 $result = mysqli_query($con,$sql_query);  
 
 // If results exisit return the records
 if(mysqli_num_rows($result) >0 )  {
 while($row = mysqli_fetch_assoc($result) )  {
 	$output [] = $row ; 
 }
 
 print (json_encode($output));}
 else  
 {   
 echo "No Results Found...";  
 }  
 $con->close();
 ?> 