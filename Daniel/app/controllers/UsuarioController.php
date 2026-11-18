<?php
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController {
    private $model;

    public function __construct () {
        // inicia a sessão se não estiver iniciada
        if (session_status () === PHP_SESSION_NONE) {
            session_start ();
        }

        // Se tentar acessar o CRUD sem logar, vai para a tela de login
        if (!isset($_SESSION['usuario_id'])) {
            header('Location:
            index.php?controller=login&action=index');
            exit;
        }

        $this->model = new Usuario() ;
    }

    public function index () {
        $usuarios = $this->model->all();
        require_once __DIR__ . '/../Views/usuarios/index.php';
     }
    public function cadastrar () {
        if ($_SERVER['REQUEST_METHOD'] ===  "POST") {
            // Mapeado com as colunas reais da sua tbl_usuario
            $dados = [
                'nome'  => $_POST['nome'],
                'login' => $_POST['Login'],
                'senha' => password_hash ($_POST['senha'],
                PASSWORD_DEFAULT), // Criptografia simples e moderna
                'perfil' => $_POST['perfil']
            ];
            $this->model->insert($dados);
            header('Location:
            index.php?controller=usuario&action=index');
            exit;
        }
        require_once __DIR__ '/../views/usuarios/cadastrar.php';
    }
    public function editar() {
        $id = $_GET['id'] ?? null;
        if (!$id) die("ID não fornecido.");
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'nome' => 
                'login' =>
                'perfil' =>
            ]
        }
    }
    }

