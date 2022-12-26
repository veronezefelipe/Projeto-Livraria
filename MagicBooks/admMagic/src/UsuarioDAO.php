<?php
require "ConexaoBD.php";

class UsuarioDAO{

    public function cadastrarUsuario(Usuario $usuario){
        $senhaCriptografada = md5($usuario->getSenha());
        $sql = "insert into usuarios (email, senha) values 
            ('{$usuario->getEmail()}','{$senhaCriptografada}')";

        $conexao = ConexaoBD::getConexao();
        $conexao->exec($sql);
    }
    public function validarUsuario(Usuario $usuario){
        $senhaCriptografada = md5($usuario->getSenha());
        $sql = "select * from usuarios where email='{$usuario->getEmail()}' and senha='{$senhaCriptografada}'";
        
        $conexao = ConexaoBD::getConexao();
        $stmt = $conexao->query($sql);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }
}
?>