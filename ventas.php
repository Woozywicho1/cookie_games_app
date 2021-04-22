<?php
  $ventas = $_POST['ventas'];

  $con=mysqli_connect("localhost","root","","cookie_games");

  mysqli_query($con,"INSERT INTO ventas (id_videojuego, cantidad) VALUES ($id_videojuego, $cantidad)")
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Location" content="<?= $url ?>">
    <script type="text/javascript">
      window.location.replace("<?= "exito.html" ?>")
    </script>
    <title></title>
  </head>
  <body></body>
</html>