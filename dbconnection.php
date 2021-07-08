<?php 
    function setConnection(){
     $servername = "localhost";//127.0.0.1
     $username = "root";
     $password = "";
     $dbname = "webapplication";//db name
 
     //create connection
     $conn = new mysqli($servername,$username,$password,$dbname);
     //check connection
     if($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     //print if it ok
     header('location:index.php');
     return $conn;
    }
    function runMySqlQuery($mySqlCommand){
        $connection =setConnection();
        try{
            if (mysqli_query($connection,$mySqlCommand)) {
                //echo "New record added successfully";
            }else{
                echo "error:".mysqli_error($connection);
            }
        }
        catch(Exception $e){
            echo 'Caught exeption: ', $e->getMessage(),"\n";
        }
        finally{
            mysqli_close($connection);
        }
    }
?>