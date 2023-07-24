<?php 

    class Events {
        
        private $connection;

        public function __construct( SQLite3 $connection) {
            $this->setConnection($connection);
        }

        public function setConnection($connection) {
            $this->connection = $connection;
        }

        //Função criada para pegar os últimos três ids da table tb_events. Para que assim possa sempre mostrar os últimos três eventos adicionado nessa tabela(Os eventos mais atualizados)
        public function findId() : Array | bool {
            $query = "SELECT eve_codigo FROM tb_events ORDER BY eve_codigo DESC LIMIT 3";
            $sttm = $this->connection->prepare($query);
            $result = $sttm->execute();
            $rows = array();
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $rows[] = $row;
            }
            return $rows;
        }
              

        public function find($id) : Array | bool {
            $query = "SELECT * FROM tb_events WHERE eve_codigo=:id";
            $sttm = $this->connection->prepare($query);
            $sttm->bindValue(":id", $id);
            $result = $sttm->execute();
            return $result->fetchArray();
        }

        public function save($name, $date, $local, $description, $price, $schedule) : SQLite3Result | bool {
            $query = "INSERT INTO tb_events('eve_nome', 'eve_data', 'eve_local', 'eve_descricao', 'eve_preco', 'eve_programacao')" . " values(:name, :date, :local, :description, :price, :schedule)";
            $sttm = $this->connection->prepare($query);
            $sttm->bindValue(":name", $name);
            $sttm->bindValue(":date", $date);
            $sttm->bindValue(":local", $local);
            $sttm->bindValue(":description", $description);
            $sttm->bindValue(":price", $price);
            $sttm->bindValue(":schedule", $schedule);
            $result = $sttm->execute();
            return $result;
        }
    }

?>