
<?php
session_start();
if(isset($_COOKIE["username"])){
    $_SESSION["username"] = $_COOKIE["username"];
    header("Location:home.php");
}
if($_POST){
    // if($_POST["recordarme"] != null){
    //     setCookie("username",$_POST["username"]);
    // }
    
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
    
//  $_SESSION["username"] = $_POST["username"];
  // header("Location:index.php");   
}

//redirigir
// header("Location:index.php");exit;
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
  <!-- ACA VIENE EL NAV -->
  <?php
  include_once "partesPhp/Header.php"
  ?>

    <form action="login.php" method="POST">
      <div class="imgcontainer">
        <img src="img/logo_usuario.png" alt="Avatar Icon made by Freepik from www.flaticon.com" class="avatar">
      </div>

      <div class="formcontainer">
        <label for=""><b>Usuario</b></label>
        <input type="email" placeholder="Ingresar email de usuario" name="username" require >
        <label for=""><b>contraseña</b></label>
        <input type="password" placeholder="Ingresar contraseña" name="pass" require >

        <button class="formbutton"type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="recordame"> Recordame
        </label>
      </div>

      <div class="formcontainer" style="background-color:#f1f1f1">
        <span class="psw">¿Olvidó su <a href="#">contraseña?</a></span>
      </div>
    </form>

    <footer class="row">
       <?php
       include_once "partesPhp/Footer.php"
        ?>  
    </footer>
  </body>
</html>
