<!DOCTYPE html>
<html lang="en">   
<!-------------------Head INCLUDE here------------------------------->
<?php include '/XAMPP/htdocs/WebApplication/Assets/Files/header.php';?>
<!------------------------------------------------------------------->

<!-------------------body START here--------------------------------------------->
<body>
    <!-------------------NAVBAR INCLUDE here------------------------------->
    <?php include '/XAMPP/htdocs/WebApplication/Assets/Files/navbar.php';?>
    <!-------------------preloader----------------------------------------->
    <div class="loader">
        <img src="Assets/images/1504136912_oie_I6wTakUfrguP (2).gif" alt="preloader">
    </div>
    
    <!-------------------Automatic slidshow------------------------------------------->
    <div class="slider">
        <img class="mySlides" src="Assets/images/piron-guillaume-U4FyCp3-KzY-unsplash.jpg">
        <img class="mySlides" src="Assets/images/martha-dominguez-de-gouveia-nMyM7fxpokE-unsplash.jpg">
        <img class="mySlides" src="Assets/images/marcelo-leal-6pcGTJDuf6M-unsplash.jpg">
        <img class="mySlides" src="Assets/images/doctor-holds-wooden-cubes-his-hands-with-text-std_132358-638.jpg">
        <img class="mySlides" src="Assets/images/female-male-hands-holding-red-hiv-aids-awareness-ribbon-wooden_155003-14648.jpg">
        <img class="mySlides" src="Assets/images/virus-molecule-close-up-body-purple-background_99433-6.jpg">
        <img class="mySlides" src="Assets/images/multicolored-condoms-white-textured-wall-space-text_185193-31318.jpg">
        <img class="mySlides" src="Assets/images/red-knowledge-ribbon-family-cut-paper-hiv-awareness-world-aids-day-world-sexual-health-day_1150-24430.jpg">
        <img class="mySlides" src="Assets/images/blood-test-tubes-results-close-up_392895-8643.jpg">
    </div>

    <!--------------------content------------------------------------------>
    <div class="content01">
        <h2 class="content01h3">Welcome to the National STD/AIDS Control Programme</h2>
        <p class="content01p">The National STD/AIDS Control Programme (NSACP) of the Ministry of Health is the main government organization which coordinates the national response to sexually transmitted infections including HIV/AIDS in Sri Lanka. It collaborates with many national and international organizations such as the Global Fund to Fight Against AIDS, TB, and Malaria (GFATM) and UN organizations while providing leadership and technical support to 34 islandwide STD clinics and 23 ART centers</p>
    </div>

    <div class="content02">
        <img class="content02img" src="Assets/images/doctor-writing-word-sexually-transmitted-diseases-with-blu-marker-medical-concept_384017-376.jpg" alt="">
        <p class="content02p">STDs are sexually transmitted diseases. This means they are most often -- but not exclusively -- spread by sexual intercourse. HIV, chlamydia, genital herpes, genital warts, gonorrhea, some forms of hepatitis, syphilis, and trichomoniasis are STDs.STDs used to be called venereal diseases or VD. They are among the most common contagious diseases. It's estimated that 25% of all Americans have an incurable STD. Each year, 20 million new cases are reported; half of these infections are among people ages 15 to 24 and they can have long-term consequences.STDs are serious illnesses that require treatment. Some STDs, such as HIV, cannot be cured and can be deadly. By learning more about STDs, you can learn ways to protect yourself.</p>
    </div>

    <div class="content03">
        <p class="content03p">You can get a STD from vaginal, anal, or oral sex. You can also be infected with trichomoniasis through contact with damp or moist objects such as towels, wet clothing, or toilet seats, although it is more commonly spread by sexual contact. You are at high risk if:HIV and herpes are chronic conditions that can be managed but not cured. Hepatitis B also may become chronic but can be managed. You may not realize you have certain STDs until you have damage to your reproductive organs (rendering you infertile), your vision, your heart, or other organs. Having an STD may weaken the immune system, leaving you more vulnerable to other infections. Pelvic inflammatory disease (PID) is a complication of gonorrhea and chlamydia that can leave women unable to have children. It can even kill you. If you pass an STD to your newborn child, the baby may suffer permanent harm or death.</p>
        <img class="content03img" src="Assets/images/wooden-block-with-words-stop-std-sexually-transmitted-diseases-with-stethoscope-table-health-concept-blue_384017-378.jpg" alt="">
    </div>

    <div class="content02">
        <img class="content02img" src="Assets/images/piron-guillaume-U4FyCp3-KzY-unsplash.jpg" alt="">
        <p class="content02p">STDs include just about every kind of infection. Bacterial STDs include chlamydia, gonorrhea, and syphilis. Viral STDs include HIV, genital herpes, genital warts (HPV), and hepatitis B. Trichomoniasis is caused by a parasite.The germs that cause STDs hide in semen, blood, vaginal secretions, and sometimes saliva. Most of the organisms are spread by vaginal, anal, or oral sex, but some, such as those that cause genital herpes and genital warts, may be spread through skin contact. You can get hepatitis B by sharing personal items, such as toothbrushes or razors, with someone who has it.</p>
    </div>
   
    <div class="content01">

    </div>
    <?php include '/XAMPP/htdocs/WebApplication/Assets/Files/top.php';?>
    <!-------------------FOOTER INCLUDE here------------------------------->
    <?php include '/XAMPP/htdocs/WebApplication/Assets/Files/footer.php';?> 
    <script>
    window.addEventListener("load" ,function(){
        const loader = document.querySelector(".loader");
        loader.className +=" hidden";
    }); 

    var myIndex = 0;
    carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); 
    }
    </script>
</body>
<!-------------------body END here----------------------------------------------->
</html>