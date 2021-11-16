<?php
	require_once("views/header.php");
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Bienvenido <?php echo $_SESSION['usuario']?></h1>
    <?php
    if($_SESSION['rol']=="1")
    {
      echo "<h4>Rol: Administrador</h4>";
    }else{
      echo "<h4>Rol: Usuario</h4>";
    }
    ?>
  </div>
</div>
	
<?php 
	require_once("views/footer.php");
?>