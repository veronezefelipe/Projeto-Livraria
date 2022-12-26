<?php
    session_start();
    require "src/UsuarioDAO.php";
    require "src/Usuario.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = new Usuario();
    $usuario->setEmail($email);
    $usuario->setSenha($senha);

    $usuarioDAO = new UsuarioDAO();

    $usuario = $usuarioDAO->validarUsuario($usuario);
    
    if ($usuario){
        $_SESSION['email'] = $email;
        $_SESSION['usuarioId'] = $usuario['id'];
        header("Location:index.php");
    }else{ 
        $_SESSION['msg'] = "Email ou senha inválido.";
        header("Location:login.php");
    }
?>