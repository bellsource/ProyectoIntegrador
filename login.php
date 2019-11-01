
<?php
session_start();
if(isset($_COOKIE["username"])){
    $_SESSION["username"] = $_COOKIE["username"];
    header("Location:home.php");
}
if($_POST){
    if($_POST["recordarme"] != null){
         setCookie("username",$_POST["username"]);
    }
    
      // $hash = password_hash($_POST["pass"], PASSWORD_DEFAULT);
      // $resultado = password_verify($_POST["pass"],$hash);
     //valido los datos
     if(!filter_var($_POST["username"],FILTER_VALIDATE_EMAIL)){//sacar false
       echo "El mail de usuario no contiene el formato correcto<br>";
     }
     //no estar vacio
     //
     if(strlen($_POST["pass"])<8){
       echo "La contraseña debe contener mas de 8 caracteres";

     }
    
     
  //traigo los usuarios del json
  $usuariosEnJSON = file_get_contents("usuarios.json");

  //convierto el json en array
  $usuarios = json_decode($usuariosEnJSON,true);
      
  //Valido usuario(correo) y contraseña (con hash) con el archivo json
  foreach($usuarios as $usuario){
    $resultado = password_verify($_POST["pass"],$usuario["password"]);      
    if(($usuario["email"] == $_POST["username"])&&($resultado==TRUE)){
      header("Location:index.php");
     }else header("Location:login.php");
     
   
  }
    
 $_SESSION["username"] = $_POST["username"];
   
}

//redirigir
// header("Location:index.php");exit;
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
  <!-- ACA VIENE EL NAV -->
  <?php
  include_once "partesPhp/Header.php";
  ?> 

    <form action="login.php" method="POST">
      <span class="contenedorAvatar" ><img class="avatar" src="img/logo_usuario.png" alt="Avatar Icon made by Freepik from www.flaticon.com" ></span>
    
      <div class="contenedorUserYPass">
        <label for=""><b>Usuario</b></label>
        <input type="email" placeholder="Ingresar email de usuario" name="username" require >
        <label for=""><b>Contraseña</b></label>
        <input type="password" placeholder="Ingresar contraseña" name="pass" require >
        <button class="botonLogin"type="submit">Login</button>
        <label class="recordarme">
          <input type="checkbox" checked="checked" name="recordame">Recordame 
        </label>
      </div>

      <div class="olvidoPass">
        <span >¿Olvidó su <a href="#">contraseña?</a></span>
      </div>
    </form>

 <!-- Aca viene el FOOTER -->
       <?php
       include_once "partesPhp/Footer.php"
        ?>  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  
</html>
