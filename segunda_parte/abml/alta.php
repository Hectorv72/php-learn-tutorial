<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="nombre">
    <input type="text" name="apellido">
    <button type="submit">Guardar</button>
  </form>

  <?php
    if($_POST){
      require('./segunda_parte/abml/conexion_bd/pdo_connect.php');
      $nombre   = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      

      try {
        $sql = "INSERT INTO `personas` (`nombre_persona`, `apellido_persona`) VALUES ('$nombre','$apellido')";

        echo $sql;

        $pdo_connection->query($sql);
        // $pdo_connection->
      } catch (\Throwable $th) {
        throw $th;
      }
      
    }
  ?>
</body>

</html>