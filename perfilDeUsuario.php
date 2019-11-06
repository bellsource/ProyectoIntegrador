<?php

    require_once 'clases/BBDD.php';
    $bd = new BBDD("db_libroscoolto");
  
    include_once "partesPhp/Header.php"
  ?> 
      
     <form class="formcontainer" method="POST" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputNombre" value="<?php echo $traerUsuario["nombre"];?>">Nombre</label>
          <input type="text" name="inputNombre" class="form-control" id="inputNombre">
        </div>
        <div class="form-group col-md-6">
          <label for="inputApellido" value="<?php echo $traerUsuario["apellido"];?>">Apellido</label>
          <input type="text" name="inputApellido" class="form-control" id="inputApellido" >
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail" value="<?php echo $traerUsuario["email"];?>">Email</label>
          <input type="email" name="inputEmail" class="form-control" id="inputEmail">
        </div>

        <div class="form-group col-md-6">
          <label for="inputPass">Contraseña</label>
          <input type="password" name="inputPass" class="form-control" id="inputPass">
        </div>
        <div class="form-group col-md-12">
          <label for="inputPassConfirm">Confirmar Contraseña</label>
          <input type="password" name="inputPassConfirm" class="form-control">
        </div>
        <div class="form-group col-md-12">
          <label for="inputLocalidad" value="<?php echo $traerUsuario["Localidad"];?>">Localidad</label>
          <select id="inputLocalidad" name="inputLocalidad" class="form-control">
            <option selected>Elegir...</option>
            <option>Argentina</option>
            <option>Mexico</option>
            <option>Chile</option>
            <option>Ecuador</option>
            <option>Perú</option>
          </select>
        </div>
        
      </div>

      <button type="submit" class="formbutton" name="editar">Actualizar Datos</button>
    </form>

    <?php
      include_once "partesPhp/Footer.php"
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
