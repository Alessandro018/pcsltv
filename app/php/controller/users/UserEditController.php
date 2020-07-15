<?php
    session_start();
    include("../../../../database/Connection.php");
    if(!isset($_SESSION["userId"])){
        header("location: ../../../../index.php");
        return;
    }
    
    $id = addslashes($_POST["id"]);
    $password = addslashes($_POST["password"]);
    $newpassword1 = addslashes($_POST["newpassword1"]);
    $newpassword2 = addslashes($_POST["newpassword2"]);
    
    if($newpassword1!=$newpassword2){
        echo "senhas não correspondem";
        return;
    }
    $con = new Connection();
    //procura no banco de dados o usuário com o id recebido do formulário
    $stmt = $con->fetchAll("SELECT * FROM Users WHERE sha1(id)=?", [$id]);
    foreach($stmt as $user){
        //verifica se a senha que recebeu o hash é a mesma que está em texto plano 
        if(password_verify($password, $user["password"])){
            $con->query("UPDATE Users SET password=? WHERE sha1(id)=?", [password_hash($password, PASSWORD_DEFAULT), $id]);
            $_SESSION["msg"] = "senha atualizada com sucesso";
            return;
        }
        else{
            //retorna a mensagem para functions.js
            echo "senha atual incorreta";
            return;
        }
    }
?>