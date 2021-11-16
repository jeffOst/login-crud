<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Importar Estilos-->
    <link href="<?php echo constant('URL') ?>public/css/admin_style.css" rel="stylesheet" type="text/css">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Ajax-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Importar iconos-->
    <script src="<?php echo constant('URL') ?>public/js/icons.js"></script>
	<script src="<?php echo constant('URL') ?>public/js/eliminar_user.js"></script>
    <title>Panel de Administrador</title>
</head>

<?php   

    if (isset($_SESSION['usuario'])) 
	{
		  
    }else{
      header("Location: ".constant('URL')."");
    }
?>

<body>

  	<!--Barra de Navegacion Superior-->
	<nav class="navbar navbar-expand-lg navbar-light blue fixed-top">
		<!--Boton para mostrar u ocultar barra lateral-->
		<button id="sidebarCollapse" class="btn navbar-btn">
		<i class="fas fa-lg fa-bars"></i>
		</button>
		<a class="navbar-brand" href="">
		<h3 id="logo">Panel de Control</h3>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
			<a class="nav-link" id="link" href="<?php echo constant('URL')?>logout">
			<i class="fas fa-sign-out-alt"></i>
			Cerrar Sesion<span class="sr-only">(current) </span></a>
			</li> 
		</ul>
		</div>
	</nav>

	<!--Barra de Navegacion Lateral-->
  	<div class="wrapper fixed-left">
    <nav id="sidebar">
	<!--Elementos de la Barra Lateral-->
    	<div class="sidebar-header"><br>
		<center>
        	<img src="<?php echo constant('URL')?>public/img/avatar.png" alt="" width="150px">
	 		<h3><?php echo $_SESSION['usuario']?></h3>
		 </center>
     	</div>
      	<ul class="list-unstyled components">
			<li>
				<a href="<?php echo constant('URL')?>"><i class="fas fa-home"></i>&nbsp Inicio</a>
			</li>
			<li>
				<a href="<?php echo constant('URL')?>usuarios" id="usuario"><i class="fas fa-users"></i>&nbsp Usuarios</a> <!--&nbsp sirve para representar en HTML un espacio en blanco --> 
			</li>
      	</ul>
    </nav>

	<!--Aqui se mostrara el contenido de cada pagina-->
	<div id="content">