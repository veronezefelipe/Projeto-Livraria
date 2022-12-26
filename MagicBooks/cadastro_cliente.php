<?php
    require "src/Cliente.php";
    require "src/ClienteDAO.php";
?>

<h2>Cadastro De Cliente</h2>
<div>

<?php 

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $referencia = $_POST["referencia"];

    $cliente = new Cliente();
    $cliente->setNome($nome);
    $cliente->setEmail($email);
    $cliente->setSenha($senha);
    $cliente->setCpf($cpf);
    $cliente->setEndereco($endereco);
    $cliente->setCep($cep);
    $cliente->setCidade($cidade);
    $cliente->setEstado($estado);
    $cliente->setReferencia($referencia);

    $clienteDAO = new ClienteDAO();   
    $resp = $clienteDAO->cadastrarCliente($cliente);
    
    if ($resp > 0)
        header("Location:login.html");
    else
        header("Location:login.html");   
?>

</div>

<?php
    include "rodape.php";
?>