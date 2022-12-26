<?php
  include "cook.php";
?>
<?php
    include "menu.php";
    require "src/Livro.php";
    require "src/LivroDAO.php";
    require "funcoes.php";
?>

<h2>Edição De Livro</h2>
<div>

<?php 
    $id = $_GET['id'];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $isbn = $_POST["isbn"];
    $editora = $_POST["editora"];
    $edicao = $_POST["edicao"];
    $publicacao = $_POST["publicacao"];
    $categoria = $_POST["categoria"];
    $resumo = $_POST["resumo"];
    $valor = $_POST["valor"];

    if (isset($_POST["promocao"]))
    $promocao = $_POST["promocao"];
    else
    $promocao = 0;
    
    if ($_FILES['imagem']['size']>0){
        $imagem = pegarImagem($_FILES);
    }else{
        $imagem = "";
    }

    $livro = new Livro();
    $livro->setId($id);
    $livro->setTitulo($titulo);
    $livro->setAutor($autor);
    $livro->setIsbn($isbn);
    $livro->setEditora($editora);
    $livro->setEdicao($edicao);
    $livro->setPublicacao($publicacao);
    $livro->setCategoria($categoria);
    $livro->setResumo($resumo);
    $livro->setValor($valor);
    $livro->setImagem($imagem);
    $livro->setPromocao($promocao);

    $livroDAO = new LivroDAO();   
    $resp = $livroDAO->atualizarLivro($livro);

    if ($resp > 0){
        header("Location:form_lista_livros.php?mensagem=Livro atualizado com sucesso!");
    }else{
        header("Location:form_lista_livros.php?mensagem=Erro na atualização!");
    }   
?>


</div>

<?php
    include "rodape.php";
?>