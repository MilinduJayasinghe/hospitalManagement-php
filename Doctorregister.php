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

$s = " select * from doctor where username = '$name'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	
	
	include('Doctor.php');	

} else {
	
	$reg = " insert into doctor(username, password) values ('$name' , '$pass')";
	mysqli_query($conn, $reg);
	
	
	include('doctorchannelings.php');
	
}

?>