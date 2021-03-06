$(document).ready(function(){
    //envio do formulário de cadastro
    $("#user-register").submit(function(e){
        e.preventDefault();
        $("input").removeClass("red");
        var dados = $(this).serialize();
		$.ajax({
			url: "../../controller/users/AddUserController.php",
            type: "POST",
			data: dados,
			success: function(response){
                switch (response) {
                    case "cpf":
					    $("input[name=cpf]").addClass("red");
                        alert("CPF já cadastrado");
                        break;
                    case "login":
					    $("input[name=login]").addClass("red");
                        alert("Login já cadastrado");
                        break;
                    default:
                        window.location.href="../../views/users/user_list.php";
                        break;
                }
			}
		});
    });
    //envio do formulário de login
    $("#login").submit(function(e){
        e.preventDefault();
        $("input").removeClass("red");
        var dados = $(this).serialize();
		$.ajax({
			url: "app/php/controller/users/LoginController.php",
            type: "POST",
			data: dados,
			success: function(response){
                switch (response) {
                    case "login não existe":
					    $("input[name=login]").addClass("red");
                        alert("Login não existe");
                        break;
                    case "senha incorreta":
					    $("input[name=password]").addClass("red");
                        alert("Senha incorreta");
                        break;
                    default:
                        window.location.href="app/php/views/dashboard.php";
                        break;
                }
			}
		});
    });
    $("#user-edit").submit(function(e){
        e.preventDefault();
        $("input").removeClass("red");
        var dados = $(this).serialize();
		$.ajax({
			url: "../../controller/users/UserEditController.php",
            type: "POST",
			data: dados,
			success: function(response){
                switch (response) {
                    case "senha atual incorreta":
					    $("input[name=password]").addClass("red");
                        alert(response);
                        break;
                    case "senhas não correspondem":
					    $("input[name=newpassword1]").addClass("red");
					    $("input[name=newpassword2]").addClass("red");
                        alert(response);
                        break;
                    default:
                        window.location.href="user_list.php";
                        break;
                }
			}
		});
    });
});