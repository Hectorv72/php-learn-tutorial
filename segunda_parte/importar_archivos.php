<?php
  //=> Include y Require
  //-> Sirven para importar archivos externos a nuestro codigo
  //-> La diferencia entre include y require es que si el archivo tiene algun error, include no romperá con la ejecución del codigo posterior solo nos mostrará un mensaje de alerta(warning), sin embargo require si, este nos arrojara un fatal error.

  //-> Sin errores
  // require('./segunda_parte/ejemplos_para_importar/sin_errores.php');
  // include('./segunda_parte/ejemplos_para_importar/sin_errores.php');
  // echo $variable_externa;
  // echo '<br>';
  // funcionExterna();


  //-> Con errores
  // require('./segunda_parte/ejemplos_para_importar/con_errores.php');
  // include('./segunda_parte/ejemplos_para_importar/con_errores.php');
  echo 'Probando';


  //=> Include_once y Require_require
  //-> Se utiliza cuando queremos que un archivo se importe solo una ves
  
  // require_once('./segunda_parte/ejemplos_para_importar/escribir_en_pantalla.php');
  // require_once('./segunda_parte/ejemplos_para_importar/escribir_en_pantalla.php');
  
  
  // include_once('./segunda_parte/ejemplos_para_importar/escribir_en_pantalla.php');
  // include_once('./segunda_parte/ejemplos_para_importar/escribir_en_pantalla.php');

?>