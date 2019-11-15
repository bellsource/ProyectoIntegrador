<?php
    // var_dump($_POST);
    // exit;

    session_start();
    $_SESSION["id"] = 1;
    require_once 'clases/BBDD.php';
    require_once 'clases/Usuarios.php';
    $bd = new BBDD("LibrosDeCoolto");
    $traerUsuario = $bd->traerUsuario($_SESSION["id"]);
    if($_POST){ 
      //$usu = new Usuarios ($_POST["nombre"], $_POST["apellido"], $_POST["email"]);
      $updateUsuario = $bd->updateUsuario($_SESSION["id"], $_POST["nombre"], $_POST["apellido"], $_POST["email"]);
      }

    include_once "partesPhp/Header.php"
  ?> 
      
     <form class="formcontainer" method="POST" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputNombre">Nombre</label>
          <input type="text" value="<?php echo $traerUsuario["nombre"];?>" name="nombre" class="form-control" id="inputNombre">
        </div>
        <div class="form-group col-md-6">
          <label for="inputApellido" >Apellido</label>
          <input type="text" value="<?php echo $traerUsuario["apellido"];?>" name="apellido" class="form-control" id="inputApellido" >
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail">Email</label>
          <input type="email" value="<?php echo $traerUsuario["email"];?>" name="email" class="form-control" id="inputEmail">
        </div>

        <div class="form-group col-md-6">
          <label for="inputPass">Contraseña</label>
          <input type="password" name="inputPass" class="form-control" id="pass">
        </div>
        <div class="form-group col-md-12">
          <label for="inputPassConfirm">Confirmar Contraseña</label>
          <input type="password" name="inputPassConfirm" class="form-control">
        </div>
        <!-- <div class="form-group col-md-12">
          <label for="inputLocalidad">Localidad</label>
          <select id="inputLocalidad" value="" name="Localidad" class="form-control">
            <option>Argentina</option>
            <option>Mexico</option>
            <option>Chile</option>
            <option>Ecuador</option>
            <option>Perú</option>
          </select>
        </div> -->
        
      </div>

      <button type="submit" class="formbutton" name="editar">Actualizar Datos</button>

    </form>

    <?php
      include_once "partesPhp/Footer.php";
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
