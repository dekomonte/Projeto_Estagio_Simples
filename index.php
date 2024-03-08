<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Projeto_LANU">
    <meta name="author" content="Andressa Monteiro">
    <meta name="keywords" content="html, css, php">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Mútua de Estagiário</title>

</head>
<body>
    <!--Cabeçalho-->
    <div class="container p-5 bg-primary bg-gradient text-white text-center">
        <h1>Mútua de Estagiário</h1>
        <p>Caixa de Assistência Fictícia dos Estagiários</p>
    </div>
    
    <!--Menu Navegação Lateral-->
    <div class="container">
        <h2>Menu</h2>
        <p>Associado</p>
        <ul class="nav flex-column border rounded border-success col-1">
            <li class="nav-item"><a class="nav-link" href="criar_registro.php">Criar</a></li>
            <li class="nav-item"><a class="nav-link" href="consultar_registro.php">Consultar</a></li>
            <li class="nav-item"><a class="nav-link" href="editar_registro.php">Editar</a></li>
            <li class="nav-item"><a class="nav-link" href="remover_registro.php">Remover</a></li>
        </ul>
    </div>

    <!--Centro-->
    

    <!--Rodapé-->
    <footer>
        <div class="container-fluid p-2 bg-light fixed-bottom border-top">
            <p class="text-muted">Rodapé</p>
        </div>
    </footer>

</body>
</html>

<?php

require "src/conexao_db.php";

