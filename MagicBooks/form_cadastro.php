<?php
  include "cabecalho.php";
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <main>    
    <section class="cform">
        <h1>Cadastro</h1>
        
        <form class="row g-3 formulario" enctype="multipart/form-data" action="cadastro_cliente.php" method="POST">
            <div class="col-md-7">
              <label for="nomeInput" class="form-label">Nome:</label>
              <input type="text" name="nome" class="form-control" id="nomeId" required="true">
            </div>
            <div class="col-md-5">
              <label for="senhaInput" class="form-label">Senha:</label>
              <input type="password" class="form-control" id="senhaId" name="senha" required="true">
            </div>
            <div class="col-12">
              <label for="emailInput" class="form-label">Email:</label>
              <input type="text" class="form-control" id="emailId" name="email" required="true">
            </div>
            <div class="col-12">
              <label for="cpfInput" class="form-label">CPF:</label>
              <input type="text" class="form-control" id="cpfId" name="cpf" required="true">
            </div>
            <div class="col-12">
                <label for="enderecoInput" class="form-label">Endereço:</label>
                <input type="text" class="form-control" id="enderecoId" name="endereco" required="true">
            </div>
            <div class="col-md-6">
              <label for="cidadeInput" class="form-label">Cidade:</label>
              <input type="text" class="form-control" id="cidadeId" name="cidade" required="true">
            </div>
            <div class="col-md-2">
              <label for="estadoInput" class="form-label">Estado:</label>
              <select id="estadoId" class="form-select" name="estado">
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="SP">SP</option>
                <option value="SC">SC</option>
                <option value="GO">GO</option>
                <option value="RJ">RJ</option>
                <option value="ES">ES</option>
                <option value="RS">RS</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="cepInput" class="form-label">CEP:</label>
              <input type="text" class="form-control" id="cepId" name="cep" required="true">
            </div>
            <div class="col-12">
                <label for="referenciaInput" class="form-label">Referência:</label>
                <input type="text" class="form-control" id="referenciaId" name="referencia" required="true">
            </div>
            <div class="col-12">
              <button type="submit" class="btn">Cadastrar</button>
            </div>
          </form>
        </section>

    </main>
    <footer class="ftlog"> 
        <img src="img/logo01.png" class='icone-rodape'> 
        <p>&copy; Copyright - Magic Books (49)3566-1223</p>
  </footer>
</body>
</html>