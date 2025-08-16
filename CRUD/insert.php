<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $temp = $_GET['temp'];
    $humi = $_GET['humi'];
    
    include 'config.php';

    $sql = "INSERT INTO `myweather` (`id`, `temp`, `humi`, `time`) VALUES (NULL, '$temp', '$humi', current_timestamp())";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    
    if($result){
        echo "Inserted Succefully";
    }

}



?>