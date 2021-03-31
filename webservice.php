<?php
  $subgenero = $_POST['subgenero'];

  $con=mysqli_connect("localhost","root","","cookie_games");

  mysqli_query($con,"INSERT INTO subgenero (subgenero) VALUES ('$subgenero')")
?>
