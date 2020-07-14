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
			<div class="list-users">
				<div class="row">
					<label>Lista de clientes</label>
					<a href="user_register.php">Cadastrar</a>
				</div>
				<div class="row">
					<?php if(isset($_SESSION['user_created'])): ?>
						<span class="blue">Cliente cadastrado com sucesso</span>
					<?php endif; unset($_SESSION['user_created']);?>
				</div>
				<table>
					<?php foreach(UserListController::usersList() as $user) : ?>
						<tr>
							<td><?= $user["name"];?></td>
							<td><a href="">Ver</a></td>
							<td><a href="">Editar</a></td>
							<td><a href="">Excluir</a></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
	<link rel="stylesheet" href="../../../css/style.css"/>
</body>
</html>