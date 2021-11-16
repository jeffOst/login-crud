<?php	
	require_once("views/header.php");

    if (isset($this->fila)) {
		$fila = $this->fila;
	}
?>


<h2>Editar Menu</h2>

<form action="<?php echo constant('URL') ?>usuarios/actualizar" method="post">
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="recipient-name" class="col-form-label">Codigo:</label>
        <input type="text" class="form-control" name="txtIDUsuario" value="<?php echo $fila['id']?>" readonly>
    </div>
</div>

<div class="form-row">         
            <div class="form-group col-md-4">
              <label for="recipient-name" class="col-form-label">Usuario:</label>
              <input type="text" class="form-control" name="txtUsuario" value="<?php echo $fila['usuario']?>">
            </div>
            <div class="form-group col-md-4">
              <label for="recipient-name" class="col-form-label">Clave:</label>
              <input type="password" class="form-control" name="txtClave" value="<?php echo $fila['clave']?>">
            </div>
            <div class="form-group col-md-4 mt-2">
              <label for="inputState">Tipo:</label>
              <select id="inputState" class="form-control" name="txtTipo" value="<?php echo $fila['id_rol']?>">
                <option value="1" <?php if($fila['id_rol']=="1") echo 'selected="selected"'; ?> >Administrador</option>
                <option value="2" <?php if($fila['id_rol']=="2") echo 'selected="selected"'; ?> >Usuario</option>
              </select>
            </div>
          </div>
     
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="recipient-name" class="col-form-label">Nombre:</label>
              <input type="text" class="form-control" name="txtNombre" value="<?php echo $fila['nombre']?>">
            </div>
            <div class="form-group col-md-4">
              <label for="recipient-name" class="col-form-label">Apellido:</label>
              <input type="text" class="form-control" name="txtApellido" value="<?php echo $fila['apellidos']?>">
            </div>
            <div class="form-group col-md-4">
              <label for="recipient-name" class="col-form-label">Correo:</label>
              <input type="email" class="form-control" name="txtCorreo" value="<?php echo $fila['correo']?>">
            </div>
          </div>
                      
        <!---->
          <br> 
          <div class="footer">
            <a href="<?php echo constant('URL')?>usuarios" class="btn btn-secondary">Cancelar</a>  
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form> 

<?php	
	require_once("views/footer.php");
?>