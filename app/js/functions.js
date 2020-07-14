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
});