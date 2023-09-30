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
         * Receives data sent by a registration form and saves it in the user table of the database, returning true or false whether the query was successful or not.
         */
        public function save(string $userName, string $userCity, string $userState, string $userPhoneNumber, string $userType, string $userEmail, string $userPassword) : bool 
        {
            $query = "INSERT INTO tb_clientes(cli_nome, cli_cidade, cli_estado, cli_telefone, cli_tipo, cli_email, cli_senha)"  . "values(:userName,:userCity,:userState,:userPhoneNumber,:userType,:userEmail,:userPassword)";
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":userName", $userName);
            $stmt->bindValue(":userCity", $userCity);
            $stmt->bindValue(":userState", $userState);
            $stmt->bindValue(":userPhoneNumber", $userPhoneNumber);
            $stmt->bindValue(":userType", $userType);
            $stmt->bindValue(":userEmail", $userEmail);
            $stmt->bindValue(":userPassword", password_hash($userPassword, PASSWORD_ARGON2I));
            $result = $stmt->execute();
            return $result;
        }

        /**
         * Receives an email and looks for it in the users table, if it finds the email returns all user data otherwise returns false.
         */
        public function find(string $emailUser) : Array | bool
        {
            $query = "SELECT * FROM tb_clientes WHERE cli_email=:emailUser";
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":emailUser", $emailUser);
            $stmt->execute();
            return $stmt->fetch();
        }

        public function findSuperUser()
        {
            $query = "SELECT * FROM tb_clientes WHERE cli_tipo=:tipo";
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":tipo", 'super');
            $result =  $stmt->execute();
            return $stmt->fetch();
        }

        /**
        public function update(string $nameCol, string $value, int $id, string $email) : Array | bool
        {
            $query = "UPDATE tb_clientes SET $nameCol=:value WHERE cli_codigo=:id";
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":value", $value);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            
            if($stmt) {
                return $this->find($email);
            } else {
                return false;
            }
            
        }*/

        /**
         * Receives some information and updates in the database.  Returning the new changes if it worked or false if the query went wrong.
         */
        private function update(string $query,  string $value, int $id, string $email)
        {
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":valuee", $value);
            $stmt->bindValue(":id", $id);
            $stmt->execute();

            if($stmt) {
                return $this->find($email);
            } else {
                return false;
            }
        }

         /**
         * Receives a new name and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updateName(string $userName, int $id, string $email) : Array | bool
        {
            $query = "UPDATE tb_clientes SET cli_nome=:valuee WHERE cli_codigo=:id";
            return $this->update($query, $userName, $id, $email);
        }

         /**
         * Receives a new city and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updateCity(string $userCity, int $id, string $email) : Array | bool
        {
            $query = "UPDATE tb_clientes SET cli_cidade=:valuee WHERE cli_codigo=:id";
            return $this->update($query, $userCity, $id, $email);
        }

         /**
         * Receives a new state and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updateState(string $userState, int $id, string $email) : Array | bool
        {
            $query = "UPDATE tb_clientes SET cli_estado=:valuee WHERE cli_codigo=:id";
            return $this->update($query, $userState, $id, $email);
        }

         /**
         * Receives a new phone number and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updatePhoneNumber(string $userPhoneNumber, int $id, string $email) : Array | bool
        {
            $query = "UPDATE tb_clientes SET cli_telefone=:valuee WHERE cli_codigo=:id";
            return $this->update($query, $userPhoneNumber, $id, $email);
        }

         /**
         * Receives a new type and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updateType(string $userType, int $id, string $email) : Array | bool
        {
            $query = "UPDATE tb_clientes SET cli_tipo=:valuee WHERE cli_codigo=:id";
            return $this->update($query, $userType, $id, $email);
        }

         /**
         * Receives a new email and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updateEmail(string $userEmail, int $id, string $email) : Array | bool
        {
            $query = "UPDATE tb_clientes SET cli_email=:valuee WHERE cli_codigo=:id";
            return $this->update($query, $userEmail, $id, $email);
        }

         /**
         * Receives a new password and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updatePassword(string $userPassword, int $id, string $email) : Array | bool
        {
            $query = "UPDATE tb_clientes SET cli_senha=:valuee WHERE cli_codigo=:id";
            return $this->update($query, $userPassword, $id, $email);
        }

        /**
         * Receives the user id and deletes the column in the database corresponding to it.
         */
        public function delete(int $idUser) : bool
        {
            $query = "DELETE FROM tb_clientes WHERE cli_codigo=:idUser";   
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":idUser", $idUser);
            $result = $stmt->execute();
            return $result;
        }
    }
?>