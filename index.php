<?php

error_reporting(E_ALL);
ini_set('ignore_repeated_errors', TRUE);
ini_set('display_errors', FALSE);
ini_set('log_errors', TRUE);
require 'config/config.php';
ini_set('error_log', DIRECTORY . "logs/errors.log");
require_once("clase/Vista.php");
require_once("clase/controlador.php");
require_once("clase/ruteador.php");
require_once("clase/database.php");

$ruteador = new Ruteador();

?>