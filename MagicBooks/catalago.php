<?php
    require "admMagic/src/LivroDAO.php";
    include "cabecalho.php";
    
    $livroDAO = new LivroDAO();

    $chave = $_GET['chave']??null;

    if ($chave)
        $livros = $livroDAO->pesquisarLivros($chave);
    else
        $livros = $livroDAO->obterLivros();

    
?>
    <main>
        
    
    <form class="form_pesquisa" action="catalago.php">
        <label for="">Digite o título do livro: </label>
        <input type="text" name="chave" id="" class="input-padrao" required="true" size=50>
        <button class="btpes" type="submit" id="botaoId">Pesquisar</button>
    </form>

        <section class="container">
            <ul>
            <?php
          
            foreach ($livros as $livro): 
            
            ?>                
                <li>
                    <div class="grade">
                    <img src="data:image/png;base64, <?=base64_encode($livro['imagem'])?>" class='imgliv'>
                        <h2><?=$livro['titulo']?></h2>
                        <a href="produto.php?id=<?=$livro['id']?>">
                            <p>Saiba mais!</p>
                        </a>
                    </div>
                </li>
             <?php
            endforeach;
            ?>

            </ul>
        </div>
        </section>

        
    </main>
            
</body>
</html>