<?php  
/*
	eventJoinCheck.php : Will check if the record of an joined event exisit or not
	if the records of joined event for a giving event ID and user ID is exisit 
	it will be returned to the client who requested it as JSON array 
*/
 require "init.php";  


 $uID = $_POST['uID'];  
 $eID = $_POST['eID'];

 // Change String to Int
 $eID_INT=(int)$eID;

 $sql_query = "SELECT * FROM joins WHERE eventID = '$eID_INT' AND userName = '$uID';";

  $result = mysqli_query($con,$sql_query);  
 
 // if data exisit > 0 the records will be returned 
 if(mysqli_num_rows($result) >0 )  {
  while($row = mysqli_fetch_assoc($result) )  
  {	$output [] = $row ; }
 print (json_encode($output));
 }  else  {   
 echo "No Matches Found...";  } 
$con->close();
?>  