<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <h2>Novo Usuário</h2>
    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>
        
        <label>E-mail:</label><br>
        <input type="email" name="email" required><br><br>
        
        <button type="submit">Salvar</button>
        <a href="index.php?controller=usuario&action=index">Voltar</a>
    </form>
</body>
</html>