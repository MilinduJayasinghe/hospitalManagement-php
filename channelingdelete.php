<?php
    
     $servername = "localhost";//127.0.0.1
     $username = "root";
     $password = "";
     $dbname = "webapplication";//db name
 
     //create connection
     $conn = new mysqli($servername,$username,$password,$dbname);

     
    
 
        if(isset($_POST['username'])){
        $username = $_POST['username'];
        }
        $sql= "DELETE FROM channeling WHERE patient_name = '$username'";
        
        if(mysqli_query($conn,$sql)){
        
        
        
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn);

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
        <form class="content44" action="channelingdelete.php" method="post" >
        <br><br>
        <div>
            <label>user name</label><br>
            <input class="content35"  type="text" name="username" placeholder="username"><br>
        </div>
        
        <div class="content37">
            <input class="content38" type="submit" name=""  value="Enter">
        </div>
        </form>
    </div>
    
    <div class="content39">

    </div>
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/top.php';?>
<!-------------------FOOTER INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/footer.php';?> 
</body>
<!-------------------body END here----------------------------------------------->
</html>    

