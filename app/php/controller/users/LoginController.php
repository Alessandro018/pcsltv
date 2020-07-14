<?php
    session_start();
    include("../../../../database/Connection.php");

    $login = addslashes($_POST['login']);
    $password = addslashes($_POST['password']);

    $con = new Connection();
    $stmt = $con->query("SELECT * FROM Users WHERE login=?", [$login]);

    //Verifica se encontrou o login passado pelo usuário no banco de dados(retorna a quantidade de linhas encontrada)
    if($stmt->rowCount() > 0) {
        $user = $stmt->fetch();
        if (!password_verify($password, $user["password"]) ){
            echo "senha incorreta";
            return;
        }
        else{
            $_SESSION["userId"] = $user["id"];
            $_SESSION["userAdmin"] = $user["admin"];
            $_SESSION["userLogin"] = $user["login"];
            return;
        }
    }
    if($stmt->rowCount() < 1) {
        echo "login não existe";
        return;
    }
?>