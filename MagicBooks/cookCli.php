<?php
    session_start();

    if(!isset($_SESSION['clienteId'])){
        $_SESSION['msg'] = "Você precisa efetuar o login.";
        header("Location:login.php");
    }
?>