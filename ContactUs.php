<!DOCTYPE html>
<html lang="en">   
<!-------------------Head INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/header.php';?>
<!------------------------------------------------------------------->

<!-------------------body START here--------------------------------------------->
<body>
<!-------------------NAVBAR INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/navbar.php';?>
<div class="contactbg">
<div class="contactUs">
    <div class="contactUs1">
        <p class="contactUs1heading">CONTACT US</p>
        <h4>Hospitals Address</h4>
        <p class="address">No.29,<br> De Saram place,<br> Colombo 10,<br> Sri Lanka</p>
    </div>    
    <div class="contactUs2">
        <table>
            <tr>
                <td class="TH">Hotline &nbsp; </td>
                <td>- &nbsp; +94 11 26 67163</td> 
            </tr>
            <tr>
                <td class="TH">General Line &nbsp; </td>
                <td>- &nbsp; +94 11 26 67029</td>
            </tr>
            <tr>
                <td class="TH">Fax &nbsp; </td>
                <td>- &nbsp; +94 11 266 5277</td>
            </tr>
            <tr>
                <td class="TH">Email &nbsp; </td>
                <td>- &nbsp; info@aidscontrol.gov.lk</td>
            </tr>
        </table>
    </div>
</div>
<div class="form">
    <h5 class="formh5">Please contact us for inquiries</h5>
    <form class="form1" action="#" method="post">
        <div class="form2">
            <input class="Input" type="text" placeholder="First Name">
            <input class="Input" type="text" placeholder="Last  Name">
        </div>
        <div class="form3">
            <input class="Input" type="email" placeholder="Email">
            <input class="Input" type="tel" placeholder="Mobile">
        </div>
        <div class="form4">
            <textarea class="Textarea" name="" id="" cols="30" rows="10" placeholder="Please tell us your inquiry"></textarea>
        </div>
        <input class="fbtn" type="button" value="Send">
    </form>
</div> 
</div>
  
<div class="map1">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.754201566541!2d79.86369071472052!3d6.919960895000082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259f5160b9eb9%3A0x863c6445baf56b86!2sHIV!5e0!3m2!1sen!2slk!4v1619455620538!5m2!1sen!2slk" width="1920" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/top.php';?>
<!-------------------FOOTER INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/footer.php';?> 
</body>
<!-------------------body END here----------------------------------------------->
</html>