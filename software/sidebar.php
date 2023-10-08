<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Softaware</title>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
        <!-- sidebar fixo -->
        <div class="sidebar">
            <ul>
                <br>
                <label class="text">Software</label>
                <br>
                <br>
                <li><a href="dashboard.php"><i class="bi bi-house-door"></i>Dashboard</a></li>
                <li><a href="lista-de-chamados.php"><i class="bi bi-card-checklist"></i>Lista de Chamados</a></li>
                <li><a href="#"><i class="bi bi-exclamation-circle"></i>Chamados em adamento</a></li>
                <li><a href="#"><i class="bi bi-archive"></i></i>Chamados arquivados</a></li>
                <li><a href="#"><i class="bi bi-people"></i></i></i>Cadastra usuarios</a></li>
            </ul>
        </div>

        <!-- sidebar responsivo -->
        

        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <i class="bi bi-list"></i>
        </button>
        
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Software</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
            <div class="sidebar-responsivo">
                <ul>
                    <a href="dashboard.php"><i class="bi bi-house-door"></i>Dashboard</a></li>
                    <a href="lista-de-chamados.php"><i class="bi bi-card-checklist"></i>Lista de Chamados</a></li>
                    <a href="#"><i class="bi bi-exclamation-circle"></i>Chamados em adamento</a></li>
                    <a href="#"><i class="bi bi-archive"></i></i>Chamados arquivados</a></li>
                    <a href="#"><i class="bi bi-people"></i></i></i>Cadastra usuarios</a></li>
                </ul>
            </div>
            </div>
            
        </div>
        </div>

        <!-- conteudo -->
        <div class="main">
            <div class="main-conteudo">
                
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>