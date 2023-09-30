<?php 

namespace web\Models;

class CityModel {

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
     * Receives data and saves it to the database city table, returning true or false whether the query was successful or not.
     */
    public function save(string $cityName, string $cityPopulation, string $cityWeather, string $cityDescription) : bool 
    {
        $query = "INSERT INTO tb_cidades(cid_nome, cid_descricao, cid_populacao, cid_clima)"  . "values(:cityName,:cityDescription,:cityPopulation,:cityWeather)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":cityName", $cityName);
        $stmt->bindValue(":cityDescription", $cityDescription);
        $stmt->bindValue(":cityPopulation", $cityPopulation);
        $stmt->bindValue(":cityWeather", $cityWeather);
        $result = $stmt->execute();
        return $result;
    }

    /**
     * Receives a name and searches for it in the city table, if it finds the name returns all the data from the corresponding column otherwise returns false.
     */
    public function find(string $cityName) : Array | bool
    {
        $query = "SELECT * FROM tb_cidades WHERE cid_nome=:cityName";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":cityName", $cityName);
        $stmt->execute();
        return $stmt->fetch();
    }

     /**
     * Receives a name and searches for it in the city table, if it finds the name returns all the data from the corresponding column otherwise returns false.
     */
    public function findId($cityid) : Array | bool
    {
        $query = "SELECT cid_nome FROM tb_cidades WHERE cid_codigo=:cityid";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":cityid", $cityid);
        $stmt->execute();
        return $stmt->fetch();
    }


    /**
     *Returns all the cities that are in the database
     */
    public function AllCities() : array
    {
        $query = "SELECT * FROM tb_cidades ORDER BY cid_nome";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Receives some information and updates in the database.  Returning the new changes if it worked or false if the query went wrong.
     */
    private function update(string $query,  string $value, int $id, string $name)
    {
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

    /**
     * Receives a new name and updates the database.  Returning the new change if it worked or false if the query went wrong.
     */
    public function updateName(string $cityName, int $id, string $name) : Array | bool
    {
        $query = "UPDATE tb_cidades SET cid_nome=:valuee WHERE cid_codigo=:id";
        return $this->update($query, $cityName, $id, $name);
    }

    /**
     * Receives a new description and updates the database.  Returning the new change if it worked or false if the query went wrong.
     */
    public function updateDescription(string $cityDescription, int $id, string $name) : Array | bool
    {
        $query = "UPDATE tb_cidades SET cid_descricao=:valuee WHERE cid_codigo=:id";
        return $this->update($query, $cityDescription, $id, $name);
    }

    /**
     * Receives a new population and updates the database.  Returning the new change if it worked or false if the query went wrong.
     */
    public function updatePopulation(string $cityPopulation, int $id, string $name) : Array | bool
    {
        $query = "UPDATE tb_cidades SET cid_populacao=:valuee WHERE cid_codigo=:id";
        return $this->update($query, $cityPopulation, $id, $name);
    }

    /**
     * Receives a new weather and updates the database.  Returning the new change if it worked or false if the query went wrong.
     */
    public function updateWeather(string $cityWeather, int $id, string $name) : Array | bool
    {
        $query = "UPDATE tb_cidades SET cid_clima=:valuee WHERE cid_codigo=:id";
        return $this->update($query, $cityWeather, $id, $name);
    }

    /**
     * Receives the city id and deletes the column in the database corresponding to it.
     */
    public function delete(string $cityId) : bool
    {
        $query = "DELETE FROM tb_cidades WHERE cid_codigo=:cityId";   
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":cityId", $cityId);
        $result = $stmt->execute();
        return $result;
    }
}