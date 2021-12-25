<?php
  ///? INTERRUPCIONES EN PHP

  //=> 1) Palabra reservada BREAK
  
  //-> Se utiliza para finalizar o romper la ejecución de las estructuras de control:
  //-> for, foreach, while, do-while o switch
  
  // for ($i = 0; $i <= 8; $i++) {
  //   echo $i.'<br>';
  //   if($i == 5){
  //     break;
  //   }
  // }


  //-> break acepta un argumento numérico opcional que indica cuantas estructuras anidadas se debe salir. El valor predeterminado es 1

  // for($i = 0; $i <= 5; $i++){
  //   for($j = 0; $j <= 5; $j++){
  //     if( $i*$j == 10 ){
  //       echo 'se puede hacer 10 <br>';
  //       echo "i es $i <br>";
  //       echo "j es $j <br>";
  //       break 2;
  //     } else {
  //       echo 'no se puede hacer 10 <br>';
  //     }
  //   }
  // }




  //=> 2) Palabra reservada CONTINUE
  
  //-> continue se utiliza dentro de estructuras iteratvas para saltar el resto de la iteración actual del bucle y continuar con la ejecución en la evaluación de la condición, para luego comenzar la siguiente iteración

  // $array_valores = [1,2,3,4,5,6];

  // foreach($array_valores as $valor){
  //   if($valor % 2 === 0){
  //     continue;
  //   }
  //   echo "$valor es impar <br>";
  // }


  //=> 3) Operador GOTO
  //-> El operador goto puede ser usado para saltar de una sección a otra en el programa.
  //-> El punto de destino es especificado mediante una etiqueta seguida de dos puntos ':'
  //-> goto se utiliza de la siguiente manera

  // echo 'Esto si se mostrará <br>';
  // goto a;

  // echo 'Esto no se mostrará';

  // a:
  // echo 'Esto también se mostrará';

?>