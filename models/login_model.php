<?php

require_once("class/database.php");

class login_model
{
	//Propiedades (atributos)
	var $usuario;
	var $clave;
		
	//Metodos
	function __construct()
	{
		
	}

	function buscar()
	{
		//BUSCA SI EL USUARIO Y CLAVE EXISTE EN LA BD PARA INICIAR SESION

		$bd = new BaseDatos();

		$cnx = $bd->conectar();

		$buscar= $cnx->prepare("select * from usuario where usuario=:dato1 and clave=:dato2");

		$buscar->bindValue(":dato1",$this->usuario);
		$buscar->bindValue(":dato2",$this->clave);
		
		$buscar->execute();
			
		$fila=$buscar->Fetch();
	
		return $fila;
		
	}



}

?>