<?php  
/*
	eventJoin.php : Will insert the ID of event , User ID to the join table
	if users join to an event within the app, this php file will be 
	called to insert the record of that user and event to the table 
*/
 require "init.php";  

 $jID = $_POST['jID'];  
 $uID = $_POST['uID'];  
 $eID = $_POST['eID'];

 // Change String to Int
 $jID_INT=(int)$jID;
 $eID_INT=(int)$eID;

 $insert_row = $con->query("INSERT INTO joins(joinID,userName,eventID) VALUES ('".$jID_INT."','".$uID."','".$eID_INT."');");

// If insert successed, print the ID of the new record
if($insert_row){
    print 'Success! ID of last inserted record is : ' .$con->insert_id .'<br />'; 
}else{
    die('Error : ('. $con->errno .') '. $con->error);
}
$con->close();
 ?>  