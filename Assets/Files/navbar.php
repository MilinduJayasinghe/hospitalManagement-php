<div class="navbar">
    <div class="navbar3">
        <div class="Upd">
            <p>
                <a class="Con" href="Updates.php">Updates</a> 
            </p>
        </div>
        <div class="Cont">
            <p>
                <a class="Con" href="ContactUs.php">Contact Us</a>   
            </p>
        </div>
        <div class="mail">
            <i class="fa fa-envelope" > info@aidscontrol.gov.lk</i>
        </div>
        &nbsp;&nbsp;&nbsp;      
        <div class="tel">
            <i class="fa fa-phone"> +94 011 26 67163</i>
        </div>
        &nbsp;&nbsp;&nbsp;      
        <div class="time">
            <p>
                <?php 
                date_default_timezone_set("Asia/Colombo");
                echo date("h:i:sa");?>
            </p>
            
            &nbsp;&nbsp;&nbsp;
            <div class="DT">
            <p >
                <?php echo date("Y-m-d");          
                ?>
            </p>
        </div>
        </div>
        
        <div id="google_translate_element">
            <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
            </script>
        </div>
    </div>
    <div class="navbar1">
        <div class="navbar1_1">
            <img class="logo_img" src="Assets/images/z_p08-CTF0.jpg" alt="">
            <p id="logo_p">National STD/AIDS Control Programme - Sri Lanka</p>
            <!--
            <div class="navbar1_2">
                
                <?php echo'<br>'?>
                
            </div>-->
        </div>
    </div>
    <hr class="hr1" >
    <div class="navbar2">
        <nav>
            <ul>
                 <li><a href="index.php">Home</a></li>
                 <li><a href="aboutUs.php">About Us</a></li>       
                 <li><a href="">Services</a>
                        <div class="submenu1">
                            <ul>
                                <li><a href="Clinical.php">Clinical</a></li>
                                <li><a href="Preventive.php">Preventive</a></li>
                            </ul>
                        </div></li>
                 <li><a href="">Facilities</a>
                        <div class="submenu1">
                            <ul>
                                <li><a href="Banking&ATM.php">Banking & ATM</a></li>
                                <li><a href="Cafe.php">Cafe</a></li>
                            </ul>
                        </div>
                 </li>
                 <li><a href="">HIV Basics</a>
                        <div class="submenu1">
                            <ul>
                                <li><a href="HIVprevention.php">HIV Prevention</a></li>
                                <li><a href="LivingWellWithHIV.php">Living Well With HIV</a></li>
                            </ul>
                        </div>
                 </li>
                 <li><a href="">FAQ</a>
                        <div class="submenu1">
                            <ul>
                                <li><a href="EmergencyServices.php">Emergency Services</a></li>
                                <li><a href="General.php">General</a></li>
                            </ul>
                        </div>
                 </li>
                 <li><a href="Gallery.php">Gallery</a></li>
                 <li><a href="">Statics</a>
                        <div class="submenu1">
                            <ul>
                                <li><a href="HIVdata.php">HIV Data</a></li>
                                <li><a href="STDdata.php">STD Data</a></li>
                                <li><a href="PMCTC.php">PMCTC</a></li>
                            </ul>
                        </div>
                 </li>
                 <li><a href="">Events</a>
                        <div class="submenu1">
                            <ul>
                                <li><a href="AwarenessDays.php">Awareness Days</a></li>
                                <li><a href="LeaarningOppartunities.php">Learning Oppartunities</a></li>
                            </ul>
                        </div>
                 </li>
                 <li><a href="ContactUs.php">Contact Us</a></li>
                 <li><a href="">User Account</a>
                        <div class="submenuAccount">
                            <ul>
                                <li><a href="Admin.php">Admin</a></li>
                                <li><a href="Doctor.php">Doctor</a></li>
                                <li><a href="Patient.php">Patient</a></li>
                            </ul>
                        </div>
                 </li>
            </ul>
        </nav>
    </div>
    <hr class="hr1" >
</div>