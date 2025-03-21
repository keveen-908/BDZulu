<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca de Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="justify-content-center align-items-center vh-100 bg-light text-dark">
    <div class="card p-4 shadow-lg" style="width: 350px; background-color: #fff; border-radius: 10px;">
        <h3 class="text-center text-dark">Troca de Senha</h3>
        <form action="trocar_senha.php" method="POST">
            <div class="mb-3">
                <label for="senhaAtual" class="form-label text-dark">Senha Atual</label>
                <input type="password" class="form-control" id="senhaAtual" name="senhaAtual" required>
            </div>
            <div class="mb-3">
                <label for="novaSenha" class="form-label text-dark">Nova Senha</label>
                <input type="password" class="form-control" id="novaSenha" name="novaSenha" required>
            </div>
            <div class="mb-3">
                <label for="confirmarSenha" class="form-label text-dark">Confirmar Nova Senha</label>
                <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Alterar Senha</button>
        </form>
    </div>
</body>
</html>
