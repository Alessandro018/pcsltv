<?php
session_start();
if(!isset($_SESSION["userId"])){
	header('location: ../../../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
</head>
<body>
	<div class="container">
		<div class="sidenav">
			<a href="users/user_list.php">Clientes</a>
			<a href="">Produtos</a>
			<a href="">Fornecedores</a>
		</div>
		<div class="status">
			<label for="">Olá <?=$_SESSION["userLogin"];?>! | <a href="../controller/users/logout.php">Sair</a></label>
		</div>
		<div class="content">
		</div>
	</div>
	<link rel="stylesheet" href="../../css/style.css"/>
</body>
</html>