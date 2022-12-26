<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login Magic Books</title>
</head>
<body>
    <div class=" w-50 container p-3 mt-3">
    <h2>Login Magic</h2>
    </div>

    <?php
        if(isset($_SESSION['msg'])){
        $msg = $_SESSION['msg'];
        unset($_SESSION['msg']);
    ?>

        <div class="alert alert-warning w-50 container" role="alert">
            <?=$msg?>
        </div>
    <?php    
    }
    ?>

    <div class="w-50 container p-3 mt-3 border rounded">
    <form  action="efetua_login.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" class="btn btn-primary container">Entrar</button>
    </form>
    </div>
</body>
</html>