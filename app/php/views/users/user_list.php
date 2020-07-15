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
	<title>Lista de clientes</title>
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
			<div class="list-users">
				<div class="row">
					<label>Lista de clientes</label>
					<a href="user_register.php">Cadastrar</a>
				</div>
				<div class="row">
					<?php if(isset($_SESSION['msg'])): ?>
						<span class="blue"><?=$_SESSION['msg'];?></span>
					<?php endif; unset($_SESSION['msg']);?>
				</div>
				<table>
					<?php foreach(UserListController::usersList() as $user) : ?>
						<tr>
							<td><?= $user["name"];?></td>
							<td><a href="">Ver</a></td>
							<td><a href="user_edit.php?user=<?=sha1($user['id']);?>">Editar</a></td>
							<td><a href="../../controller/users/UserDelController.php?user=<?=sha1($user['id']);?>">Excluir</a></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
	<link rel="stylesheet" href="../../../css/style.css"/>
</body>
</html>