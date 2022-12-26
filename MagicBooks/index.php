<?php
    require "admMagic/src/LivroDAO.php";
    include "cabecalho.php";
?>
    <main>
        <section class="banner">
            <h2>Magic Books</h2>
            <p>Toda linha de leitura em um só lugar. A Magic Books conta com um dos maiores catálogos de livros para sua leitura, com os melhores preços do mercado. </p>  
            <p>
                <a href="catalago.php">Acesse nosso catálogo!</a>
            </p>
        </section>

        <section class="bloco">
        <div class="nature">
            <h1>Destaques</h1>
            <p>Conheça nossos livros em destaque!</p>
        </div>

        <section class="container">
            <ul>
            <?php
            $livroDAO = new LivroDAO();
            $livros = $livroDAO->obterLivros();

            /* foreach ($livros as $livro): */
            for ($i=0; $i < 5; $i++):
                $livro = $livros[$i];
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
            endfor;
            ?>

            </ul>
        </div>
        </section>
        </section>
        <section class="bloco">
        <div class="nature">
            <h1>Promoção</h1>
            <p>Conheça nossos livros em promoção!</p>
        </div>

        <section class="container">
            <ul>
            <?php
            $livroDAO = new LivroDAO();
            $livros = $livroDAO->obterLivrosPromocao();

            foreach ($livros as $livro): 
            ?>                
                <li>
                    <div class="grade">
                    <img src="data:image/png;base64, <?=base64_encode($livro['imagem'])?>" class='imgliv'>
                        <h2><?=$livro['titulo']?></h2>
                        <a href="Produto.php?id=<?=$livro['id']?>">
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
        </section>

        
    </main>
    <?php
        include "rodape.php";
    ?>
</body>
</html>