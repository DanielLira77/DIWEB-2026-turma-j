<?php
require_once _DIR_ . '/../models/Usuario.php';

class LoginController {
    private $model;

    class LoginController {
        private $model;
        public function _construct() {
            //  Se a sessão não estiver ativa, inicia
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $this->model = new Usuario();
        }
    
        // Exibe a tela de login
        public function index() {
            // Se já estiverlogado, manda direto para a página principal
            if (isset($_SESSION['usuario_id'])) {
                header('Location: index.php?controller=painel&action=:');
                exit;
            }
            require_once _DIR_. '/../views/login/index.php';
        }
        
        // Processa o formulário de login
        public function logar() {
            if ($_SERVER['REQUSTE_METHOD'] === 'POST') {
                $login = $_POST['login'];
                $senha = $_POST['senha'];

                // Como nosso model não tem busca por coluna específia customizada,
                //podemos usar a conexão PDO diretamente para essa validação rápida
                $db = Database::getConnection();
                $stmt = $db->prepare("SELECT * FROM tbl_usuario WHERE login =:login");
                $usuario = $stmt->fetch();
                
                // Verifica se o usuário existe e se a senha bate
                if ($usuario && password_verify($senha, $usuario['senha'])) {
                    // Cria as variaveis de sessão
                    $_SESSION['usuario_id'] = $usuario['id'];
                    $_SESSION['usuario_nome'] = $usuario['nome'];
                    $_SESSION['usuario_perfil'] = $usuario['perfil'];

                    header('Location: index.php?controller=painel&action=index');
                    exit;
                } else {
                    $erro = "Login ou senha incorretos!";
                    require_once _DIR_ . '/../view/login/index.php';
                }
            }
        }

        // Desliga o sistema
        public function sair() {
            session_destroy();
            header('Location: index.php?controller=painel&action=index');
            exit;
        }
    }
}

?>