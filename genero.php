<?php
  $genero = $_POST['genero'];

  $con=mysqli_connect("localhost","root","","cookie_games");

  mysqli_query($con,"INSERT INTO generos (genero) VALUES ('$genero')")
?>
