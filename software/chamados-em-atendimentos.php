<?php
    include 'navbar.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/chamados-em-atendimentos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="main-table">
    
    <br>
    <br>
    <div class="m-5">
    <h3>Lista de chamados em atendimento</h3>
    <br>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Atendente</th>
            <th scope="col">Atendente</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><button type="button" class="btn btn-warning">Em atendimento</button></td>
            <td><button type="button" class="btn btn-success">Finalizar</button></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td><button type="button" class="btn btn-warning">Em atendimento</button></td>
            <td><button type="button" class="btn btn-success">Finalizar</button></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td><button type="button" class="btn btn-warning">Em atendimento</button></td>
            <td><button type="button" class="btn btn-success">Finalizar</button></td>

            </tr>
        </tbody>
        </table>
    </div>
</div>

</body>
</html>