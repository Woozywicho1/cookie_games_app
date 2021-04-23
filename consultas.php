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
      </tr>
      
      <?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "cookie_games";

//create connection
$connection = mysqli_connect($host, $user, $pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = mysqli_query($connection,"SELECT * FROM videojuego");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
?>


  </table>
                
                      <input type="button" name="login" id="enviar" value="Enviar" onclick="location.href='videojuegos.html'">
        
            </div>
    </div>
  
  </body>
</html>
