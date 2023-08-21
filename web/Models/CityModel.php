<?php 

namespace web\Models;

class City {

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
    public function save(string $cityName, string $cityDescription, int $cityPopulation, string $cityWeather) : bool 
    {
        $query = "INSERT INTO tb_cidade(cid_nome, cid_descricao, cid_populacao, cid_clima)"  . "values(:cityName,:cityDescription,:cityPopulation,:cityWeather)";
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
        $query = "SELECT * FROM tb_cidade WHERE cid_name=:cityName";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(":cityName", $cityName);
        $stmt->execute();
        return $stmt->fetch();
    }
}