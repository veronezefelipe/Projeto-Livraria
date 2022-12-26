<?php
  include "cook.php";
?>
<?php

    include "menu.php";
    require "src/LivroDAO.php";

    $id = $_GET['id'];

    $livroDAO = new LivroDAO();
    $livro = $livroDAO->obterLivrosPorId($id);
    
?>
    <h2>Edição de Livros</h2>
    <form enctype="multipart/form-data" action="atualiza_livro.php?id=<?=$livro['id']?>" method="POST">
            <label for="tituloInput">Título: </label>
            <input type="text" name="titulo" value="<?=$livro['titulo']?>" id="tituloInput" class="input-padrao" required="true" size=50>

            <label for="autorInput">Autor: </label>
            <input type="text" name="autor" value="<?=$livro['autor']?>" id="autorInput" class="input-padrao" size=50>

            <label for="isbnInput">Isbn: </label>
            <input type="text" name="isbn" value="<?=$livro['isbn']?>" id="isbnInput" class="input-padrao" size=50>

            <label for="editoraInput">Editora: </label>
            <input type="text" name="editora" value="<?=$livro['editora']?>" id="editoraInput" class="input-padrao" size=50>

            <label for="edicaoInput">Edição: </label>
            <input type="text" name="edicao" value="<?=$livro['edicao']?>" id="edicaoInput" class="input-padrao" size=50>

            <label for="publicacaoInput">Publicação: </label>
            <input type="text" name="publicacao" value="<?=$livro['publicacao']?>" id="publicacaoInput" class="input-padrao" size=50>

            <label for="categoriaInput">Categoria: </label>
            <input type="text" name="categoria" value="<?=$livro['categoria']?>" id="categoriaInput" class="input-padrao" size=50>

            <label for="resumoInput">Resumo: </label>
            <textarea name="resumo" id="resumoInput" cols="50" rows="5"><?=$livro['resumo']?></textarea>
            
            <label for="valorInput">Valor: </label>
            <input type="text" name="valor" value="<?=$livro['valor']?>" id="valorInput" class="input-padrao" required="true" size=5>
           
            <?php
                if($livro['promocao'] == 1):
            ?>
            <label for="promocaoId"> 
                Promoção: <input type="checkbox" class="checkp" name="promocao" value="1" id="promocaoId" CHECKED>
            </label>
            <?php else: ?>

            <label for="promocaoId"> 
                Promoção: <input type="checkbox" name="promocao" value="1" id="promocaoId">
            </label>

            <?php endif; ?>
            
            <label for="imagemInput">Imagem: </label>
            <input type="file" name="imagem" id="imagemInput" class="input-padrao">
            
            <button type="submit" id="botaoId">Atualizar</button>

    </form>

<?php

    include "rodape.php";
?>