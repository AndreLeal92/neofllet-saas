<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo ao Dashboard, <?= $_SESSION['user']; ?>!</h2>
    <p>Este é o painel de controle da sua conta.</p>
    <a href="/logout">Sair</a>
</body>
</html>