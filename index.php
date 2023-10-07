<?php
require_once ('./config/conexion.php');
$conexion = new Conexion(); // Establece la conexión a la base de datos

// Consulta SQL para obtener los datos de la tabla
$sql = "SELECT * FROM noticias";
$resultado = $conexion->consultar($sql);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Tabla de Datos</title>
</head>

<body>
  <h1>Datos de la tabla</h1>

  <table>
    <tr>
      <th>ID</th>
      <th>Titulo</th>
      <th>Fecha</th>
    </tr>
    <?php while ($fila = $resultado->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $fila["id"]; ?></td>
      <td><?php echo $fila["titulo"]; ?></td>
      <td><?php echo $fila["fecha"]; ?></td>

    </tr>
    <?php } ?>
  </table>


</body>

</html>