<?php 

namespace web\Models;
class RestaurantModel {
    private $connection;

    public function __construct($connection) {
        $this->setConnection($connection);
    }

    public function setConnection($connection) {
        $this->connection = $connection;
    }

    public function save(string $restaurantName, string $restaurantNeighborhood, string $restaurantRoad, int $restaurantNumber, string $horarioAbertura, string $horarioFechamento, string $valor, string $restaurantClassification, string $tipoCulinaria, string $restaurantAcessibilidade, string $restaurantDescricao, string $cityId ) : bool {
        $query = "INSERT INTO tb_restaurantes(res_nome, res_bairro, res_rua, res_numero, res_horario_abertura, res_horario_fechamento, res_valor_medio, res_classificacao, res_tipo_culinaria, res_acessibilidade, res_descricao, res_cid_codigo)"  . "values(:restaurantName, :restaurantNeighborhood, :restaurantRoad, :restaurantNumber, :resHorarioAbertura, :resHorarioFechamento, :resValor, :resClassificacao, :resTipoCulinaria, :resAcessibilidade, :resDescricao, :cityId)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":restaurantName", $restaurantName);
        $stmt->bindValue(":restaurantNeighborhood", $restaurantNeighborhood);
        $stmt->bindValue(":restaurantRoad", $restaurantRoad);
        $stmt->bindValue(":restaurantNumber", $restaurantNumber);
        $stmt->bindValue(":resHorarioAbertura", $horarioAbertura);
        $stmt->bindValue(":resHorarioFechamento", $horarioFechamento);
        $stmt->bindValue(":resValor", $valor);
        $stmt->bindValue(":resClassificacao", $restaurantClassification);
        $stmt->bindValue(":resTipoCulinaria", $tipoCulinaria);
        $stmt->bindValue(":resAcessibilidade", $restaurantAcessibilidade);
        $stmt->bindValue(":resDescricao", $restaurantDescricao);
        $stmt->bindValue(":cityId", $cityId);
        $result = $stmt->execute();
        return $result;
    }

    public function find(string $restaurantName) : Array | bool {
        $query = "SELECT * FROM tb_restaurantes WHERE res_nome=:restaurantName";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":restaurantName", $restaurantName);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function AllRestaurants() : array {
        $query = "SELECT * FROM tb_restaurantes ORDER BY res_nome";
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

    public function updateName(string $restaurantName, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_restaurantes SET res_nome=:valuee WHERE res_codigo=:id";
        return $this->update($query, $restaurantName, $id, $name);
    }

    public function updateNeighborhood(string $restaurantNeighborhood, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_restaurantes SET res_bairro=:valuee WHERE res_codigo=:id";
        return $this->update($query, $restaurantNeighborhood, $id, $name);
    }
    
    public function updateRoad(string $restaurantRoad, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_restaurantes SET res_rua=:valuee WHERE res_codigo=:id";
        return $this->update($query, $restaurantRoad, $id, $name);
    }

    public function updateNumber(int $restaurantNumber, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_restaurantes SET res_numero=:valuee WHERE res_codigo=:id";
        return $this->update($query, $restaurantNumber, $id, $name);
    }

    public function updateOpeningHours(string $newOpeningHoursRestaurant, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_restaurantes SET res_horario_abertura=:valuee WHERE res_codigo=:id";
        return $this->update($query, $newOpeningHoursRestaurant, $id, $name);
    }

    public function updateClosingHours(string $newClosingHoursRestaurant, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_restaurantes SET res_horario_fechamento=:valuee WHERE res_codigo=:id";
        return $this->update($query, $newClosingHoursRestaurant, $id, $name);
    }

    public function updateAverageCost(string $newAverageCostRestaurant, int $id, string $name) : Array | bool {
            $query = "UPDATE tb_restaurantes SET res_valor_medio=:valuee WHERE res_codigo=:id";
            return $this->update($query, $newAverageCostRestaurant, $id, $name);
    }

    public function updateClassification(string $newClassificationRestaurant, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_restaurantes SET res_classificacao=:valuee WHERE res_codigo=:id";
        return $this->update($query, $newClassificationRestaurant, $id, $name);
    }

    public function updateCulinary(string $restaurantCulinary, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_restaurantes SET res_tipo_culinaria=:valuee WHERE res_codigo=:id";
        return $this->update($query, $restaurantCulinary, $id, $name);
    }

    public function updateAccessibility(string $newAccessibilityRestaurant, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_restaurantes SET res_acessibilidade=:valuee WHERE res_codigo=:id";
        return $this->update($query, $newAccessibilityRestaurant, $id, $name);
    }

    public function updateDrescripition(string $newDrescripitionRestaurant, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_restaurantes SET res_descricao=:valuee WHERE res_codigo=:id";
        return $this->update($query, $newDrescripitionRestaurant, $id, $name);
    }

    public function updateCity($newCityRestaurant, int $id, string $name) : Array | bool {
        $query = "UPDATE tb_restaurantes SET res_cid_codigo=:valuee WHERE res_codigo=:id";
        return $this->update($query, $newCityRestaurant, $id, $name);
    }


    public function delete(string $restaurantId) : bool {
        $query = "DELETE FROM tb_restaurantes WHERE res_codigo=:restaurantId";   
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":restaurantId", $restaurantId);
        $result = $stmt->execute();
        return $result;
    }
}

?>