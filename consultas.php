<!DOCTYPE html>
<html lang="en" dir="ltr">
    <style>
    .container { 
        height: 200px;
        position: relative;
        border: 3px solid green; 
    }

    .center {
        margin: 0;
        position: absolute;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    </style>
  <head>
    <meta charset="utf-8">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="consultas.css">
  </head>
  <body>

    <div class="cons-box">
            <h1>Consultas</h1>
            <table>
      <tr>
	  <th>ID Videojuego</th>
	  <th>Nombre</th>
	  <th>Año</th>
	  <th>Precio</th>
	  <th>ID Genero</th>
	  <th>ID Subgenero</th>
	  <th>Plataforma</th>
	  <th>Clasificacion</th>
	  <th>Desarrollador</th>
      </tr>
      <?php>
	  $con=mysqli_connect("localhost","root","","cookie_games");
	  if ($con->connect_error){
		die("Conexion fallida: " . $con->connect_error);
	  }
	  $sql = "SELECT id_videojuego, nombre, año, precio, id_genero, id_subgenero, id_plataforma, id_clasificacion, id_desarrollador FROM videojuego";
	  $result = $con->query($sql);
	  if ($result= $mysqli->query($query)){
		while($row = $result->fetch_assoc()) {
			echo '<tr><td>' . $row["id_videojuego"] . '</td><td>' . $row["nombre"] . '</td><td>' . $row["año"] . '</td><td>' . $row["precio"] . '</td><td>' . $row["id_genero"] . '</td><td>' . $row["id_subgenero"] . '</td><td>' . $row["id_plataforma"] . '</td><td>' . $row["id_clasificacion"] . '</td><td>' . $row["id_desarrollador"]. '</td></tr>';
		}$result->free();
	  }
      ?>
  </table>
                
                      <input type="button" name="login" id="enviar" value="Enviar" onclick="location.href='videojuegos.html'">
        
            </div>
    </div>


    <div class="edit-box">
      <table>
      <tr>
          <td><h3>Id Videojuego: </h3></td>
          <td><input type="text" name="id_videojuego" id="id_videojuego"></td>
      </tr>
      <tr>
          <td><h3>Nombre: </h3></td>
          <td><input type="text" name="nombre" id="nombre"></td>
      </tr>
      <tr>
          <td><h3>Año: </h3></td>
          <td><input type="text" name="año" id="año"></td>
      </tr>
      <tr>
          <td><h3>Precio: </h3></td>
        <td><input type="text" name="precio" id="precio"></td>
      </tr>
      <tr>
          <td><h3>Id Genero: </h3></td>
        <td><input type="text" name="id_genero" id="id_genero"></td>
      </tr>
      <tr>
          <td><h3>Id Subgenero: </h3></td>
        <td><input type="text" name="id_subgenero" id="id_subgenero"></td>
       </tr>
       <td><h3>Id Plataforma: </h3></td>
        <td><input type="text" name="id_plataforma" id="id_plataforma"></td>
       </tr>
       <td><h3>Id Clasificación: </h3></td>
        <td><input type="text" name="id_calsificacion" id="id_clasificacion"></td>
       </tr>
       <td><h3>Id Desarrollador: </h3></td>
       <td><input type="text" name="id_desarrollador" id="id_desarrollador"></td>
      </tr>

  </table>
        
              <input type="button" name="login" id="enviar" value="Enviar" onclick="location.href='videojuegos.html'">

    </div>
  
  </body>
</html>
