<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbName     = "online_movie";

    $conn = mysqli_connect($servername,$username,$password,$dbName);
     if($conn){
         echo "";
     }else echo "conntection failed!";

?>