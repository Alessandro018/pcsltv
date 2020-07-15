<?php 
session_start();
if(!isset($_SESSION["userId"])){
	header('location: ../../../../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de cliente</title>
</head>
<body>
	<div class="container">
		<div class="sidenav">
			<a href="user_list.php">Clientes</a>
			<a href="">Produtos</a>
			<a href="">Fornecedores</a>
		</div>
		<div class="status">
			<label for="">Welcome <?=$_SESSION["userLogin"];?>! | <a href="../../controller/users/logout.php">Sair</a></label>
        </div>
        <div class="content">
            <div class="main">
                <form action="" method="POST" id="user-register" class="cad-cli"><br/>
                    <h2>Cadastrar cliente</h2>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Nome</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="name" minlength="5" placeholder="max 40" maxlength="40" required >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="cpf">CPF</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="cpf" name="cpf" minlength="11" placeholder="min 11 | max 11" maxlength="11" required >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Data de Nasc.</label>
                        </div>
                        <div class="col-75">
                            <input type="date" name="date_of_birth" required >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Sexo</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="gender" minlength="5" placeholder="max 20" maxlength="20" required >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Telefone</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="telephone" minlength="9" placeholder="max 20" maxlength="20" required >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Login</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="login" minlength="5" placeholder="min 5 | max 20" maxlength="20" required >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Senha</label>
                        </div>
                        <div class="col-75">
                            <input type="password" name="password" minlength="6" placeholder="min 6 | max 20" maxlength="20" required >
                        </div>
                    </div>
                    <button>Salvar</button>
                </form>
            </div>
        </div>
	</div>
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
    <script src="../../../js/jquery-3.5.1.min.js"></script>    
    <script src="../../../js/functions.js"></script>    
</body>
</html>