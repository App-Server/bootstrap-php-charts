<?php

    include 'config.php';
    include 'navbar.php';

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Softaware</title>
    <link rel="stylesheet" href="css/lista-de-chamados.css">
</head>
<body>

    
    <br>
    <br>
    <div class="main-table">
        <div class="m-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Cadastra novo usuario</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastra novo usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nome do Parceiro LDO</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div> 
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">email</label>
                        <input type="email" class="form-control" id="recipient-name">
                    </div> 
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Senha</label>
                        <input type="password" class="form-control" id="recipient-name">
                    </div>                    
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Setor</label>
                        <select class="form-select" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">TI</option>
                        <option value="2">Liderança</option>
                        <option value="3">Gerencia</option>
                        <option value="1">Controladoria</option>
                    </select>
                    </div>
                                    
                
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
                    <button type="button" class="btn btn-primary">Cadastra usuario</button>
                </div>
                </div>
            </div>
            </div>
            <br>
            <br>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">email</th>
                <th scope="col">Setor</th>
                <th scope="col">Nome</th>
                <th scope="col">Data do cadastro</th>
                </tr>
            </thead>
            <tbody>
               
            </tbody>
            </table>
        </div>
    </div>

    

</body>
</html>