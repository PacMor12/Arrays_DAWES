<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
 <title>
   Hombres y mujeres haciendo deporte.
   Matrices (1). Sin formularios.
   Fran Morales
 </title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
 <h1>Hombres y mujeres haciendo deporte</h1>


 <p>Actualice la página para mostrar un nuevo dibujo.</p>


<?php


  $emoji = ["Hombre policia"=>"&#xe152;","Mujer policia" => "&#x1f46e; &#x200d; &#x2640; &#xfe0f;", "Maestra" => "&#x1f469;&#x200d;&#x1f3eb;", "Maestro" => "&#x1f468;&#x200d;&#x1f3eb;", "Científica" => "&#x1f469;&#x200d;&#x1f52c;", "Científico" => "&#x1f468;&#x200d;&#x1f52c;", "Jugador de balonmano"  => "&#x1f93e; &#x200d; &#x2642; &#xfe0f;", "Jugadora de balonmano" => "&#x1F93E;&#x200D;&#x2640;&#xFE0F;"];
  $claves = array_keys($emoji);
  $random = $claves[array_rand($claves)];
  
?>

<p style="font-size:50px">
  <?php
  echo $emoji[$random];
  ?>
</p>
 <footer>
   <p>Fran Morales</p>
 </footer>
</body>
</html>


