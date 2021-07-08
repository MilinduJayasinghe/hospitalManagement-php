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
<table class="content41" style="margin-left: 90px; margin-top:50px;">
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

 <form class="content44 left" action="adminphp.php" method="post" >
    <br><br>
    
    <div>
        <label  for="patientName">Patient name</label><br>
        <input class="content35"  type="text" name="patientName" placeholder="Patient name"><br>
    </div>
    <div class="content36">
        <label  for="patientTel">Patient number</label><br>
        <input  class="content35"  type="text" name="patientTel" placeholder="Patient number"><br>   
    </div>
    <div class="content36">
        <label  for="doctorName">Doctor name</label><br>
        <input  class="content35"  type="text" name="doctorName" placeholder="Doctor name"><br>   
    </div>
    <div class="content37">
        <input class="content38" type="submit" name=""  value="Enter">
        <input class="content38" type="button" onclick="location.href='delete.php';" value="Delete Login">
        <input class="content38" type="button" onclick="location.href='channelingdelete.php';" value="Delete Channeling">
        <input class="content38" type="button" onclick="location.href='search.php';" value="search">
    </div>
    </form>
 </div>
 <div class="content47">

 </div>
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/top.php';?>
<!-------------------FOOTER INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/footer.php';?> 
</body>
<!-------------------body END here----------------------------------------------->
</html>    
