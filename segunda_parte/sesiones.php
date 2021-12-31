<?php
  ///? SESIONES EN PHP

  ///* El soporte para sesiones en php consiste en una forma de preservar cierta información a lo largo de accesos subsiguientes.

  //=> Iniciar sesiones
  session_start();

  //=> Declarar o definir sesiones
  // $_SESSION['nombre'] = 'Hector';
  // $_SESSION['apellido'] = 'Valdez';
  
  //=> Elimina todas las sesiones instanciadas
  // session_unset();

  //=> Destruye la sesión de la sesión
  // session_destroy();

  //=> Muestra el id de la sesion
  // echo session_id();
  
  //=> Ver todas las sesiones guardadas
  // print_r($_SESSION);

?>