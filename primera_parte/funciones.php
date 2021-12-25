<?php
  ///? FUNCIONES EN PHP

  //=> 1) Funciones definidas por el usuario

  //-> Se utiliza la palabra reservada function seguido del nombre que le asignaremos a nuestra función junto con los parentesis '()'
  //-> Luego de esto abrimos el bloque de ejecución con las llaves '{}' donde pondremos el codigo que querramos realizar

  // function saludar(){
  //   echo 'Hola';
  // }
  // saludar(); //=> Hola




  //=> 2) Funciones con parametros

  //-> Los parametros se usan para mandar valores a las funciones
  //-> La función trabajara con los parametros para realizar las acciones
  //-> Los parametros se asignan dentro de los '()' de la función

  // function saludarPersona( $emisor, $receptor ){
  //   echo 'Hola '.$receptor.' yo soy '.$emisor;
  // }
  // saludarPersona('Hector', 'Nico'); //=> Hola Nico yo soy Hector




  //=> 3) Funciones con retorno

  //-> Asi como le pasamos parametros a una funcion como datos de entrada
  //-> Tambien podemos devolvernos un valor como salda utilizando la palabra reservada return

  // function sumar( $num1, $num2 ){
  //   return $num1 + $num2;
  //   echo "No entrá aquí"; // Esto no se ejecutará ya que al utilizar return la función termina y nos devuelve un resultado, es decir que ejecuta hasta donde esté definido el return
  // }
  
  // echo 'El resultado es '.sumar(1,4); //=> El resultado es 5




  //=> 4) Funciones desempaquetando parametros
  //-> Es posible realizar funciones enviando n cantidad parametros
  //-> Para eso utilizamos el operador spread/splat dentro de la definición de los parametros de nuestra función, y le asignaremos un nombre para reconocerlo

  //-> ...$valores nos devolverá un array con los argumentos pasados por parametro
  //-> Ejemplo: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

  // function numeroMayor(...$valores){
  //   $mayor = 0;

  //   foreach($valores as $valor){
  //     if($valor > $mayor){
  //       $mayor = $valor;
  //     }
  //   }

  //   return $mayor;
  // }

  // echo numeroMayor(1,2,3,4,5); //=> 5




  //=> 5) Funciones en variables
  //-> Podemos almacenar una función dentro de una variable de la siguiente manera
  //-> Si existe una función con el mismo nombre que el string que le asignemos a la varable este podrá ser tratado como una función

  // function saludar(){
  //   echo 'Hola';
  // }

  // $saludo = 'saludar';
  // $saludo();




  //=> 6) Funciones anónimas
  //-> Tambien podemos definir funciones anónima dentro de variables de la siguiente manera:
  
  // $saludo = function($persona){
  //   echo 'Hola '.$persona;
  // };

  // $saludo('Mila');




  //=> 7) Funciones flecha
  //-> Para definir una función del tipo flecha usamos la palabra reservada 'fn' seguido de los '()'
  //-> Seguido de la '=>' escribiremos la acción que se realizará
  //-> Las funciones flecha tienen retorno implicito, es decir que no se declara un 'return' 
  // $restar = fn($x,$y) => $x - $y;
  // echo $restar(2,1);




  //=> 8) Funciones flecha autollamadas
  //-> Si definimos una función flecha dentro de unos parentesis '()' y luego lo autollamamos utilizando nuevamente los parentesis '()' de la siguiente manera:
  // (fn() => print('Hola'))();
  
?>