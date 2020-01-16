<?php
session_start();
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(isset($_GET["clear"])) {
            unset($_SESSION["animals"]);        }
    }
    if(isset($_SESSION["animals"])){
        header('Location: result.php');
    }else {
        header('Location: settings.php');
    }


?>