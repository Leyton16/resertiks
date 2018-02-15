// JavaScript Document
function ini()
{
	$("#btnAgregar").on("click", agregarUsuario);
}

function limpiarFormulario()
{
	$("#msm").fadeOut("slow");
	$("#cod_ci").val("");
	$("#names").val("");
	$("#lastnames").val("");
	$("#num_cellphone").val("");
	$("#email").val("");
	$("#pass").val("");
	$("#txtFoto").val("");
}

function onSuccess(data, status)
{
	data = $.trim(data);
	$("#msm").text(data);
	
	limpiarFormulario();
}

function onError(data, status)
{
	// handle an error
	$("#msm").text(data);
}

function agregarUsuario()
{
	var formData = $("#formu").serialize();
	$("#msm").fadeIn("slow");
	
	$.ajax({
		type: "POST",
		url: "/registrar.php",
		cache: false,
		data: formData,
		success: onSuccess,
		error: onError
	});
	
	return false;
}