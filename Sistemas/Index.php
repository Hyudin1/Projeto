<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-info">
    <div class="container text-center">
        <div class= "mt-5 mb-3">
            <img src="Recursos\premier-league-5.png" alt="" width= "200px" >
        </div>

        <div>
            <h3>Tela de Login</h3>
            <form action="" method="post">
                <label class="form-label  for="usuario>Usuário</label>
                <input class="form-control" type="email" name="user" id="usuario">

                <label class="form-label" for="pass">Senha</label>
                <input class="form-control" type="password" name="senha" id="pass"><br>

                <input class="btn btn-primary btn-lg" type="submit" value="Logar">
                <a class="btn btn-danger btn-lg" href="Web/cadastrar.php">Cadastrar</a>


            </form>
        
        </div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>