<?php

  ///? ARRAYS EN PHP

  //* Un array en PHP es en realidad un mapa ordenado.
  //* Un mapa es un tipo de dato que asocia valores con claves.
  //* Este tipo se optimiza para varios usos diferetes, se puede emplear como:
  //* Array, Lista(Vector), Diccionario, Pila, Cola, Tabla asociativa.
  //* Un array en PHP puede ser multidimensional ya que los valores de un array tambien pueden ser otros arrays.


  //=> 1) Declaración de arrays

  //-> Un array puede ser definido o creado de 2 maneras
  //-> Utilizado el constructor del lenguaje array()
  //-> Este toma cualquier número de parejas clave => valor como argumentos

  // $primer_array = array(
  //   'clave1' => 'valor1',
  //   'clave2' => 'valor2',
  //   'clave3' => 'valor3',
  // );

  //-> A partir de PHP 5.4 también se puede usar la sintaxs más corta
  //-> Se reemplaza array() con []
  // $segundo_array = [
  //   'clave1' => 'valor1',
  //   'clave2' => 'valor2',
  //   'clave3' => 'valor3',
  // ];




  //=> 2) Arrays indexados sin clave

  // $array_sin_clave = ['val1','val2','val3'];
  // print_r($array_sin_clave); //=> Array ( [0] => val1 [1] => val2 [2] => val3 )




  //=> 3) Imprimir valores de un array

  // $array_datos_libro = [
  //   'titulo'    => 'Harry Potter',
  //   'categoria' => 'Fantasia'
  // ];

  //-> Si queremos utilizar echo php nos avisara que no se puede convertir un array a string
  // echo $array_datos_libro;

  //-> Es por eso que utilizamos print_r() que permite escribir en pantalla la informacion de forma legible para el usuario
  // print_r($array_datos_libro);




  //=> 4) Amoldamientos de clave en arrays

  //-> Las claves de un Array pueden ser un integer, string, float, boolean
  //-> Dependiendo del tipo pueden surgir amoldamientos de clave. como por ej:

  //-> Strings que contiene decimal valido sera amoldado a tipo integer.
  //-> Ejemplo: "1" => 1

  // $array_string = [
  //   "1"  => 'Valor1',
  //   "2"  => 'Valor2',
  //   "03" => 'Valor3', // No será amoldado a un integer de 3
  // ];
  
  // print_r($array_string); //=> Array ( [1] => Valor1 [2] => Valor2 [03] => Valor3 )


  //-> Floats seran amoldados a integer, lo que significa que la parte fraccionaria se elimina.
  //-> Ejemplo: 1.55 => 1

  // $array_float = [
  //   1.55 => 'Valor1',
  //   2.86 => 'Valor2',
  // ];
  // print_r($array_float); //=> Array ( [1] => Valor1 [2] => Valor2 )


  //-> Booleans son amoldados a integers es decir
  //-> true => 1 y false => 0
  // $array_boolean = [
  //   false => 'valor falso',
  //   true  => 'valor verdadero'
  // ];
  // print_r($array_boolean); //=> Array ( [0] => valor falso [1] => valor verdadero )


  //-> Si varios elementos en la declaración del array usan la misma clave
  //-> Solo se utilizara la ultima, siendo los demas sobrescritos
  // $array_sobrescrito = [
  //   1    => 'valor integer',
  //   '1'  => 'valor string',
  //   1.5  => 'valor float',
  //   true => 'valor boolean',
  // ];
  // print_r($array_sobrescrito); //=> Array ( [1] => valor boolean )




  //=> 5) Metodos de agregación y eliminación en arrays de PHP

  //-> Para insertar uno o más elementos al final de un array utilzamos array_push()
  // $array_valores = ['valor 1'];
  // array_push($array_valores, 'valor 2', 'valor 3', 'valor 4', 'etc');
  // print_r($array_valores); //=> Array ( [0] => valor 1 [1] => valor 2 [2] => valor 3 [3] => valor 4 [4] => etc )


  //-> Para insertar uno o más elementos al inicio de un array utilizamos array_unshift()
  // $array_valores = ['valor 3'];
  // array_unshift($array_valores, 'valor 1', 'valor 2');
  // print_r($array_valores); //=> Array ( [0] => valor 1 [1] => valor 2 [2] => valor 3 )


  //-> Para eliminar el ultimo elemento del array utilizamos array_pop()
  // $array_valores = ['valor 1', 'valor2', 'valor 3'];
  // array_pop($array_valores);
  // print_r($array_valores); //=> Array ( [0] => valor 1 [1] => valor2 )


  //-> Para eliminar el primer elemento del array utilizamos array_shift();
  // $array_valores = ['valor 1', 'valor2', 'valor 3'];
  // array_shift($array_valores);
  // print_r($array_valores); //=> Array ( [0] => valor2 [1] => valor 3 )

  //-> Para eliminar elementos desde una posicion posición y cantidad especifica de elementos utilizamos array_splice()
  // $array_valores = ['valor 1', 'valor2', 'valor 3'];
  // array_splice($array_valores,0,1);
  // print_r($array_valores); //=> Array ( [0] => valor2 [1] => valor 3 )


  //-> Para eliminar un elemento con una clave o en una posicion especifica del array utilizamos unset()
  //-> De esta manera el array no se reindexará, es decir, que los elementos del array mantendran sus posiciones previamente definidas
  // $array_valores = ['valor 1', 'valor2', 'valor 3'];
  // unset($array_valores[1]);
  // print_r($array_valores); //=> Array ( [0] => valor 1 [2] => valor 3 )

  //-> Si lo que necesitamos es reindexar el array luego de haber eliminado un valor
  //-> Podemos hacer uso del metodo array_values() que nos devolverá todos los valores que contenga nuestro array
  //-> Luego redefinimos nuestro array pero ahora con los valores que contiene el mismo array
  // $array_valores = array_values($array_valores);
  // print_r($array_valores); //=> Array ( [0] => valor 1 [1] => valor 3 )




  //=> 6) Metodos de agregación, modificación de arrays en PHP utilizando la sintaxis de corchetes

  //-> Para insertar elementos en el array podemos hacer de la siguiente manera
  // $array_valores = ['valor 1'];
  // $array_valores[] = 'valor 2';
  // $array_valores[] = 'valor 3';
  // print_r($array_valores); //=> Array ( [0] => valor 1 [1] => valor 2 [2] => valor 3 )


  //-> Tambien podemos insertar valores asignandole una clave que lo identificará
  // $array_elementos = [
  //   'clave1' => 'valor 1'
  // ];
  // $array_elementos['clave2'] = 'valor 2';
  // print_r($array_elementos); //=> Array ( [clave1] => valor 1 [clave2] => valor 2 )


  //-> Si queremos modificar un elemento especifico por posición lo podemos hacer de la siguiente manera:
  // $array_valores = ['valor 1', 'valor 2', 'valor 3'];
  // $array_valores[1] = 'valor modificado';
  // print_r($array_valores); //=> Array ( [0] => valor 1 [1] => valor modificado [2] => valor 3 )


  //-> Si contamos con una clave identificadora lo haremos de la siguiente manera:
  // $array_elementos = [
  //   'clave1' => 'valor 1',
  //   'clave2' => 'valor 2',
  //   'clave3' => 'valor 3'
  // ];
  // $array_elementos['clave2'] = 'valor modificado';
  // print_r($array_elementos); //=> Array ( [clave1] => valor 1 [clave2] => valor modificado [clave3] => valor 3 )




  //=> 7) Obtener el valor de una posicion especifica
  //-> Para eso solo debemos especificar la posición o clave del valor que queremos obtener
  // $array_valores = ['valor 1', 'valor 2', 'valor 3'];
  // echo $array_valores[2]; //=> valor 3

  // $array_elementos = [
  //   'clave1' => 'valor 1',
  //   'clave2' => 'valor 2',
  //   'clave3' => 'valor 3'
  // ];
  // echo $array_elementos['clave2']; //=> valor 2




  //=> 8) Asignar variables como si fueran un array con LIST
  //-> Al igual que array(), no es realmente una función, es un constructor del lenguaje, list() se utiliza para asignar una lista de variables en una sola operación.

  //-> list() solo funciona con arrays numéricos y supone que los indices numericos empiezan en 0.

  // $array_valores = ['Nico','Mila','Victor'];
  // list($hombre,$mujer,$enano) = $array_valores;
  // echo $hombre.'<br>'; //=> Nico
  // echo $mujer.'<br>';  //=> Mila
  // echo $enano.'<br>';  //=> Victor




  //=> 9) Operador spread/splat en php
  //-> A partir de php 5.6.x ahora es posible desempaquetar arrays mediante ...
  //-> IMPORTANTE, solo se puede desempaquetar arrays que esten indexadas con valores integer
  //-> En caso de que lo querramos usar con arrays que contengan claves de tipo string este nos arrojará un fatal error
  // $array_elementos = [1,2,3,4,5];
  // print_r([6,...$array_elementos]); //=> Array ( [0] => 6 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 )

?>