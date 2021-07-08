<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webapplication";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST['user'];
$password = $_POST['password'];

$s = " SELECT * FROM usertable where name = '$name'";
$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);
if($num ==1){
    echo "username already taken";
}else{
    $reg = " INSERT INTO usertable(`name`, `password`) VALUES ('$name' , '$password')";
    mysqli_query($conn, $reg);
    echo "registraion successful";
}
?>
