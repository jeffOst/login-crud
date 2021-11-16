<?php

class Vista
{
    public function mostrarVista($vista){
        //ruta de la carpeta vistas
        require_once 'vistas/'.$vista.".php";
    }

}
?>