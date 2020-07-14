<?php
    session_start();
    include("../../../../database/Connection.php");
    if(!isset($_SESSION["userId"])){
        header("location: ../../../../index.php");
        return;
    }
    $id = addslashes($_GET["user"]);
    $con = new Connection();
    $con->query("DELETE FROM Users WHERE sha1(id)=?", [$id]);
    $_SESSION["msg"]="Cliente excluído com sucesso";
    header("location: ../../views/users/user_list.php");
?>