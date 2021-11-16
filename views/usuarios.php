<?php	
	require_once("views/header.php");
?>

	<h2>Lista de Usuarios</h2>
  
  <?php
  if($_SESSION['rol']=="1")
  {
  ?>
	
    <!--Boton Modal - Agregar Usuario-->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mt-3 mb-4" data-toggle="modal" data-target="#staticBackdrop">
      Agregar Usuario
    </button>

    <!-- Modal Agregar Usuario-->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Agregar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <!--Aqui va el formulario-->
        <div class="modal-body">
        <form action="<?php echo constant('URL') ?>usuarios/agregar" method="post">
              
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="recipient-name" class="col-form-label">Usuario:</label>
                <input type="text" class="form-control" name="txtUsuario">
              </div>
              <div class="form-group col-md-4">
                <label for="recipient-name" class="col-form-label">Clave:</label>
                <input type="password" class="form-control" name="txtClave">
              </div>
              <div class="form-group col-md-4 mt-2">
                <label for="inputState">Tipo:</label>
                <select id="inputState" class="form-control" name="txtTipo">
                  <option value="1">Administrador</option>
                  <option value="2" selected>Usuario</option>
                </select>
              </div>
            </div>
      
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="recipient-name" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" name="txtNombre">
              </div>
              <div class="form-group col-md-4">
                <label for="recipient-name" class="col-form-label">Apellido:</label>
                <input type="text" class="form-control" name="txtApellido">
              </div>
              <div class="form-group col-md-4">
                <label for="recipient-name" class="col-form-label">Correo:</label>
                <input type="email" class="form-control" name="txtCorreo">
              </div>
            </div>
      
            <!----------------------------------------------------------------------------------->
            <br> 
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>  
        </div>

        </div>
      </div>
    </div>
    <!--Fin del Modal-->
  <?php
  }
  ?>

  <table class="table table-bordered table-striped table-responsive-sm table-hover">
      <thead class="thead-dark">
         <tr>
            <th>Codigo</th>
            <th>Usuario</th>
            <th>Rol</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
			      <?php
              if($_SESSION['rol']=="1")
              {
              ?>
                <th>Acciones</th>
              <?php
              }
            ?>
         </tr>
      </thead>
      <tbody>
      
      <?php
	    foreach ($this->tabla as $fila) 
	    {
      ?>
         <tr>
            <td><?php echo $fila["id"]?></td>
            <td><?php echo $fila["usuario"]?></td>
            <td><?php echo $fila["nombre_rol"]?></td>
			      <td><?php echo $fila["nombre"]?></td>
			      <td><?php echo $fila["apellidos"]?></td>
            <td><?php echo $fila["correo"]?></td>
            
            <?php
              if($_SESSION['rol']=="1")
              {
              ?>
              <td>
                <a href="<?php echo constant('URL') ?>usuarios/editar?v=<?php echo base64_encode($fila['id'])?>" class="btn btn-warning btn-sm px-3">
                  <i class="fas fa-user-edit"></i>
                </a>
                <a href="javascript:funCargarURL('<?php echo constant('URL')?>usuarios/eliminar?v=<?php echo base64_encode($fila["id"]) ?>')" class="btn btn-danger btn-sm px-3">
                  <i class="fas fa-times"></i>
                </a>
                </td>
              <?php
              }
            ?>
          </tr>    
      <?php
      }
      ?>  
    </tbody>
  </table>
   
<?php
	require_once("views/footer.php")
?>