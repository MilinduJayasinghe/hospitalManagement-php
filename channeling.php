<!DOCTYPE html>
<html lang="en">   
<!-------------------Head INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/header.php';?>
<!------------------------------------------------------------------->
<!-------------------body START here--------------------------------------------->
<body>
<!-------------------NAVBAR INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/navbar.php';?>
 <form class="content33" action="inpatientphp.php" method="post" >
    <h1 class="content34">login</h1>
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
    </div>
    </form>
    <div class="content39">

    </div>
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/top.php';?>
<!-------------------FOOTER INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/footer.php';?> 
</body>
<!-------------------body END here----------------------------------------------->
</html>    
