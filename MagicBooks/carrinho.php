<?php
    include "cabecalho.php";
    require "admMagic/src/LivroDAO.php";

    $carrinho = $_SESSION['carrinho'];

    $acao = $_GET['acao']??null;

    if($acao == "inserir"){
        $existe = false;

        $id = $_GET['id'];

        if(sizeof($carrinho)>0){
            for ($i=0; $i <= array_key_last($carrinho); $i++){
                $item = $carrinho[$i];
                if($item['id'] == $id){
                    unset($carrinho[$i]);
                    $item['quantidade'] += 1;
                    $carrinho[$i] = $item;
                    $existe = true;
                    break;
                }
            }
        }
        if ($existe == false){
            $livroDAO = new LivroDAO();
            $livro = $livroDAO->obterLivrosPorId($id);
            $item = [
                "id"=>$livro['id'],
                "imagem"=>$livro['imagem'],
                "titulo"=>$livro['titulo'],
                "artista"=>$livro['artista'],
                "valor"=>$livro['valor'],
                "quantidade"=>1
            ];
            $carrinho[] = $item;
        }
    }else
    if($acao == "remover"){
        $idRemover = $_GET['id'];
        for ($i=0; $i <= array_key_last($carrinho); $i++) {
            $item = $carrinho[$i];
            if($item['id'] == $idRemover){
                unset($carrinho[$i]);
                break;
            }
        }
    }
    $_SESSION['carrinho'] = $carrinho;
?>    

    <main class="carrinhomain"> 
    <div class="nature">
            <h1>Carrinho de Compras</h1>
        </div>
        <table class="tabcar">
            <thead  class="cabecalho">
                <tr class="cabecalho">
                    <th>Título</th>
                    <th>Imagem</th>
                    <th>Valor</th>
                    <th>Quantidade</th>
                    <th>Subtotal</th>
                    <th>Remover</th>           
                </tr>
            </thead>
            <?php
                $total = 0;
                foreach ($carrinho as $item):
            ?>
            
            <tr >
                <th class="prods">
                    <?=$item['titulo']?>
                </th>
                <th><img src="data:image/png;base64,<?=base64_encode($item['imagem'])?>" class="imgcar"></th>
                <th>R$ <?=number_format($item['valor'],2,',','.')?></th> 
                <th>
                   <input class="inp" type="text" value="<?=$item['quantidade']?>" disabled>
                </th>
                <?php
                $subtotal = $item['valor']*$item['quantidade'];
                $total = $total + $subtotal;
                $_SESSION['total'] = $total;
                ?>
                <th>
                    R$ <?=number_format($subtotal,2,',','.')?> 
                </th>
                <th><a href="carrinho.php?id=<?=$item['id']?>&acao=remover"><i class="fas fa-trash remover"></i></a></th>
            </tr>
            <?php
                endforeach;
            ?>
        </table>
        <div class="totalcar">
        <h2>Valor Total: R$<?=number_format($total,2,',','.')?></h2>
        </div>
       
        <a href="login.php"><div class="btfinal">Finalizar Pedido!</div></a>
    </main>
<?php
    include "rodape.php"
?>