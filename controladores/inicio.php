<?php

class Inicio extends Controlador
{
	
	function __construct()
	{
        parent::__construct();
		session_start();
	}

	public function renderizar($vista = "inicio")
	{
        //error_log("Desde clase inicio se renderizo :: ".$vista);
        $this->mostrarVista($vista);
	}

}

?>