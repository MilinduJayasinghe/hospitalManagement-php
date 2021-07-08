<?php

     $servername = "localhost";//127.0.0.1
     $username = "root";
     $password = "";
     $dbname = "webapplication";//db name
 

     $conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn) {
	
	die("Conncetion has been failed:" . mysqli_connect_errno());
	
}  
$output="";

if(isset($_POST['search'])) {
	
	$searching = $_POST['search'];
	$searching = preg_replace("#[^0-9a-z]#i","",$searching);
	
	$doc = " select * from channeling where doctor_name = '$searching'";
	
	$query = mysqli_query($conn, $doc) or die("Could not search");
	
	$count = mysqli_num_rows($query);
	
	if($count == 0){
		
		$output = 'There was no search results';
		
	}else{
		
		while($row = mysqli_fetch_array($query)) {
			 
			$fname = $row['patient_name'];
			$lname = $row['patient_tel'];
			
			$output = '<div>'.$fname.' '.$lname.'</div>';
			
		}
		
	}
}

?>

<!DOCTYPE html>
<html lang="en">   
<!-------------------Head INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/header.php';?>
<!------------------------------------------------------------------->
<!-------------------body START here--------------------------------------------->
<body>
<!-------------------NAVBAR INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/navbar.php';?>
    <div class="content45">
        <form class="content44" action="search.php" method="post" >
        <br><br>
        <div>
            <label>user name</label><br>
            <input class="content35"  type="text" name="username" placeholder="username"><br>
        </div>
        
        <div class="content37">
            <input class="content38" type="submit" name=""  value="Enter">
        </div>
        </form>
        <div >
            <?php print $output ?>
        </div>
    </div>
    
    <div class="content39">

    </div>
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/top.php';?>
<!-------------------FOOTER INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/footer.php';?> 
</body>
<!-------------------body END here----------------------------------------------->
</html>    
