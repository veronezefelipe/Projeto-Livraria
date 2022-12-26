<?php
    include "cabecalho.php";

    unset($_SESSION['carrinho']);
    unset($_SESSION['total']);
?>

<main class="maintm">
    <div class="sucesso">
        <h1>Pedido Finalizado :)</h1>
        <p>Suas informações sobre o pedido serão encaminhadas ao seu email!</p>
    </div>
</main>

<?php
    include "rodape.php"
?>