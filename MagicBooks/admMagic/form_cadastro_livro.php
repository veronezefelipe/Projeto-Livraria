<?php
  include "cook.php";
?>
<?php

    include "menu.php";
    
?>
    <h2>Cadastro de Livros</h2>
    <form enctype="multipart/form-data" action="cadastro_livro.php" method="POST">
            <label for="tituloInput">Título: </label>
            <input type="text" name="titulo" id="tituloInput" class="input-padrao" required="true" size=50>

            <label for="autorInput">Autor: </label>
            <input type="text" name="autor" id="autorInput" class="input-padrao" size=50>

            <label for="isbnInput">Isbn: </label>
            <input type="text" name="isbn" id="isbnInput" class="input-padrao" size=50>

            <label for="editoraInput">Editora: </label>
            <input type="text" name="editora" id="editoraInput" class="input-padrao" size=50>

            <label for="edicaoInput">Edição: </label>
            <input type="text" name="edicao" id="edicaoInput" class="input-padrao" size=50>

            <label for="publicacaoInput">Publicação: </label>
            <input type="text" name="publicacao" id="publicacaoInput" class="input-padrao" size=50>

            <label for="categoriaInput">Categoria: </label>
            <input type="text" name="categoria" id="categoriaInput" class="input-padrao" size=50>

            <label for="resumoInput">Resumo: </label>
            <textarea name="resumo" id="resumoInput" cols="50" rows="5"></textarea>
            
            <label for="valorInput">Valor: </label>
            <input type="text" name="valor" id="valorInput" class="input-padrao" required="true" size=5>
           
            <label for="promocaoId"> 
                Promoção: <input type="checkbox" name="promocao" value="1" id="promocaoId">
            </label>
            
            <label for="imagemInput">Imagem: </label>
            <input type="file" name="imagem" id="imagemInput" class="input-padrao" required="true">
            
            <button type="submit" id="botaoId">Cadastrar</button>

    </form>

<?php

    include "rodape.php";
?>