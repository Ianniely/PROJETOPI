<?php 

namespace web\Models;

class UserModel
{

        private $connection;

        public function __construct($connection)
        {
            $this->setConnection($connection);
        }

        public function setConnection($connection)
        {
            $this->connection = $connection;
        }

        /**
         * Receives an email and looks for it in the users table, if it finds the email returns all user data otherwise returns false.
         */
        public function find(string $emailUser) : Array | bool
        {
            $query = "SELECT * FROM tb_usuario WHERE usu_email=:emailUser";
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":emailUser", $emailUser);
            $stmt->execute();
            return $stmt->fetch();
        }

        /**
         * Receives data sent by a registration form and saves it in the user table of the database, returning true or false whether the query was successful or not.
         */
        public function save(string $userName, string $userCity, string $userState, string $userPhoneNumber, string $userEmail, string $userPassword) : bool 
        {
            $query = "INSERT INTO tb_usuario(usu_nome, usu_cidade, usu_estado, usu_telefone, usu_email, usu_senha)"  . "values(:userName,:userCity,:userState,:userPhoneNumber,:userEmail,:userPassword)";
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":userName", $userName);
            $stmt->bindValue(":userCity", $userCity);
            $stmt->bindValue(":userState", $userState);
            $stmt->bindValue(":userPhoneNumber", $userPhoneNumber);
            $stmt->bindValue(":userEmail", $userEmail);
            $stmt->bindValue(":userPassword", password_hash($userPassword, PASSWORD_ARGON2I));
            $result = $stmt->execute();
            return $result;
        }

        public function update(string $nameCol, string $value, int $id, string $email) : Array | bool
        {
            $query = "UPDATE tb_usuario SET $nameCol=:value WHERE usu_id=:id";
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":value", $value);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            
            if($stmt) {
                return $this->find($email);
            } else {
                return false;
            }
            
        }

        public function delete(string $idUser) : bool
        {
            $query = "DELETE FROM tb_usuario WHERE usu_id=:idUser";   
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":idUser", $idUser);
            $result = $stmt->execute();
            return $result;
        }
    }
?>