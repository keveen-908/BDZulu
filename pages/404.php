<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página em Desenvolvimento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        setTimeout(function(){
            window.location.href = '../index.php';
        }, 5000); // Redireciona após 5 segundos
    </script>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-dark text-white">
    <div class="text-center">
        <h1 class="display-4 text-danger">Erro 404</h1>
        <h2 class="text-secondary">Página em Desenvolvimento</h2>
        <p class="lead">Estamos trabalhando nesta página. Você será redirecionado em breve.</p>
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <p class="mt-3">Se o redirecionamento não acontecer, <a href="index.php" class="text-decoration-none text-light">clique aqui</a>.</p>
    </div>
</body>
</html>
