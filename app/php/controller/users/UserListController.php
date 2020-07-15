<?php
    session_start();
    include("../../../../database/Connection.php");

    class UserListController {

        public function usersList() {
            $data = new Connection();
            //busca todos os usuários que não são admin, colocando os mais recentes em primeiro
            $stmt = $data->fetchAll("SELECT * FROM Users WHERE id!=? ORDER BY id DESC ", [$_SESSION["userId"]]);
            return $stmt;
        }
    }

?>