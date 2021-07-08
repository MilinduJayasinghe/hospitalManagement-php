<!DOCTYPE html>
<html lang="en">   
<!-------------------Head INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/header.php';?>
<!------------------------------------------------------------------->
<!-------------------body START here--------------------------------------------->
<body>
<!-------------------NAVBAR INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/navbar.php';?>
 <form class="content33" action="Doctorvalidation.php" method="post" >
    <h1 class="content34">login</h1>
    <div>
        <label>Username</label><br>
        <input class="content35"  type="text" name="username" placeholder="Username" required><br>
    </div>
    <div class="content36">
        <label>password</label><br>
        <input  class="content35"  type="password" name="password" placeholder="Password" required><br>   
    </div>
    <div class="content37">
        <button  type="submit" class="content38" >Login</button>
        <input class="content38" type="button" onclick="location.href='Doctornew.php';" value="Sign Up">
   
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
