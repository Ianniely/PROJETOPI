<?php 

    class TravelItinerary {

        private $connection;

        public function __construct(SQLite3 $connection) {
            $this->setConnection($connection);
        }

        public function setConnection($connection) {
            $this->connection = $connection;
        }

        //Esse arquivo foi criado com o intuito de montar um roteiro de viajem de acordo com as preferências do usuário, mas a lógica para montar não está completo pois o projeto ainda precisar de mais informações e funcionalidades
        public function save($city, $date, $ActivityPreferences) : SQLite3Result | bool {
            $query = "INSERT INTO tb_travelItinerary('tra_city', 'tra_date', 'tra_activityPreferences')" . " values(:city, :date, :schedule)";
            $sttm = $this->connection->prepare($query);
            $sttm->bindValue(":city", $city);
            $sttm->bindValue(":date", $date);
            $sttm->bindValue(":ActivityPreferences", $ActivityPreferences);
            $result = $sttm->execute();
            return $result;
        }
    }

?>