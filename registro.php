
<?php

session_start();
if(isset($_COOKIE["inputNombre"])){
      $_SESSION["inputNombre"] = $_COOKIE["inputNombre"];
      header("Location:index.php");
  }
  
  
  
  
  
  //inicializo variables para errores
  $errorNombre = "";
  $errorEmail = "";
  $errorPassword = "";
  $errorAvatar = "";
  
  //averiguo si enviaron el formulario
  if($_POST){
    $errores = false;
    
    //valido los datos
    if($_POST["inputNombre"] == ""){
      $errorNombre = "Ingrese un nombre";
      $errores = true;
    }else if(strlen($_POST["inputNombre"]) < 2){
        $errorNombre = "Su nombre debe tener al menos 2 caracteres";
        $errores = true;
    }
    //aca va la validación del apellido
    if($_POST["inputPass"] == "" || $_POST["inputPassConfirm"] == ""){
        $errorPassword = "No puede estar en blanco";
        $errores = true;
    }else if($_POST["inputPass"] != $_POST["inputPassConfirm"]){
        $errorPassword = "Las contraseñas deben coincidir";
        $errores = true;
    }else{
        $contrasenia = password_hash($_POST["inputPass"],PASSWORD_DEFAULT);
        //echo md5($_POST["password"]);
         } 
//validacion de mail
         if(!filter_var($_POST["username"],FILTER_VALIDATE_EMAIL)){//sacar false
          echo "El mail de usuario no contiene el formato correcto<br>";
        }
        //no estar vacio
        //validacion de contraseña
        if(strlen($_POST["pass"])<8){
          echo "La contraseña debe contener mas de 8 caracteres";
   
        }

    if(!$errores){
        //no hay errores

        //creo el usuario
        $usuario = [
            "id"=> md5($_POST["inputNombre"]),
            "username" => $_POST["inputNombre"],
            "email" => $_POST["inputEmail"],
            "password" => $contrasenia
        ];
        
        //traigo los usuarios del json
        $usuariosEnJSON = file_get_contents("usuarios.json");
        //convierto el json en array
        $usuarios = json_decode($usuariosEnJSON);
        //agrego el nuevo usuario al array de la base de datos
        $usuarios[] = $usuario;
        //convierto el nuevo array completo a json
        $nuevosUsuariosEnJSON = json_encode($usuarios);
        //escribo el nuevo json en el archivo .json
        file_put_contents("usuarios.json",$nuevosUsuariosEnJSON);

        header("Location:registroExitoso.php");
         exit;
            }

        }

        if($_POST){
                if($_POST["recordarme"] != null){
                  setCookie("inputNombre",$_POST["inputNombre"]);
              }
              $_SESSION["inputNombre"] = $_POST["inputNombre"];
              header("Location:index.php");
            }
 ?>
<!DOCTYPE html>

<html>

<head>
  <title>Registro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body>


     <form class="formcontainer" method="POST" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputNombre">Nombre</label>
          <input type="text" name="inputNombre" class="form-control" id="inputNombre" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
          <label for="inputApellido">Apellido</label>
          <input type="text" name="inputApellido" class="form-control" id="inputApellido" placeholder="Apellido">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail">Email</label>
          <input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email">
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
          <label for="inputLocalidad">Localidad</label>
          <select id="inputLocalidad" name="inputLocalidad" class="form-control">
            <option selected>Elegir...</option>
            <option>Argentina</option>
            <option>Mexico</option>
            <option>Chile</option>
            <option>Ecuador</option>
            <option>Perú</option>
          </select>
        </div>
        <div class="form-group col-md-12">
          <label for="inputPassConfirm">Recordarme</label>
          <input type="checkbox" value="recordar" name="recordarme">
        </div>

      </div>

      <button type="submit" class="formbutton">Crear Cuenta</button>
    </form>



      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
