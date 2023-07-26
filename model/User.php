<?php 

    class User {

        private $connection;

        public function __construct(SQLite3 $connection) {
            $this->setConnection($connection);
        }

        public function setConnection($connection) {
            $this->connection = $connection;
        }

        public function find($email) : Array | bool {
            $query = "SELECT * FROM tb_usuario WHERE usu_email=:email";
            $sttm = $this->connection->prepare($query);
            $sttm->bindValue(":email", $email);
            $result = $sttm->execute();
            return $result->fetchArray();
        }


        public function save($name, $city, $state, $email, $password) : SQLite3Result | bool {
            $query = "INSERT INTO tb_usuario('usu_nome', 'usu_cidade', 'usu_estado', 'usu_email', 'usu_senha')"  . "values(:name,:city,:state,:email,:password)";
            $sttm = $this->connection->prepare($query);
            $sttm->bindValue(":name", $name);
            $sttm->bindValue(":city", $city);
            $sttm->bindValue(":state", $state);
            $sttm->bindValue(":email", $email);
            $sttm->bindValue(":password", password_hash($password, PASSWORD_ARGON2I));
            $result = $sttm->execute();
            return $result;
        }
    }
?>