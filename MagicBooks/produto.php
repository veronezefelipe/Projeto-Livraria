<?php
    include "cabecalho.php";
    require "admMagic/src/LivroDAO.php";
    

    $id = $_GET['id'];

    $livroDAO = new LivroDAO();
    $livro = $livroDAO->obterLivrosPorId($id);
?>
    <main class="tMain"> 
        <section class='containerP'>

            <p><h1><?=$livro['titulo']?></h1></p>
            <p><h2><?=$livro['autor']?></h2></p>
            <img src="data:image/png;base64, <?=base64_encode($livro['imagem'])?>" class='produto'>
            <h3>Resumo</h3>
            
            <p><h3><?=$livro['resumo']?></h3></p> 
            <p><h2>R$<?=number_format($livro['valor'],2,',','.')?></h2></p>      
            <p><a href="carrinho.php?id=<?=$livro['id']?>&acao=inserir"><button>Adicionar ao carrinho!</button></a></p>
        
        </div>            
    </main>
    <?php
        include "rodape.php"
    ?>   
    
</body>
</html>