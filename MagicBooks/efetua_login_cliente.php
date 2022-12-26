<?php
    session_start();
    require "src/ClienteDAO.php";
    require "src/Cliente.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $cliente = new Cliente();
    $cliente->setEmail($email);
    $cliente->setSenha($senha);

    $clienteDAO = new ClienteDAO();

    if ($cliente = $clienteDAO->validarCliente($cliente)){
        $_SESSION['email'] = $email;
        $_SESSION['clienteId'] = $cliente['id'];
        $_SESSION['nomeCliente'] = $cliente['nome'];
        header("Location:pagamento.php");
    }else{ 
        $_SESSION['msg'] = "Email ou senha inválido.";
        header("Location:login.php");
    }
?>