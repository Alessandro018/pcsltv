<?php 
    class Connection {
        private $host;
        private $user;
        private $password;
        private $database;
        private $connection;

        public function __construct() {
            $this->host = "localhost";
            $this->user = "";
            $this->password = "";
            $this->database = "pcsltv";
            
            $this->connection = new PDO("mysql: host=$this->host; dbname=$this->database", $this->user, $this->password);
        }

        public function query ($prepare, $execute) {
            $data = $this->connection->prepare($prepare);
            $data->execute($execute);
            return $data;
        }
    }

?>