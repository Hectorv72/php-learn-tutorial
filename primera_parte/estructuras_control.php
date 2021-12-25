<?php

  ///? ESTRUCTURAS DE CONTROL EN PHP

  
  //====> Estructuras de control selectivas


  //=> 1) Sentencia IF - ELSE - ELSE IF
  // Utilizado para validar condiciones y realizar acciones dependiendo del resultado de la validación
  
  // $valor = 1;
  // if ($valor == 1) {
  //   echo "el valor es 1";
  // } else if ( $valor == 2) {
  //   echo "el valor es 2";
  // } else {
  //   echo "el valor no es 1 ni 2";
  // }
  

  //-> Version alternativa

  // $valor = 2;
  // if ($valor == 1):
  //   echo "el valor es 1";
  // elseif ($valor == 2):
  //   echo "el valor es 2";
  // else:
  //   echo "el valor no es 1 ni 2";
  // endif;


  //-> Operador ternario
  
  // $valor = 3;
  // echo $valor == 3 ? "el valor es 3" : "el valor no es 3";




  //=> 2) Sentencia SWITCH
  
  // $marca = "iphone";
  // switch($marca){
  //   case 'samsung':
  //     echo 'calidad';
  //     break;
  //   case 'iphone':
  //     echo 'precio';
  //     break;
  //   case 'xiaomi':
  //     echo 'precio-calidad';
  //     break;
  //   default:
  //     echo "desconocido";
  // }


  //-> Version alternativa

  // $marca = "samsung";
  // switch($marca):
  //   case 'samsung':
  //     echo 'calidad';
  //     break;
  //   case 'iphone':
  //     echo 'precio';
  //     break;
  //   case 'xiaomi':
  //     echo 'precio-calidad';
  //     break;
  //   default:
  //     echo "desconocido";
  // endswitch;




  //=> expresión MATCH

  //-> La expresión match ramifica la evaluación basada en una comprobación de identidad de un valor.
  //-> De forma similar a un switch, pero a diferencia de este, la comprobación es una comprobación de identidad (===) en lugar de una comprobación de igualdad debil (==).

  // $expresion = 'auto';
  // $valor_retorno = match($expresion){
  //   'moto'             =>  'tiene 2 ruedas',
  //   'auto','camioneta' =>  'tiene 4 ruedas',
  // };
  // echo $valor_retorno;




  //====> Estructuras de control repetitivas


  //=> 3) Sentencia FOR

  // for ($i = 0; $i <= 5; $i++) {
  //   echo $i.'<br>';
  // }

  //-> Version alternativa

  // for ($i = 0; $i <= 5; $i++):
  //   echo $i.'<br>';
  // endfor;




  //=> 4) Sentencia FOREACH
  //-> Es utilizado para recorrer los elementos de un array de manera mas fácil

  // $array = ['valor1','valor2','valor3'];
  // foreach($array as $valor ){
  //   echo $valor.'<br>';
  // }

  //-> Version alternativa

  // $array = ['valor1','valor2','valor3'];
  // foreach($array as $valor):
  //   echo $valor.'<br>';
  // endforeach;




  //=> 5) Sentencia WHILE

  // $contador = 0;
  // while($contador <= 10){
  //   echo $contador.'<br>';
  //   $contador++;
  // }

  //-> Verson alternativa
  // $contador = 0;
  // while($contador <= 10):
  //   echo $contador.'<br>';
  //   $contador += 1;
  // endwhile;




  //=> 6) Sentencia DO WHILE
  //-> La diferencia entre la sentencia WHILE y la DO WHILE es que esta ultima primero realiza la ejecución del bloque almenos una vez, y luego realiza la validación

  // $acumulador = 0;

  // do{
  //   echo $acumulador.'<br>';
  //   $acumulador++;
  // } while ( $acumulador <= 5 );
  
?>