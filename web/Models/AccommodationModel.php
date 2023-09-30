<?php 

namespace web\Models;

class AccommodationModel {

    private $connection;

    public function __construct($connection)
    {
        $this->setConnection($connection);
    }

    public function setConnection($connection)
    {
        $this->connection = $connection;
    }

    public function save(string $accommodationName, string $hospedagemNeighborhood, string $hospedagemRoad, int $hospedagemNumber,  string $valor, string $email, string $telefone, string $hospedagemClassification, string $hospedagemAcessibilidade, string $hospedagemDescricao, int $cityId ) : bool {
        $query = "INSERT INTO tb_hospedagens(hos_nome, hos_bairro, hos_rua, hos_numero, hos_valor, hos_email, hos_telefone, hos_classificacao, hos_acessibilidade, hos_descricao, hos_cid_codigo)"  . "values(:hospedagemName, :hospedagemNeighborhood, :hospedagemRoad, :hospedagemNumber, :hosValor, :hosEmail,:hosTelefone,  :hosClassificacao, :hosAcessibilidade, :hosDescricao, :cityId)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":hospedagemName", $accommodationName);
        $stmt->bindValue(":hospedagemNeighborhood", $hospedagemNeighborhood);
        $stmt->bindValue(":hospedagemRoad", $hospedagemRoad);
        $stmt->bindValue(":hospedagemNumber", $hospedagemNumber);
        $stmt->bindValue(":hosValor", $valor);
        $stmt->bindValue(":hosEmail", $email);
        $stmt->bindValue(":hosTelefone", $telefone);
        $stmt->bindValue(":hosClassificacao", $hospedagemClassification);
        $stmt->bindValue(":hosAcessibilidade", $hospedagemAcessibilidade);
        $stmt->bindValue(":hosDescricao", $hospedagemDescricao);
        $stmt->bindValue(":cityId", $cityId);
        $result = $stmt->execute();
        return $result;
    }

    public function find(string $hospedagemName) : Array | bool {
        $query = "SELECT * FROM tb_hospedagens WHERE hos_nome=:hospedagemName";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":hospedagemName", $hospedagemName);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function AllAccommodations() : array {
        $query = "SELECT * FROM tb_hospedagens ORDER BY hos_nome";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    private function update(string $query, $value, int $id, string $name) {
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":valuee", $value);
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        if($stmt) {
            return $this->find($name);
        } else {
            return false;
        }
    }

    public function updateName(string $hospedagemtName, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_hospedagens SET hos_nome=:valuee WHERE hos_codigo=:id";
        return $this->update($query, $hospedagemtName, $id, $name);
    }

    public function updateNeighborhood(string $hospedagemNeighborhood, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_hospedagens SET hos_bairro=:valuee WHERE hos_codigo=:id";
        return $this->update($query, $hospedagemNeighborhood, $id, $name);
    }
    
    public function updateRoad(string $hospedagemRoad, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_hospedagens SET hos_rua=:valuee WHERE hos_codigo=:id";
        return $this->update($query, $hospedagemRoad, $id, $name);
    }

    public function updateNumber(int $hospedagemNumber, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_hospedagens SET hos_numero=:valuee WHERE hos_codigo=:id";
        return $this->update($query, $hospedagemNumber, $id, $name);
    }

    public function updatePhoneNumber(string $newPhoneNumber, int $id, string $name) : Array | bool {
            $query = "UPDATE tb_hospedagens SET hos_telefone=:valuee WHERE hos_codigo=:id";
            return $this->update($query, $newPhoneNumber, $id, $name);
    }
    
    public function updateEmail(string $newEmail, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_hospedagens SET hos_email=:valuee WHERE hos_codigo=:id";
        return $this->update($query, $newEmail, $id, $name);
    }

    public function updateCost(string $newCost, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_hospedagens SET hos_valor=:valuee WHERE hos_codigo=:id";
        return $this->update($query, $newCost, $id, $name);
    }
    public function updateClassification(string $newClassificationHospedagem, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_hospedagens SET hos_classificacao=:valuee WHERE hos_codigo=:id";
        return $this->update($query, $newClassificationHospedagem, $id, $name);
    }

    public function updateAccessibility(string $newAccessibilityHospedagem, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_hospedagens SET hos_acessibilidade=:valuee WHERE hos_codigo=:id";
        return $this->update($query, $newAccessibilityHospedagem, $id, $name);
    }

    public function updateDrescripition(string $newDrescripitionHospedagem, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_hospedagens SET hos_descricao=:valuee WHERE hos_codigo=:id";
        return $this->update($query, $newDrescripitionHospedagem, $id, $name);
    }

    public function updateCity($newCityhospedagem, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_hospedagens SET hos_cid_codigo=:valuee WHERE hos_codigo=:id";
        return $this->update($query, $newCityhospedagem, $id, $name);
    }


    public function delete(string $hospedagemId) : bool {
        $query = "DELETE FROM tb_hospedagens WHERE hos_codigo=:hospedagemId";   
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":hospedagemId", $hospedagemId);
        $result = $stmt->execute();
        return $result;
    }
}

?>