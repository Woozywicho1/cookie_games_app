<?php
  $user=$_POST['user'];
  $password=$_POST['password'];
  $url = "login.html";

  $con=mysqli_connect("localhost","root","","cookie_games");
  //mysqli_query($con,"INSERT INTO subgeneros (subgenero) VALUES ('$subgenero')")

  if (empty($_POST['user']) || empty($_POST['password'])) {

    echo '<script>alert("Ingrese usuario y password")</script>';
  }else{
    //echo '<script>alert("Usuario y contraseña ingresados")</script>';
    //$password =  sha1($password); //Algoritmo de encriptacion de la password http://php.net/manual/es/function.sha1.php

    $sql = "SELECT user, password FROM login WHERE user = '".$user."' AND password= '".$password."';";
    $query=mysqli_query($con,$sql);
    $counter=mysqli_num_rows($query);
    if ($counter > 0){
      echo '<script>alert("Inicio de sesion correcto")</script>';
      $url = "index.html";
    }else{
      echo '<script>alert("Inicio de sesion incorrecto, intente de nuevo")</script>';
    }
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Location" content="<?= $url ?>">
    <script type="text/javascript">
      window.location.replace("<?= $url ?>")
    </script>
    <title></title>
  </head>
  <body></body>
</html>
