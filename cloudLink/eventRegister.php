<?php  
/*
	eventRegister.php : Will insert new event record
	to the events table  in the database
*/
 require "init.php";  
 $eID = $_POST['eID'];
 $eName = $_POST['eName'];  
 $eDesc = $_POST['eDesc']; 
 $eType = $_POST['eType'];
 $eAddress = $_POST['eAddress']; 
 $eCity = $_POST['eCity'];
 $eGeo = $_POST['eGeo'];
 $eCreator = $_POST['eCreator'];
 $eStartDate = $_POST['eStartDate'];
 $eEndDate = $_POST['eEndDate'];

 // Change String to Int
 $eID_INT=(int)$eID;

 $insert_row = $con->query("INSERT INTO events(eventNo,eventName,eventDesc,eventType,eventAddress,eventCity,eventLocationGeo,eventCreator,eventStartDate,eventEndDate) VALUES ('".$eID_INT."','".$eName."','".$eDesc."','".$eType."','".$eAddress."','".$eCity."','".$eGeo."','".$eCreator."','".$eStartDate."','".$eEndDate."');");

if($insert_row){
    print 'Success! ID of last inserted record is : ' .$con->insert_id .'<br />'; 
}else{
    die('Error : ('. $con->errno .') '. $con->error);
}
$con->close();
 ?>  