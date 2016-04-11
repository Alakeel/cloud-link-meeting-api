<?php  
/*
	login.php : Will will be used to check for users login to the app
	it will check if the giving username and password exisit in the app
	if so it will return back the username to the app client with Login status
	if fails false will be return to the client which mean your username or password is wrong and No login status
*/
 require "init.php";  

 $username = $_POST['username'];
 $password = $_POST['password'];

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($con, "SELECT userName FROM users WHERE password='$password' AND username LIKE '$username';");
$rows = mysqli_num_rows($query);

 // If record exisit return the username , else return false
if ($rows == 1) {
$fetch = $query->fetch_assoc();
$json = array('userName' => $fetch['userName']);
print (json_encode($json));
echo "Login in..." ;  
}
else{   
 $json = array('userName' => 'false');
 print (json_encode($json));
 echo "No Login..." ;  
 } 

$con->close();
?>  