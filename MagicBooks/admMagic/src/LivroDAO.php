<?php

require_once "ConexaoBD.php";


class LivroDAO{
    function cadastrarLivro(Livro $livro){

        $conexaoBD = ConexaoBD::getConexao();

        $sql = "insert into livros (titulo, autor, isbn, editora, edicao, publicacao, categoria, resumo, valor, promocao, imagem) values 
        ('{$livro->getTitulo()}',
        '{$livro->getAutor()}',
        '{$livro->getIsbn()}',
        '{$livro->getEditora()}',
        '{$livro->getEdicao()}',
        '{$livro->getPublicacao()}',
        '{$livro->getCategoria()}',
        '{$livro->getResumo()}',
        '{$livro->getValor()}',
        '{$livro->getPromocao()}',
        '{$livro->getImagem()}')";

        return $conexaoBD->exec($sql);
        
    }

    function atualizarLivro(Livro $livro){

        if($livro->getImagem() == ""){ 
            $sql = "update livros set titulo = '{$livro->getTitulo()}', 
            autor = '{$livro->getAutor()}',
            isbn = '{$livro->getIsbn()}',
            editora = '{$livro->getEditora()}',
            edicao = '{$livro->getEdicao()}',
            publicacao = '{$livro->getPublicacao()}',
            categoria = '{$livro->getCategoria()}',
            resumo = '{$livro->getResumo()}',
            valor = '{$livro->getValor()}',
            promocao = '{$livro->getPromocao()}'
            where id = '{$livro->getId()}'";
        }else{
            $sql = "update livros set titulo = '{$livro->getTitulo()}', 
            autor = '{$livro->getAutor()}',
            isbn = '{$livro->getIsbn()}',
            editora = '{$livro->getEditora()}',
            edicao = '{$livro->getEdicao()}',
            publicacao = '{$livro->getPublicacao()}',
            categoria = '{$livro->getCategoria()}',
            resumo = '{$livro->getResumo()}',
            valor = '{$livro->getValor()}',
            promocao = '{$livro->getPromocao()}',
            imagem = '{$livro->getImagem()}'
            where id = '{$livro->getId()}'";
        }

        $conexaoBD = ConexaoBD::getConexao();

        return $conexaoBD->exec($sql);
        

    }

    function obterLivros(){
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from livros";

        $stmt = $conexaoBD->query($sql);

        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $livros;
    }

    function obterLivrosPorId(int $id){
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from livros where id=$id";

        $stmt = $conexaoBD->query($sql);

        $livro = $stmt->fetch(PDO::FETCH_ASSOC);

        return $livro;
    }

    function obterLivrosPromocao(){
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from livros where promocao=1";

        $stmt = $conexaoBD->query($sql);

        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $livros;
    }

    function obterLivrosCategoria($categoria){
        $conexaoBD = ConexaoBD::getConexao();

        $sql = "select * from livros where categoria='$categoria'";

        $stmt = $conexaoBD->query($sql);

        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $livros;
    }



    function removerLivro(int $id){

        $sql = "delete from livros where id = $id";

        $conexaoBD = ConexaoBD::getConexao();

        return $conexaoBD->exec($sql);
        

    }

    function pesquisarLivros(String $chave){
       $conexaoBD = ConexaoBD::getConexao();

       $sql = "SELECT * FROM livros where titulo like '%$chave%' or autor like '%$chave%'";

       $stmt = $conexaoBD->query($sql);

       $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

       return $livros;
    }  
    

}

?>