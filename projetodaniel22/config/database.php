<?php
class Database {
    private static $host = "localhost";
    private static $dbname = "testedb3"; // Aluno altera
    private static $user = "root";
    private static $pass = "";
    private static $conexao = null;

    public static function getConnection () {
        if (self:: $conexao === null) {
            try {
                self::$conexao = new PDO (
                    "mysql:host=" . self::$host .
                    ";dbname=" . self::$dbname .
                    ";charset=utf8",
                    self::$user,
                    self::$pass,
                    [
                        PDO::ATTR_ERRMODE => PDO::
                        ERRMODE_EXPECTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO
                        ::FETCH_ASSOC
                        
                    ]

                    );
            } catch (PDOExeption $e) {
                die("Erro na conexão com o banco de dados:
                " . $e->getMessage());
            }
        }
        return self::$conexao;
    }
}