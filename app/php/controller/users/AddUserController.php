<?php
    session_start();
    include("../../model/User.php");
    if(!isset($_SESSION["userId"])){
        header("location: ../../../../index.php");
    }

    $name = addslashes($_POST["name"]);
    $login = addslashes($_POST["login"]);
    $cpf = addslashes($_POST["cpf"]);
    $gender = addslashes($_POST["gender"]);
    $date_of_birth = addslashes($_POST["date_of_birth"]);
    $telephone = addslashes($_POST["telephone"]);
    $password = password_hash(addslashes($_POST["password"]), PASSWORD_DEFAULT);

    //verifica se o cpf já existe no banco de dados
    $query = User::exists("cpf", $cpf);
    if($query>0){
        echo "cpf";
        //retorna para functions.js que o cpf usado já está cadastrado no banco de dados
        return;
    }

    //verifica se o login já existe no banco de dados
    $query = User::exists("login", $login);
    if($query>0){
        echo "login";
        return;
    }
    
    $user = new User(
        $name,
        $login,
        $cpf,
        $gender,
        $date_of_birth,
        $telephone,
        $password
    );
    User::save($user);
    $_SESSION['msg']="Cliente criado com sucesso";
?>