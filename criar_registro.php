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
    <div class="container-fluid p-5 bg-primary bg-gradient text-white text-center">
        <h1>Mútua de Estagiário</h1>
        <p>Caixa de Assistência Fictícia dos Estagiários</p>
    </div>
    
    <!--#----------ÁREA DE TRABALHO----------#-->
    <div class="container start-0 mb-3">
        <a href="index.php">
            <button type="button" class="btn btn-secondary">
                Voltar
            </button>
        </a>
    </div>

    <!--Formulário-->
    <div class="container py-5 border rounded border-success">
        <h2 class="text-center">Cadastro de Associado</h2>
    <form>
        <div class="mt-3 mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Coloque o nome" name="nome">
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" placeholder="Coloque o email" name="email">
            </div>
            <div class="col">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" placeholder="Coloque a senha" name="senha">
            </div>
        </div>
        <div class="mt-3 mb-3">
                <label for="endereco1" class="form-label">Endereço:</label>
                <input type="text" class="form-control" placeholder="Coloque o endereço" name="endereco1">
        </div>
    </form>
    </div>
    


    <!--#----------ÁREA DE TRABALHO----------#-->

    <!--Rodapé-->
    <footer>
        <div class="container-fluid p-2 bg-light fixed-bottom border-top">
            <p class="text-muted">Rodapé</p>
        </div>
    </footer>

</body>
</html>