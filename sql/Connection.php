<?php 

    namespace sql;

    use PDO;
    use PDOException;

    class Connection
    {
        protected static $conn;

        public static function getInstance()
        {
           if(empty(self::$conn)) {
                try {
                    self::$conn = new PDO('mysql:host=localhost;dbname=bd_inspireRN', 'root', '');
                } catch (PDOException $e) {
                   die("Ops! Aconteceu um erro ao tentar conectar com o banco de dados, mas não se preucupe estamos trabalhando para resolver isso. " . $e->getMessage());
                }
           }
           return self::$conn;
        }
    }