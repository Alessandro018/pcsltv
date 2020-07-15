<?php
    include("../../../../database/Connection.php");
    class User {
        public $id;
        public $name;
        public $login;
        public $cpf;
        public $gender;
        public $date_of_birth;
        public $telephone;
        public $password;

        public function __construct ($name, $login, $cpf, $gender, $date_of_birth, $telephone, $password) {
            $this->name = $name;
            $this->login = $login;
            $this->cpf = $cpf;
            $this->gender = $gender;
            $this->date_of_birth = $date_of_birth;
            $this->telephone = $telephone;
            $this->password = $password;
        }
        //Salva o usuário recebido pelo parâmetro no banco de dados
        public function save(User $user) {
            $con = new Connection();
            $con->query("INSERT INTO Users SET name=?, login=?, cpf=?, gender=?, date_of_birth=?, telephone=?, password=?",
             [$user->name, $user->login, $user->cpf, $user->gender, $user->date_of_birth, $user->telephone, $user->password]);
        }
        
        //Verifica se já existe o valor "X" em tal coluna no banco de dados (está sendo usada para verificar o login e cpf)
        public function exists($column, $param) {
            $con = new Connection();
            $stmt = $con->rowCount("SELECT * FROM Users WHERE $column=?", [$param]);
            return $stmt;
        }
    }
?>