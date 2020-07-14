<?php
    session_start();
    include("../../../../database/Connection.php");

    class UserListController {

        public function usersList() {
            $data = new Connection();
            $stmt = $data->fetchAll("SELECT * FROM Users WHERE admin!=? ORDER BY id DESC ", [1]);
            return $stmt;
        }
    }

?>