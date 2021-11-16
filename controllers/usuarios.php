<?php

class Usuarios extends Controlador
{
	
	function __construct()
	{
		parent::__construct();
		session_start();
	}
	
	public function renderizar($vista = "usuarios")
	{
		$this->mostrarUsuarios();
		require_once ("views/".$vista.".php");
	}

	function mostrarUsuarios()
	{
		//Cargar el Modelo
		$modelo = $this->cargarModelo("usuario_model");
		//Ejecutar el metodo listarTodos del modelo
		//guardar la tabla en una propiedad
		$this->tabla = $modelo->listarUsuarios();
	}

	function agregar()
	{
		$modelo = $this->cargarModelo("usuario_model");

		$modelo->usuario = $_POST["txtUsuario"];
		$modelo->clave = $_POST["txtClave"];
		$modelo->id_rol = $_POST["txtTipo"];
		$modelo->nombre = $_POST["txtNombre"];
		$modelo->apellidos = $_POST["txtApellido"];
		$modelo->correo = $_POST["txtCorreo"];
		
		$modelo->agregar();

		header("refresh:0;" . constant("URL") . "usuarios");
	}

	function editar()
	{
		if (isset($_GET["v"])) {
			//Cargar el modelo
			$modelo = $this->cargarModelo("usuario_model");
			//Asignar el ID enviado a la propiedad del modelo
			$modelo->id = base64_decode($_GET["v"]);
			//Ejecutar el metodo de busqueda del MODELO
			$this->fila = $modelo->buscarByIdUsuario();
		}
		//Enviar a la VISTA
		require_once ("views/usuarios_editar.php");	
	}

	function actualizar()
	{
		//Recibir los datos enviados por el formulario
		//con el metodo POST y luego procede a ACTUALIZAR en la BD

		//Cargar el modelo
		$modelo = $this->cargarModelo("usuario_model");

		$modelo->id = $_POST["txtIDUsuario"];
		$modelo->usuario = $_POST["txtUsuario"];
		$modelo->clave = $_POST["txtClave"];
		$modelo->id_rol = $_POST["txtTipo"];
		$modelo->nombre = $_POST["txtNombre"];
		$modelo->apellidos = $_POST["txtApellido"];
		$modelo->correo = $_POST["txtCorreo"];
		
		//Ejecutar el metodo Actualizar del modelo
		$modelo->actualizar();

		//Redireccionar
		header("refresh:0;" . constant("URL") . "usuarios");
	}

	function eliminar()
	{
		if (isset($_GET["v"])) 
		{
			//Cargar el modelo
			$modelo = $this->cargarModelo("usuario_model");
			//Asignar el ID enviado a la propiedad del modelo
			$modelo->id = base64_decode($_GET["v"]);
			//Ejecutar la eliminacion
			$modelo->eliminar();
		}
		//Redireccionar
		header("refresh:0;" . constant("URL") . "usuarios");
	}

}

?>