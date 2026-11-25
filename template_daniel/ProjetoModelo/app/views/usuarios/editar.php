<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
</head>
<body>
    <h2>Editar Usuário</h2>
    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" value="<?= htmlspecialchars($usuario['nome'] ?? '') ?>" required><br><br>
        
        <label>Login:</label><br>
        <input type="text" name="login" value="<?= htmlspecialchars($usuario['login'] ?? '') ?>" required><br><br>

        <label>Senha (Deixe em branco para manter a atual):</label><br>
        <input type="password" name="senha"><br><br>

        <label>Perfil do Usuário:</label><br>
        <select name="perfil" required>
            <option value="admin" <?= (isset($usuario['perfil']) && $usuario['perfil'] === 'admin') ? 'selected' : '' ?>>Administrador</option>
            <option value="professor" <?= (isset($usuario['perfil']) && $usuario['perfil'] === 'professor') ? 'selected' : '' ?>>Professor</option>
            <option value="aluno" <?= (isset($usuario['perfil']) && $usuario['perfil'] === 'aluno') ? 'selected' : '' ?>>Aluno</option>
        </select><br><br>
        
        <button type="submit">Atualizar</button>
        <a href="index.php?controller=usuario&action=index">Voltar</a>
    </form>
</body>
</html>