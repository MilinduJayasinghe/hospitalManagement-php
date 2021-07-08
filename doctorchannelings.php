<?php 
     $servername = "localhost";//127.0.0.1
     $username = "root";
     $password = "";
     $dbname = "webapplication";//db name
 
     //create connection
     $conn = new mysqli($servername,$username,$password,$dbname);
     
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
<h1 class="table03">channelings</h1>
<div class="table03">
<table class="content41">
    <tr class="content42">
        <th>patient Name</th>
        <th>patient Number</th>
        <th>Doctor Name</th>
    </tr>
    <?php 
   $sql="SELECT * FROM channeling;"; 
   $result = $conn->query($sql); 

   if ($result->num_rows > 0) {
       while($row = $result ->fetch_assoc()){
           echo "<tr><td>" .$row["patient_name"]  . "</td><td>" .$row["patient_tel"] . "</td><td>" .$row["doctor_name"] . "</td><tr>";
       }
   }
   else {
       echo "no result";
   }
   $conn -> close();
   ?>
 </table> 
 </div>
 <div class="content40" style="margin-top: 300px;">

 </div>
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/top.php';?>
<!-------------------FOOTER INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/footer.php';?> 
</body>
<!-------------------body END here----------------------------------------------->
</html>    
