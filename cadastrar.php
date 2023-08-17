<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

 

<body>

    <nav class="navbar bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="..\Recursos\Premier2.png" alt="" width="100px"></a>
        </div>
    </nav>

 

 

    <div class="container mt-4 text-center"> 

        <h2>Cadastro do Cliente</h2>
        <p>Preencha as informações para concluir o cadastro.</p>
        <form action="bd.php" method="post">

        <div class="row py-2">
            <div class="col-md-12 ">
                <input class="form-control" type="text" name="nome" id="" placeholder="Nome completo" required>
            </div>
        </div>

 

        <div class="row py-2">

            <div class="col-md-3 ">
                <input class="form-control" type="text" name="endereco" id="" placeholder="Endereço" required>
            </div>

 

            <div class="col-md-3 ">
                <input class="form-control" type="number" name="numero" id="" placeholder="Número" required>
            </div>

            <div class="col-md-3 ">
                <input class="form-control" type="text" name="cidade" id="" placeholder="Cidade" required>
            </div> 

            <div class="col-md-3 ">
                <input class="form-control" type="text" name="estado" id="" placeholder="Estado" required>
            </div>
        </div>

 

        <div class="row py-2">

            <div class="col-md-3 ">
                <input class="form-control" type="int" name="rg" id="" placeholder="RG" required>
            </div>

            <div class="col-md-3 ">
                <input class="form-control" type="int" name="cpf" id="" placeholder="CPF" required>
            </div>
 
            <div class="col-md-3 ">

                <select class="form-control" type="text" name="sexo" id="" required>
                    <option value="">Selecione o sexo</option>
                    <option value="fem">Feminino</option>
                    <option value="mas">Masculino</option>
                    <option value="naodizer">Prefiro não dizer</option>
                </select>

            </div>

 

            <div class="col-md-3 ">
                <input class="form-control" type="date" name="data de nascimento" id="" placeholder="Data de Nascimento" required>
            </div>

        </div>

 

        <div class="row py-2">

            <div class="col-md-6">
                <input class="form-control" type="text" name="usuario" id="" placeholder="Usuário" required>
            </div>

 

            <div class="col-md-6 ">
                <input class="form-control" type="number" name="contato" id="" placeholder="Contato" required>
            </div>

 

            <div class="col-md-6">
                <label class="form-label" for="email"></label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Digite o e-mail para o usuário" required>
            </div>

 

            <div class="col-md-6">
                <label class="form-label" for="email"></label>
                <input class="form-control" type="email" name="conf" id="conf" placeholder="Confirme o e-mail do usuário" required>
            </div>

 

            <div class="col-md-6">
                <label class="form-label" for="senha"></label>
                <input class="form-control" type="password" name="senha" id="senha" placeholder="Senha" required>
            </div>

 

            <div class="col-md-6">
                <label class="form-label" for="conf"></label>
                <input class="form-control" type="password" name="confsenha" id="conf" placeholder="Confirme a senha" required>
            </div>

            <div class="col-12">    
                <br> <button class= "btn btn-lg btn-dark" type= submit >Cadastrar</button>
            </div>


        </div>

        </form>        

    </div>

 

    <footer class="footer text-center fixed-bottom bg-dark py-3">

        <div class="container">
            <p class="text-light">Todos os direitos reservados. 2023</p>
        </div>

    </footer> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 
</body>

 

</html>