<?php
  include "cabecalho.php";
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <main class="mainlog">   
    <section class="cform">
        <h1>Login</h1>
        <form action="efetua_login_cliente.php" method="POST">
  <div class="mb-3">
    <label for="emailInput" class="form-label">Email:</label>
    <input type="text" class="form-control" id="emailId" name="email">
  </div>
  <div class="mb-3">
    <label for="senhaInput" class="form-label">Senha:</label>
    <input type="password" class="form-control" id="senhaId" name="senha">
  </div>
  <button type="submit" class="btn ">Enviar</button>
  <a href="form_cadastro.php"><p>Não possui cadastro?</p></a>
</form>
</section>
    </main>
   
  <footer class="ftlog"> 
        <img src="img/logo01.png" class='icone-rodape'> 
        <p>&copy; Copyright - Magic Books (49)3566-1223</p>
  </footer>

</body>
</html>