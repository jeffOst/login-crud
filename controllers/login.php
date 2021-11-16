<?php

//INICIAR SESION

class Login extends Controlador
{
	
	function __construct()
	{
		parent::__construct();

		session_start();	
			
		if (isset($_SESSION['usuario'])) 
		{
			header("Location: ".constant('URL')."inicio");
		}

	}

	public function renderizar($vista = "login")
	{
        $this->mostrarVista($vista);
	}

	function iniciar()
	{
		
		$modelo = $this->cargarModelo("login_model");
		
		$modelo->usuario=$_POST["txtUser"];
		$modelo->clave=$_POST["txtPass"];

			
		$fila=$modelo->buscar();
		//Esto me devolvera los resultados de una fila.
		//var_dump($fila);

		if ($fila>0) 
		{
			//INICIA SESION
			//session_start();
			$_SESSION['usuario']=$_POST["txtUser"];
			$_SESSION['rol']= $fila['id_rol'];
			
			echo json_encode(true);
		}
		else
		{
			//ERROR AL INICIAR SESION
			echo json_encode(false);
		}
				
	}

}

?>