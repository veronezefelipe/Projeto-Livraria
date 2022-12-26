<?php
    include "menu.php";
    require "src/LivroDAO.php";
?>
<?php


    $id = $_GET['id'];

    $livroDAO = new LivroDAO();

    $resp = $livroDAO->removerLivro($id);

    if ($resp > 0)
        header("Location:form_lista_livros.php?mensagem=Livro removido com sucesso!");
    else
        header("Location:form_lista_livros.php?mensagem=Erro na remoção!");
?>

<script>
    document.location.href="form_lista_livros.php";
</script>

<?php
    include "rodape.php";
?>