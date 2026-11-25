<?php
require_once __DIR__ . '/Model.php';

class Usuario extends Model {
    // O aluno só altera o nome da tabela quando duplicar esse arquivo
    protected $table = 'tbl_usuario'; 
}