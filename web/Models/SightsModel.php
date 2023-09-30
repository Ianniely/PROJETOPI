<?php 

namespace web\Models;

class SightsModel
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
        public function save(string $pontoNome, string $pontoDescricao, string $pontoClassificacao, string $pontoAcessibilidade, string $pontoBairro, string $pontoRua, $cityId) : bool 
        {
            $query = "INSERT INTO tb_pontos_turisticos(pot_nome, pot_descricao, pot_classificacao, pot_acessibilidade, pot_bairro, pot_rua, pot_cid_codigo)"  . "values(:pontoNome,:pontoDescricao,:pontoClassificacao,:pontoAcessibilidade,:pontoBairro,:pontoRua,:cityId)";
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":pontoNome", $pontoNome);
            $stmt->bindValue(":pontoDescricao", $pontoDescricao);
            $stmt->bindValue(":pontoClassificacao", $pontoClassificacao);
            $stmt->bindValue(":pontoAcessibilidade", $pontoAcessibilidade);
            $stmt->bindValue(":pontoBairro", $pontoBairro);
            $stmt->bindValue(":pontoRua", $pontoRua);
            $stmt->bindValue(":cityId", $cityId);
            $result = $stmt->execute();
            return $result;
        }

        /**
         * Receives an email and looks for it in the users table, if it finds the email returns all user data otherwise returns false.
         */
        public function find(string $nomePonto) : Array | bool
        {
            $query = "SELECT * FROM tb_pontos_turisticos WHERE pot_nome=:nomePonto";
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":nomePonto", $nomePonto);
            $stmt->execute();
            return $stmt->fetch();
        }

        /**
        *Returns all the cities that are in the database
        */
        public function AllSights() : array
        {
            $query = "SELECT * FROM tb_pontos_turisticos ORDER BY pot_nome";
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        /**
         * Receives some information and updates in the database.  Returning the new changes if it worked or false if the query went wrong.
         */
        private function update(string $query,  string $value, int $id, string $nome)
        {
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":valuee", $value);
            $stmt->bindValue(":id", $id);
            $stmt->execute();

            if($stmt) {
                return $this->find($nome);
            } else {
                return false;
            }
        }

         /**
         * Receives a new name and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updateName(string $pontoNome, int $id, string $nome) : Array | bool
        {
            $query = "UPDATE tb_pontos_turisticos SET pot_nome=:valuee WHERE pot_codigo=:id";
            return $this->update($query, $pontoNome, $id, $nome);
        }

         /**
         * Receives a new city and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updateNeighborhood(string $pontoBairro, int $id, string $nome) : Array | bool
        {
            $query = "UPDATE tb_pontos_turisticos SET pot_bairro=:valuee WHERE pot_codigo=:id";
            return $this->update($query, $pontoBairro, $id, $nome);
        }

         /**
         * Receives a new state and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updateStret(string $pontoRua, int $id, string $nome) : Array | bool
        {
            $query = "UPDATE tb_pontos_turisticos SET pot_rua=:valuee WHERE pot_codigo=:id";
            return $this->update($query, $pontoRua, $id, $nome);
        }

          /**
         * Receives a new state and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updateCity(string $pontoCidade, int $id, string $nome) : Array | bool
        {
            $query = "UPDATE tb_pontos_turisticos SET pot_cid_codigo=:valuee WHERE pot_codigo=:id";
            return $this->update($query, $pontoCidade, $id, $nome);
        }

         /**
         * Receives a new phone number and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updateDrescripition(string $pontoDescricao, int $id, string $nome) : Array | bool
        {
            $query = "UPDATE tb_pontos_turisticos SET pot_descricao=:valuee WHERE pot_codigo=:id";
            return $this->update($query, $pontoDescricao, $id, $nome);
        }

         /**
         * Receives a new type and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updateClassification(string $pontoClassificacao, int $id, string $nome) : Array | bool
        {
            $query = "UPDATE tb_pontos_turisticos SET pot_classificacao=:valuee WHERE pot_codigo=:id";
            return $this->update($query, $pontoClassificacao, $id, $nome);
        }

         /**
         * Receives a new email and updates the database.  Returning the new change if it worked or false if the query went wrong.
         */
        public function updateAccessibility(string $pontoAcessibilidade, int $id, string $nome) : Array | bool
        {
            $query = "UPDATE tb_pontos_turisticos SET pot_acessibilidade=:valuee WHERE pot_codigo=:id";
            return $this->update($query, $pontoAcessibilidade, $id, $nome);
        }

        

        /**
         * Receives the user id and deletes the column in the database corresponding to it.
         */
        public function delete(int $idPonto) : bool
        {
            $query = "DELETE FROM tb_pontos_turisticos WHERE pot_codigo=:idPonto";   
            $stmt = $this->connection->prepare($query);
            $stmt->bindValue(":idPonto", $idPonto);
            $result = $stmt->execute();
            return $result;
        }
    }