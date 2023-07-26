<?php 

    class TouristAttraction {

        private $connection;

        public function __construct(SQLite3 $connection) {
            $this->setConnection($connection);
        }

        public function setConnection($connection) {
            $this->connection = $connection;
        }

        public function save($name, $openingHours, $local, $description, $price, $visitorRatings) : SQLite3Result | bool {
            $query = "INSERT INTO tb_touristAttraction('tou_codigo', 'tou_openingHours', 'tou_local', 'tou_descricao', 'tou_preco', 'tou_visitorRatings')" . " values(:name, :openingHours, :local, :description, :price, :visitorRatings)";
            $sttm = $this->connection->prepare($query);
            $sttm->bindValue(":name", $name);
            $sttm->bindValue(":openingHours", $openingHours);
            $sttm->bindValue(":local", $local);
            $sttm->bindValue(":description", $description);
            $sttm->bindValue(":price", $price);
            $sttm->bindValue(":visitorRatings", $visitorRatings);
            $result = $sttm->execute();
            return $result;
        }
    }

?>