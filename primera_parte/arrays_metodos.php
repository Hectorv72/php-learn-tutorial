<?php
  ///? METODOS DE ARRAYS EN PHP

  $array_elementos = [
    'clave1' => 'valor 1',
    'clave2' => 'valor 2',
    'clave3' => 'valor 3'
  ];

  //=> Método count()
  //-> Obtener la cantidad de elementos dentro del array
  // echo count($array_elementos); //=> 3


  //=> Método array_keys()
  //-> Obtener todas las claves dentro del array
  // print_r(array_keys($array_elementos)); //=> Array ( [0] => clave1 [1] => clave2 [2] => clave3 )


  //=> Método array_values()
  //-> Obtener todos los valores dentro del array
  // print_r(array_values($array_elementos)); //=> Array ( [0] => valor 1 [1] => valor 2 [2] => valor 3 )


  //=> Método array_search()
  //-> Buscar y obtener la clave o posición del elemento con el valor especificado
  //-> En caso de no encontrarlo devuelve false
  // $elemento_buscado = array_search('valor 3', $array_elementos); 
  // echo $elemento_buscado; //=> clave3


  //=> Método in_array()
  //-> Busca si existe un elemento con el valor especificado
  //-> En caso de encontrarlo devuelve true, en caso contrario devuelve false
  // var_dump(in_array('valor 1', $array_elementos));


  //=> Método array_key_exists()
  //-> Busca si existe una clave o posición en el array
  //-> En caso de encontrarlo devuelve true, en caso contrario devuelve false
  // var_dump(array_key_exists('clave1',$array_elementos));


  //=> Método array_merge()
  //-> Fusiona 2 o más arrays en uno solo
  //-> En caso de que un elemento contenga el mismo nombre clave este será modificado
  // $array_otros = [
  //   'clave3' => 'valor 5',
  //   'clave4' => 'valor 4'
  // ];
  // $array_fusionado = array_merge($array_elementos,$array_otros);
  // print_r($array_fusionado); //=> Array ( [clave1] => valor 1 [clave2] => valor 2 [clave3] => valor 5 [clave4] => valor 4 )


  //=> Método array_intersect()
  //-> Devuelve los elementos que intersectan entre 2 o más arrays
  // $array_clon = [
  //   'clave1' => 'valor 1',
  //   'clave3' => 'valor 3',
  //   'clave4' => 'valor 4'
  // ];
  // print_r(array_intersect($array_elementos, $array_clon)); //=> Array ( [clave1] => valor 1 [clave3] => valor 3 )


  //=> Método array_slice()
  //-> Extraer una parte del array desde una posición especifica
  // $array_sliced = array_slice($array_elementos,1,1);
  // print_r($array_sliced); //=> Array ( [clave2] => valor 2 )


  //=> Método array_walk()
  //-> Recorrer cada uno de los elementos de un array por medio de una función
  //-> array_walk() por cada elemento nos permite obtener el valor y también su clave
  // array_walk($array_elementos,function($valor,$clave){
  //   echo 'index: '.$clave.' valor: '.$valor.'<br>';
  // });


  //=> Método array_filter()
  //-> Filtrar los elementos de un array por medio de una función
  // $array_filtrado = array_filter($array_elementos,function($valor){
  //   if ( $valor == 'valor 2' ){
  //     return $valor;
  //   }
  // });
  // print_r($array_filtrado); //=> Array ( [clave2] => valor 2 )


  //=> Método array_map()
  //-> Recorrer los elementos de un array por medio de una función y devolver un valor por cada elemento del array
  // function recorrer($valor){
  //   return $valor.' modificado';
  // }
  // $array_mapeado = array_map('recorrer',$array_elementos);
  // print_r($array_mapeado); //=> Array ( [clave1] => valor 1 modificado [clave2] => valor 2 modificado [clave3] => valor 3 modificado )

?>