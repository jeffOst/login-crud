<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>INICIO DE SESION</title>
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/css/login.css">
	<!--Sweet Alert-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!--Ajax-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
</head>
<body>

	<br><br><br><br>	
	<div class="container">
		<div class="titulo">
			<h1>Iniciar <span>Sesion</span></h1>
		</div>
		<form class="form_login" method="POST" id="login">		
			<p><label>USUARIO: </label><br><br><input type="text" id="user" placeholder="Ingrese su Usuario" class="input" ></p>
			<p><label>CONTRASEÑA:  </label><br><br><input type="password" id="pass" placeholder="Ingrese su Contraseña" class="input"></p>
			<button type="submit" class="btn_submit">Iniciar Sesion</button>
		</form>
	</div>		

	<script src="<?=URL?>public/js/login.js"></script>
	
</body>
</html>