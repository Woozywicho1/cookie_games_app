<?php
  $clasificacion = $_POST['clasificacion'];

  $con=mysqli_connect("localhost","root","","cookie_games");

  mysqli_query($con,"INSERT INTO clasificacion (clasificacion) VALUES ('$clasificacion')")
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