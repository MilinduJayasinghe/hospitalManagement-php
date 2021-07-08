<?php 

session_start();

$servername = "localhost";//127.0.0.1
$username = "root";
$password = "";
$dbname = "webapplication";//db name

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

$name = $_POST['username'];
$pass = $_POST['password'];

$s = " select * from admin where username = '$name' && password = '$pass'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['username'] = $name;
	header('location:adminpage.php');
	
}else {
	
	

	include('adminValidation.php');
}

?>