<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Principal - Sistema</title>
</head>
<body>
    <header style="background: #f4f4f4; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
        <h1>🚀 Painel do Sistema</h1>
        <div>
            Olá, <strong><?= $_SESSION['usuario_nome'] ?></strong> (Perfil: <em><?= strtoupper($_SESSION['usuario_perfil']) ?></em>) | 
            <a href="index.php?controller=login&action=sair" style="color: red; font-weight: bold;">Sair</a>
        </div>
    </header>

    <main style="padding: 20px;">
        <h2>Bem-vindo ao sistema acadêmico base!</h2>
        <p>Este é o esqueleto da sua página principal. Aqui você pode aplicar o seu tema, CSS, Bootstrap ou criar seus cards.</p>
        
        <hr>
        
        <h3>Menu de Navegação do Projeto:</h3>
        <ul>
            <li><a href="index.php?controller=usuario&action=index">Gerenciar Usuários (CRUD)</a></li>
            
            <li><a href="#" onclick="alert('Espaço para o aluno criar o ClienteController!')">Gerenciar Clientes (Desafio do Aluno)</a></li>
            <li><a href="#" onclick="alert('Espaço para o aluno criar o ProdutoController!')">Gerenciar Produtos (Desafio do Aluno)</a></li>
        </ul>
    </main>

    <footer style="margin-top: 50px; text-align: center; color: #777;">
        <p>Disciplina LTP2 - Professor Wellington</p>
    </footer>
</body>
</html>