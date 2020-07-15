<?php 
include("../../controller/users/UserListController.php");
if(!isset($_SESSION["userId"])){
	header('location: ../../../../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atualizar senha</title>
</head>
<body>
	<div class="container">
		<div class="sidenav">
			<a href="user_list.php">Clientes</a>
			<a href="">Produtos</a>
			<a href="">Fornecedores</a>
		</div>
		<div class="status">
			<label for="">Olá <?=$_SESSION["userLogin"];?>! | <a href="../../controller/users/logout.php">Sair</a></label>
		</div>
		<div class="content">
            <div class="main">
                <form action="" id="user-edit" class="update-pw"><br/>
                    <h2>Atualizar senha</h2>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Senha atual</label>
                        </div>
                        <div class="col-75">
                            <input type="password" name="password" minlength="6" placeholder="min 6 | max 20" maxlength="20" required >
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Nova senha</label>
                        </div>
                        <div class="col-75">
                            <input type="password" name="newpassword1" minlength="6" placeholder="min 6 | max 20" maxlength="20" required >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Confirmar nova senha</label>
                        </div>
                        <div class="col-75">
                            <input type="password" name="newpassword2" minlength="6" placeholder="min 6 | max 20" maxlength="20" required >
                        </div>
                        <input type="hidden" name="id" value="<?=$_GET['user'];?>">
                    </div>
                    <button>Salvar</button>
                </form>
            </div>
		</div>
	</div>
    <link rel="stylesheet" href="../../../css/style.css"/>
    <script src="../../../js/jquery-3.5.1.min.js"></script>
    <script src="../../../js/functions.js"></script>
</body>
</html>