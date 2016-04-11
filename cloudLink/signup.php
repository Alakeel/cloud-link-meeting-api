<?php  
/*
	signup.php : Will will be used to insert new user who wants to register for the app
	the data first will be checked before, if the giving username is exisit in the users table
	it will return false to the app client which mean you can't register for this used username
	if username doesn't exisit, the new record will be inserted to the users table 
*/
 require "init.php";  

// Define $username and $password and $loginName
$username=$_POST['username'];
$password=$_POST['password'];
$loginName=$_POST['loginName'];

 // SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($con, "SELECT * FROM users WHERE username LIKE '$username';");
$rows = mysqli_num_rows($query);

 // If results exisit 
if ($rows > 0) {
$fetch = mysqli_fetch_array($query);
$json = array('return' => 'false');
print (json_encode($json));

echo "User Already in Database..." .$rows ;  
}
else{   
// SQL query to insert new  registerd users
$query2=mysqli_query($con, "INSERT INTO users (userName,loginName,password) values ('$username','$loginName','$password');");

if($query2){
	$json2 = array('return' => 'true');
	print (json_encode($json2));
	echo  "Success Insert" .$rows;
	}
else{echo  "Error: no inserted";}
 } 

$con->close();
?>  