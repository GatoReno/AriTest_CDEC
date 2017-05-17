<?php
/*Consejo, para manejar objetos sin bd y con bd
arrays let's try TokyoTyrantQuery*/


function portada($ofertas_id,$ofertas){

  $respuesta = "";
  $respuesta = $respuesta . '<div class="col-md-4">';
  $respuesta = $respuesta . '<h2>'.$ofertas["nombre"].'</h2>';
  $respuesta = $respuesta . '<img height="350" width="250" class="img-rounded img-responsive	" src="'.$ofertas["url"].'" alt="'.$ofertas["nombre"];
  $respuesta = $respuesta . '<br>';
  $respuesta = $respuesta . '<label for="">precio:</label><p>';
  $respuesta = $respuesta .  $ofertas["precio"];
  $respuesta = $respuesta . '</p>';
  $respuesta = $respuesta . '<label for="">descripcion:</label><p>';
  $respuesta = $respuesta . $ofertas["descripcion"];
  $respuesta = $respuesta . '<br>';
  $respuesta = $respuesta . '<br>';
  $respuesta = $respuesta . '</<p><a class="btn btn-default" href="producto.php?id='.$ofertas_id.'" role="button">View details &raquo;</a></p></div>';



  return $respuesta;

}

$ofertas= array();

$ofertas[001] = array(
  "nombre" => "articulo_1",
  "descripcion" => "camisa de manga larga",
  "url" => "img/sf.jpeg",
  'precio'=> 1000
);

$ofertas[002] = array(
  "nombre" => "articulo_2",
  "descripcion" => "camisa de manga larga",
  "url" => "img/cursty.png",
  'precio'=> 1000
);

$ofertas[003] = array(
  "nombre" => "articulo_3",
  "descripcion" => "camisa de manga larga",
  "url" => "img/sf.jpeg",
  'precio'=> 1000
);

$ofertas[004] = array(
  "nombre" => "articulo_4",
  "descripcion" => "camisa de manga larga",
  "url" => "img/sf.jpeg",
  'precio'=> 1000
);

$ofertas[005] = array(
  "nombre" => "articulo_5",
  "descripcion" => "camisa de manga larga",
  "url" => "img/sf.jpeg",
  'precio'=> 1000
);
$ofertas[006] = array(
  "nombre" => "articulo_6",
  "descripcion" => "camisa de manga larga",
  "url" => "img/sf.jpeg",
  'precio'=> 1000
);
$ofertas[007] = array(
  "nombre" => "articulo_7",
  "descripcion" => "camisa de manga larga",
  "url" => "img/sf.jpeg",
  'precio'=> 1000
);
$ofertas[008] = array(
  "nombre" => "articulo_8",
  "descripcion" => "camisa de manga larga",
  "url" => "img/sf.jpeg",
  'precio'=> 1000
);

 ?>
