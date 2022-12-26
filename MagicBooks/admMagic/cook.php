<?php
    session_start();

    if(!isset($_SESSION['usuarioId'])){
        $_SESSION['msg'] = "Você precisa efetuar o login.";
        header("Location:login.php");
    }
?>