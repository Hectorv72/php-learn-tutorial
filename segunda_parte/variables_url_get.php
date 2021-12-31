<?php 
  ///? ENVIO DE DATOS POR URL CON METODO GET EN PHP
?>

<a href="?saludo=Nico"><button>Nico</button></a>
<a href="?saludo=Hola Mila"><button>Hola Mila</button></a>
<a href="?saludo=Victor"><button>Victor</button></a>
<br><br>

<?php
  if($_GET){
    if(isset($_GET['saludo'])){
      printf("Saludando a %s",$_GET['saludo']);
    }
  } else {
    echo "Esperando parametros";
  }
?>