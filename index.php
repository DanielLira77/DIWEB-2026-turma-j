<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Captura e limpa o parâmetro da URL
$controllerParam = $_GET['controller'] ?? 'login';
$actionParam     = $_GET['action']     ?? 'index';

// Força a primeira letra para maiúscula (ex: usuario -> Usuario)
$controllerBase = ucfirst(strtolower($controllerParam));

// Monta o nome da classe e o caminho do arquivo
$controllerName = $controllerBase . 'Controller';
$controllerFile = __DIR__ . '/app/controllers/' . $controllerName . '.php';

// Verifica se o arquivo físico realmente existe na pasta
if (file_exists($controllerFile)) {
    // Inclui o arquivo explicitamente para o PHP conhecer a classe
    require_once $controllerFile;
    
    // Verifica se a classe agora existe na memória do PHP
    if (class_exists($controllerName)) {
        $controllerInstance = new $controllerName();
        
        if (method_exists($controllerInstance, $actionParam)) {
            $controllerInstance->$actionParam();
        } else {
            die("Erro: A ação '{$actionParam}' não existe no controlador {$controllerName}.");
        }
    } else {
        die("Erro: O arquivo existe, mas a classe dentro dele precisa se chamar exatamente: <strong>{$controllerName}</strong>");
    }
} else {
    die("Erro: O arquivo do controlador não foi encontrado em: {$controllerFile}");
}
?>
