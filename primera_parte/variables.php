<?php

  ///? VARIABLES EN PHP


  //* Todas las variables se definen con el caractér especial '$' seguido del nombre que le asignaremos


  //=> Variables indefinidas

  // $variable_indefinida;
  
  //-> Al llamar a una variable definida sin valor asignado php mostrará un mensaje de alerta(warning)
  
  //-> Las alertas no rompen con la suceccion del codigo pero si pueden causar errores en el diseño de la pagina al ser pintados en pantalla

  // echo $variable_indefinida;
  
  //-> Una variable definida sin valor asignado da como valor null
  // echo $variable_indefinida == null ? "true" : "false"; // => true

  //-> Una valor null puede ser tratado como false
  //-> false == null
  // echo $variable_indefinida ? "true" : "false"; // => false

  //-> imprimir en pantalla valores booleanos o de valor null da el siguiente resultado
  //-> echo true  => 1
  //-> echo false => 
  //-> echo null  => 

  //-> Si interactuamos con las variables indefinidas tendremos lo siguiente:
  
  //--> Concatenando con string
  //-> echo $var_string_indefinida .= 'abc' => ''.'abc';
  //-> Resultado: 'abc'

  //--> Operaciones con integer
  //-> echo $var_int_indefinida += 7 => 0 + 7;
  //-> Resultado: 7
  //-> Funciona de la misma manera con valores de tipo float


  //=> Asignación de valor y maneras de imprimirlo en pantalla

  // $pokemon = 'pikachu';
  // echo $pokemon;     // => pikachu
  // echo '<br>';
  // print($pokemon);   // => pikachu
  // print('<br>');
  // printf('%s', $pokemon);  // => pikachu
  // printf('<br>');
  // print_r($pokemon); // => pikachu
  // print_r('<br>');




  //=> Concatenación

  // $pokemon = 'pikachu';

  //-> Para concatenar variables o cadenas de texto utilizamos el punto(.)
  // echo 'el pokemon es '.$pokemon.'<br>'; // => el pokemon es pikachu

  //-> Agregar string con concatenación (.=)| . + = |
  // $texto = "Hola";
  // $texto .= " como estas";
  // echo $texto; // => Hola como estas

  //-> Similar al template string se utilizan las comillas dobles
  //-> Para escribir en pantalla el valor de la variable en una cadena de texto
  // echo "el pokemon es $pokemon <br>";  // => el pokemon es pikachu
  // echo '<br/><br/>';




  //=> Diferencias entre las comillas

  // $pokemon = 'pikachu';
  // echo 'el pokemon es $pokemon <br>'; // => el pokemon es $pokemon
  // echo "el pokemon es $pokemon <br>"; // => el pokemon es pikachu
  //-> Las comillas especiales no funcionan en php
  // echo ´el pokemon es $pokemon´; // => fatal error




  //=> Definir variables por referencias

  // $peso = 100;
  // $dolar = &$peso;

  //-> Al modificar el valor de la variable
  //-> Tambien se modifica el valor de la variable original
  // $dolar += 100 ;
  // echo $peso  . "<br>"; // => 200
  // echo $dolar . "<br>"; // => 200
  // echo "<br>";



  //=> Asignar valor a variables por medio de otras
  
  // $animal = 'perro';
  // $$animal = "rabioso";

  //-> Para hacer llamar o hacer referencia a una variable que asignada con el nombre del valor de otra variable dentro de una cadena de texto se utiliza '${$variable}'
  // echo " $animal ${$animal} <br>"; // => perro rabioso
  //-> Es lo mismo que hacer
  // echo "$animal $perro <br>"; // => perro rabioso




  //=> Llamar al valor de una variable por nombre o valor de otra

  // $hombre = 'juan';
  // $juan   = 'cartero';
  // $profesion = $$hombre;
  // echo $profesion; // => cartero
  // echo "<br/>";
  // echo $$hombre; // => cartero

  //-> Ejemplo practico:
  // $jhon   = "Jhon Salchi Chon";
  // $susana = "Ana Lisa Melo";
  // $sexo   = "Hombre";
  // if($sexo === "Hombre"){
  //   $persona = 'jhon';
  // } else {
  //   $persona = 'susana';
  // }
  // echo $$persona; // => Jhon Salchi Chon



  //=> Si queremos verifcar si una variable está seteada o definida se utiliza isset()
  
  // echo isset($no_definido) ? "si está" : 'no está'; // => no está
  // echo '<br>';
  
  // $definido = "algo";
  // echo isset($definido) ? "si está" : 'no está'; // => si está
  // echo '<br>';



  //=> Obetener el información de la variable se utiliza el metodo var_dump()

  // $var_string = "variable de texto";
  // echo var_dump($var_string); // => string(17) "variable de texto"
  // echo '<br>';

  // $var_integer = 100;
  // echo var_dump($var_integer); // => int(100)
  // echo '<br>';
  
  // $var_float = 5.5555;
  // echo var_dump($var_float); // => int(5.5555)
  // echo '<br>';




  //=> Variables pre-definidas

  // $_GET     => Contiene un array de llaves con sus valores de los parametros enviados por la query url
  // $_POST    => Contiene un array de llaves con sus valores de la request http post
  // $_FILES   => Contiene un array de los archivos enviados por la request http post
  
  // $_REQUEST => Contiene un array de llaves con sus vaores de todas las requests (get,post,files);
  // $_SESSION => Contiene un array de llaves con los valores de las sesiones almacenadas

  //-> Nunca usé pero existen
  // $_ENV    => Array de informacion(llave->valor) de las variables de entorno
  // $_COOKIE => Array de informacion(llave->valor) de los coockies utilizados por la pagina
  // $_SERVER => Array de información(llave->valor) del servidor

?>