<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Principal - Sistema</title>
</head>
<body>
    <header style="background: #f4f4f4; padding: 10px;
    display: flex; justify-content: space-between;
    alling-items: center;">
    <h1>🚀  Painel do Sistema </h1>
    <div>
        Olá, <strong><?= $_SESSION ['usuario_nome'] ?>
        </strong> (Perfil: <em><? strtoupper($_SESSION['ususario_perfil']) ?></em>) |
        <hr href ="index.php?controller=login&actio=sair"
        style="color: red; font-weight: bold;">Sair</a>
    </div>
</header>
<main style="padding: 20px;">
    <h2>Bem-Vindo ao Sistema acadêmico base!</h2>
    <p>Este é o esqueleto da sua página principal. Aqui 
    você pode aplicar o seu tema, CSS, Bootstrap ou criar
    seus cards.</p>
<hr>
<h3>Menu de navegação do Projeto:</h3>
<ul>
    <li><a href=
    "index.php?controller=usuario&action=index">
    Gerenciar Usuários (CRUD)</a> </li>
    <li><a href="#" onclick="alert('Espaço para o aluno criar o Clientecontroller!)">Gerenciar
    clientes (Desafio do aluno)</a></li>
    <li><a href="#" onclick="alert('Espaço para criar o Produtocontroller!')">Gerenciar
    Produtos (Desafios do Aluno) </a> </li>

</ul>
</main>
<footer style="margin=top: 50px text-align: center;
color #777;">
    <p>Disciplina LTP2 - Professor Welligton</p>
</footer>

</body>
</html>