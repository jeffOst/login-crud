<?php

require_once("clase/database.php");

class Usuario_model
{
	var $id;
	var $usuario;
	var $clave;
	var $id_rol;
	var $nombre;
	var $apellidos;
	var $correo;

	function __construct()
	{
		
	}

	function listarUsuarios()
	{
		$bd= new BaseDatos();

		$cnx= $bd->conectar();

		$consulta=$cnx->prepare("SELECT *  FROM usuario u inner join rol r on u.id_rol=r.id_rol");

		$consulta->execute();

		$tabla=$consulta->fetchAll();

		return $tabla;
	}

	function agregar()
	{
		$bd =  new BaseDatos();
		$cnx =$bd->conectar();
		$stmt = $cnx->prepare("INSERT INTO usuario (usuario, clave, id_rol, nombre, apellidos, correo) VALUES (:usuario,:clave,:id_rol,:nombre,:apellidos,:correo)");
		$stmt->bindValue(":usuario",$this->usuario);
		$stmt->bindValue(":clave",$this->clave);
		$stmt->bindValue(":id_rol",$this->id_rol);
		$stmt->bindValue(":nombre",$this->nombre);
		$stmt->bindValue(":apellidos",$this->apellidos);
		$stmt->bindValue(":correo",$this->correo);
		$stmt->execute();
	}

	
	function buscarByIdUsuario() //Devuelve una fila
	{
		//Instanciar la clase BaseDatos
		$bd = new BaseDatos();

		//Ejecutar el metodo Conectar
		//y guardo la conexion
		$cnx = $bd->conectar();

		//Preparar la sentencia
		$stmt = $cnx->prepare("select * from usuario where id=:id");

		//Enviar el parametro
		$stmt->bindValue(":id",$this->id);

		//Ejecutar la sentencia
		$stmt->execute();

		//Recuperar las filas
		$fila = $stmt->fetch();

		//Devolver la TABLA
		return $fila;

	}

	function actualizar()
	{
		$bd =  new BaseDatos();
		
		$cnx =$bd->conectar();

		$stmt = $cnx->prepare("update usuario set usuario=:usuario, clave=:clave, id_rol=:id_rol, nombre=:nombre, apellidos=:apellidos, correo=:correo where id=:id;");

		$stmt->bindValue(":usuario",$this->usuario);
		$stmt->bindValue(":clave",$this->clave);
		$stmt->bindValue(":id_rol",$this->id_rol);
		$stmt->bindValue(":nombre",$this->nombre);
		$stmt->bindValue(":apellidos",$this->apellidos);
		$stmt->bindValue(":correo",$this->correo);
		$stmt->bindValue(":id",$this->id);

		$stmt->execute();
	}

	function eliminar()
	{
		$bd =  new BaseDatos();
		
		$cnx =$bd->conectar();

		$stmt = $cnx->prepare("delete from usuario where id=:id");

		$stmt->bindValue(":id",$this->id);

		$stmt->execute();
	}
	
}

?>