<?php
  $subgenero = $_POST['subgenero'];

  $con=mysqli_connect("localhost","root","","cookie_games");

  mysqli_query($con,"INSERT INTO subgeneros (subgenero) VALUES ('$subgenero')")
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