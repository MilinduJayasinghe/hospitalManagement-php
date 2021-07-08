<?php 
    include 'admindb.php';
    runMySqlQuery("INSERT INTO `channeling`(`patient_name`, `patient_tel`, `doctor_name`) VALUES ('$_POST[patientName]','$_POST[patientTel]','$_POST[doctorName]')");
?>