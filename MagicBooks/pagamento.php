<?php
    include "cookCli.php";
    include "cabecalho.php";
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <main>
        <div class="nature">
            <h1>Pagamento</h1>
            </div>
        <div class="nmpag">
            <h2>Nome: <?=$_SESSION['nomeCliente']?></h2>
            <h2>Email: <?=$_SESSION['email']?></h2>
        </div>
    
    <section class="cartaoform">
        <h1>Dados do Cartão</h1>
            <form action="finalizar_compra.php" class="row g-3" method="POST">
      <div class="mb-3">
        <label for="numeroInput" class="form-label">Número:</label>
        <input type="text" class="form-control" id="numeroId" name="numero" placeholder="0000 0000 0000 0000">
      </div>
      <div class="col-md-7">
        <label for="validadeInput" class="form-label">Validade:</label>
        <input type="text" class="form-control" id="validadeId" name="validade" placeholder="00/00">
      </div>
      <div class="col-md-5 ">
        <label for="cvvInput" class="form-label">CVV:</label>
        <input type="text" class="form-control" id="cvvId" name="cvv" placeholder="000">
      </div>
      
      <button type="submit" class="btnfi">Finalizar Compra!</button>
    </form>
    </section>
    </main>
</main>