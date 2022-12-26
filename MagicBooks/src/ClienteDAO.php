<?php
require "ConexaoBD.php";

class ClienteDAO{

    public function cadastrarCliente(Cliente $cliente){
        $senhaCriptografada = md5($cliente->getSenha());
        $sql = "insert into clientes 
        (nome, email, senha, cpf, endereco, cep, cidade, estado, referencia) values 
            (
                '{$cliente->getNome()}',
                '{$cliente->getEmail()}',
                '{$senhaCriptografada}',
                '{$cliente->getCpf()}',
                '{$cliente->getEndereco()}',
                '{$cliente->getCep()}',
                '{$cliente->getCidade()}',
                '{$cliente->getEstado()}',
                '{$cliente->getReferencia()}'
            )";

        $conexao = ConexaoBD::getConexao();
        return $conexao->exec($sql);
    }
    public function validarCliente(Cliente $cliente){
        $senhaCriptografada = md5($cliente->getSenha());
        $sql = "select * from clientes where email='{$cliente->getEmail()}' and senha='{$senhaCriptografada}'";

        $conexao = ConexaoBD::getConexao();
        $stmt = $conexao->query($sql);

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
}

?>