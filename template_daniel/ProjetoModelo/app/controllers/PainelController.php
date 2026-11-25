<?php
class PainelController {
    
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Bloqueio de segurança: Se não tiver sessão ativa, chuta de volta para o login
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: index.php?controller=login&action=index');
            exit;
        }
    }

    // Exibe a página principal (onde os alunos vão colocar os temas/CSS deles)
    public function index() {
        require_once __DIR__ . '/../views/painel/index.php';
    }
}