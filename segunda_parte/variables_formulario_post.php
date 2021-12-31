<?php
  ///? ENVIO DE DATOS POR FORMULARIO CON METODO POST EN PHP

  if($_POST){
    print_r($_POST);
  }

  // if($_FILES){
  //   print_r($_FILES);
  // }
  // $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
  // $edad   = isset($_POST['edad'])   ? $_POST['edad']   : '';
?>
<br>

<form action="" method="post">
  <input  type="text"   name="nombre" placeholder="Ingrese su nombre">
  <input  type="text"   name="nombre" placeholder="Ingrese su nombre">
  <input  type="number" name="edad"   placeholder="Ingrese su edad">
  <button type="submit">Enviar</button>
</form>

<br>

<!-- <form action="" method="post" enctype="multipart/form-data">
  <input  type="file" name="imagen" placeholder="Ingrese su nombre">
  <button type="submit">Enviar</button>
</form> -->
<br>

<!-- <table border="1">
  <tr>
    <td>Nombre</td>
    <td>Edad</td>
  </tr>
  <tr>
    <td><?php // echo $nombre ?></td>
    <td><?php // echo $edad   ?></td>
  </tr>
</table> -->