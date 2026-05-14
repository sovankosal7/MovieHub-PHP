<?php
    session_start();
    if(isset($_SESSION['is_login_success']) == false){
        header("Location: index.php");
    }
?>