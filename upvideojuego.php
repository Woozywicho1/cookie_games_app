<?php
  $videojuego = $_POST['videojuego'];

  $con=mysqli_connect("localhost","root","","cookie_games");

  mysqli_query($con,"INSERT INTO videojuego(`nombre`, `año`, `precio`, `id_genero`, `id_subgenero`, `id_plataforma`, `id_clasificacion`, `id_desarrollador`, `cantidad`) VALUES ('$videojuego','$año',$precio,$genero,$subgenero,$plataforma,$clasificacion,$desarrollador,$cantidad)")
?>

