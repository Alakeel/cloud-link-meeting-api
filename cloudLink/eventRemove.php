<?php  
/*
	eventRemove.php : Will remove the records of events 
	and linked data in join_table for a giving ID 
*/
 require "init.php";  

 $eID = $_POST['eID'];

 // Change String to Int
 $eID_INT=(int)$eID;

$sql = "DELETE FROM events where eventNo = '$eID_INT';";
$sql2 = "DELETE FROM joins where eventID = '$eID_INT';";

if ($con->query($sql) === TRUE && $con->query($sql2) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}

$con->close();
 ?>  