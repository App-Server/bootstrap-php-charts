<?php

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

    
    <div class="main-table">
        
        <br>
        <br>
        <div class="m-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Abrir Chamado</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Abrir novo chamado</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Nome do Parceiro LDO</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Setor</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Onde esta o problema?</label>
                    <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">SM bot</option>
                    <option value="2">Yampi</option>
                    <option value="3">Shopify</option>
                </select>
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Prioridade</label>
                    <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">Urgente</option>
                    <option value="2">Pouco Urgente</option>
                    <option value="3">Baixa Prioridade</option>
                </select>
                </div>
                
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Descreva a ocorrência</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
                <button type="button" class="btn btn-primary">Enviar formulário</button>
            </div>
            </div>
        </div>
        </div>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Atendente</th>
                </tr>
            </thead>
            <tbody>
                

                </tr>
            </tbody>
            </table>
        </div>
    </div>

</body>
</html>