<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<div class="container">
		<div class="sidenav">
			<a href="">Clientes</a>
			<a href="">Produtos</a>
			<a href="">Fornecedores</a>
		</div>
		<div class="status">
			<label for="">Welcome Alessandro!</label>
        </div>
        <div class="content">
            <div class="main">
                <form action="" class="cad-cli"><br/>
                    <h2>Cadastrar cliente</h2>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Nome</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="nome" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="cpf">CPF</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="cpf" name="cpf" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="data_nasc">Data de Nasc.</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="data_nasc" name="data_nasc" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Sexo</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="sexo" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Telefone</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="telefone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Login</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="login" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Senha</label>
                        </div>
                        <div class="col-75">
                            <input type="password" name="senha" required>
                        </div>
                    </div>
                    <button>Salvar</button>
                </form>
            </div>
        </div>
	</div>
	<link rel="stylesheet" href="../../css/style.css"/>
</body>
</html>