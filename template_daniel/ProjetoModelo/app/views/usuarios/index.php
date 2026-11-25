<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Controle de Usuários (tbl_usuario)</h2>
    <a href="index.php?controller=usuario&action=cadastrar">Novo Usuário</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Login</th>
                <th>Perfil</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($usuarios)): ?>
                <tr><td colspan="5">Nenhum registro encontrado.</td></tr>
            <?php else: ?>
                <?php foreach ($usuarios as $u): ?>
                    <tr>
                        <td><?= $u['id'] ?></td>
                        <td><?= $u['nome'] ?></td>
                        <td><?= $u['login'] ?></td>
                        <td><?= $u['perfil'] ?></td>
                        <td>
                            <a href="index.php?controller=usuario&action=editar&id=<?= $u['id'] ?>">Editar</a> | 
                            <a href="index.php?controller=usuario&action=excluir&id=<?= $u['id'] ?>" onclick="return confirm('Deseja excluir?')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>