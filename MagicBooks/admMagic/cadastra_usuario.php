<?php
    require "src/UsuarioDAO.php";
    require "src/Usuario.php";

    $usuario = new Usuario();
    $usuario->setEmail("felipe@vrn.com");
    $usuario->setSenha("felipe123");

    $usuarioDAO = new UsuarioDAO();
    $usuarioDAO->cadastrarUsuario($usuario);
?>