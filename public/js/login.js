
$("#login").submit(function(e){
    e.preventDefault();

    if($('#user').val() =="" || $('#pass').val() =="")
	{
		swal({
			text: "Campos Vacíos. \nAsegurece de llenar todos los campos",
			icon: "warning",
			});          
	}else{
		autenticar();
    }

});     


function autenticar()
{
	var datos={
		"action" : "autenticar",
		"txtUser" : $("#user").val(),
		"txtPass" : $("#pass").val(),
	};

	var login = window.location.href+"login/iniciar";
	var inicio = window.location.href+"inicio";

	$.ajax({ url: login,
		data: datos,
		type: 'post',
		success: function(data)
		{
				
			data=JSON.parse(data)
            //console.log("responsive serve"+data);

            if(data == true){
				//alert(window.location.href);
				window.location.replace(inicio);
			}else{
				swal({
					text: "El nombre del usuario y/o contraseña es incorrecto",
					icon: "warning",
				});
			}
		}
	});
}
