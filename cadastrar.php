<!DOCTYPE html>

<html lang="en">

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
            <a class="navbar-brand" href="index.php"><img src="..\Recursos/Premier2.png" alt="" width="100px"></a>
        </div>
    </nav>
    <div class="container mt-4 text-center">
        <h2>Cadastro de Clientes</h2>
        <p>Preencha as informações para concluir o cadastro.</p>
        <form action="">
        <div class="row py-2">
            <div class="col-md-12 ">
                <input class="form-control" type="text" name="nome" id="" placeholder="Nome Completo" required>
            </div>
        </div>
        <div class="row py-2">
            <div class= "col-md-6">
                <select class="form-control" name="sexo" id="" required>
                    <option value="">Selecione o sexo</option>
                    <option value="fem">Feminino</option>
                    <option value="masc">Masculino</option>
                    <option value="indeterminado">Prefiro não dizer</option>
                </select>
            </div>

        <div class="row py-2">
            <div class="col-md-6 ">
                <input class="form-control" type="text" name="endereco" id="" placeholder="Endereço" required>
            </div>

            <div class="col-md-6 ">
                <input class="form-control" type="number" name="numero" id="" placeholder="Número" required>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-3 ">
                <input class="form-control" type="text" name="cidade" id="" placeholder="Cidade" required>
            </div>

            <div class="col-md-3 ">
                <input class="form-control" type="text" name="estado" id="" placeholder="Estado" required>
            </div>

            <div class="col-md-3 ">
                <input class="form-control" type="number" name="rg" id="" placeholder="RG" required>
            </div>

            <div class="col-md-3 ">
                <input class="form-control" type="number" name="cpf" id="" placeholder="CPF" required>
            </div>       

            <div class="col-md-3 ">
                <br> <input class="form-control" type="date" name="datadonascimento" id="" placeholder="Data do Nascimento" required>
            </div>
    
            <div class="row py-2">
                <div class= "col-md-6">
                    <label class= "form-label" for="email">Digite o e-mail de usuário</label>
                    <input class= "form-control"type="email" name="email" id="email" placeholder="E-mail">
                </div>
                <div class= "col-md-6">
                    <label class= "form-label" for="conf">Confirme o e-mail de usuário</label>
                    <input class="form-control" type="email" name="conf" id="conf" placeholder="Confirme o E-mail">

                </div>

            </div>

            <div class="row py-2">
                <div class= "col-md-6">
                    <label class= "form-label" for="senha">Digite a senha do usuário</label>
                    <input class= "form-control"type="senha" name="senha" id="senha" placeholder="Senha">
                </div>
                <div class= "col-md-6">
                    <label class= "form-label" for="conf">Confirme a senha do usuário</label>
                    <input class="forms-control" type="senha" name="conf" id="conf" placeholder="Confirme a Senha">

                </div>

            </div>

            <div class="col-12">
                 <br> <button class="btn btn-lg btn-success" type="submit">Confirmar</button>
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