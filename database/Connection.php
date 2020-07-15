<?php 
    class Connection {
        private $host;
        private $user;
        private $password;
        private $database;
        private $connection;

        public function __construct() {
            $this->host = "localhost";
            $this->user = "student";
            $this->password = "123456";
            $this->database = "pcsltv";
            
            $this->connection = new PDO("mysql: host=$this->host; dbname=$this->database", $this->user, $this->password);
        }

        public function query ($prepare, $execute) {
            $data = $this->connection->prepare($prepare);
            $data->execute($execute);
            return $data;
        }
        public function rowCount($prepare, $execute=[]) {
            $data = $this->query($prepare, $execute)->rowCount();
            return $data;
        }
        public function fetchAll($prepare, $execute) {
            $data = $this->connection->prepare($prepare);
            $data->execute($execute);
            $stmt = $data->fetchAll();
            return $stmt;
        }
    }

?>