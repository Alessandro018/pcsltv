<?php
session_start();
if(isset($_SESSION["userId"])){
	header('location: app/php/views/users/user_list.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<div class="login">
		<form  action="" id="login">
			<h2>Acessar sua conta</h2>
			<label>Login</label>
			<input type="text" name="login" minlength="5" placeholder="min 5 | max 20" maxlength="20" required>
			<label>Senha</label>
			<input type="password" name="password" minlength="6" placeholder="min 6 | max 20" maxlength="20" required>
			<button>Entrar</button>
		</form>
	</div>
	<link rel="stylesheet" type="text/css" href="app/css/style.css">
	<script src="app/js/jquery-3.5.1.min.js"></script>    
    <script src="app/js/functions.js"></script>    
</body>
</html>