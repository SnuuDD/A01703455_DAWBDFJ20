<?php 

  require_once('script.php');
  $arreglo = array();
  $limit = 10;
  for($i=1;$i<=$limit;$i++){
    $num_aleatorio = rand(1,100);
    array_push($arreglo,$num_aleatorio);
  }

  $arreglo2 = array();
  for($i=1;$i<=$limit;$i++){
    $num_aleatorio = rand(1,1000);
    array_push($arreglo2,$num_aleatorio);
  }

  $nomesalioXD = showTb(8);

  include("partials/_header.html");  

  include("partials/_body.html"); 
  
  

  include("partials/_footer.html"); 
  //phpinfo();

  //Creamos una serie de numeros aleatorios
 //  AYUDA ME VOY A 
  //$promedio = average($arreglo);
  //echo "<pre>";
  //print_r($arreglo);
  //echo "</pre>";

?>