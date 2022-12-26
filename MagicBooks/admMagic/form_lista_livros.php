<?php
  include "cook.php";
?>
<?php
    include "menu.php";
    require_once "src/LivroDAO.php";
    
    $livroDAO = new LivroDAO();

    $chave = $_GET['chave']??null;

    if ($chave)
        $livros = $livroDAO->pesquisarLivros($chave);
    else
        $livros = $livroDAO->obterLivros();

    if (isset($_GET['mensagem'])){
        $msg = $_GET['mensagem'];
    }else{
        $msg = "";
    }
?>
    <p><?=$msg?></p>

    <form class="form_pesquisa" action="form_lista_livros.php">
        <label for="">Digite o título ou autor do livro: </label>
        <input type="text" name="chave" id="" class="input-padrao" required="true" size=50>
        <button class="btpes" type="submit" id="botaoId">Pesquisar</button>
    </form>

    <table>
        <tr>
            <th>ID</th>             
            <th>Título</th>
            <th>Autor</th>
            <th>Isbn</th>
            <th>Valor</th>
            <th>Promoção</th>
            <th>---</th>
        </tr>
    
<?php
    foreach ($livros as $livro) {
?>
        <tr> 
            <td><?=$livro['id']?></td>                  
            <td><?=$livro['titulo']?></td>
            <td><?=$livro['autor']?></td>
            <td><?=$livro['isbn']?></td>
            <td>R$<?=$livro['valor']?></td>
            <td>
                <?php
                    if($livro['promocao'] == 1)
                        echo "Sim";
                    else
                        echo "Não";
                ?>
            </td>
            <td>
                <a href="remove_livro.php?id=<?=$livro['id']?>">
                    <i class="fas fa-trash"></i>
                </a>
                <a href="form_atualizar_livro.php?id=<?=$livro['id']?>">
                    <i class="fas fa-cog"></i>
                </a>
            </td>

        </tr>
<?php
    }   
?>

    </table>


<?php

    include "rodape.php";
?>