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
  <link rel="stylesheet" href="ejercicios.css" title="Color">;
  <style>
    .estilo{
      font-size: 150px;
      text-align: center;
    }
  </style> 
</head>

<body>
  <h1>Hombres y mujeres haciendo deporte</h1>

  <p>Actualice la página para mostrar un nuevo dibujo.</p>

<?php
  $emoji = ["&#x1f3c4;&#x200d;&#x2642;" , "&#x1f3c4;&#x200d;&#x2640;", "&#x1F57A;&#x1F3FB;", "&#x1F483;&#x1F3FB"];
  $valor = ["Hombre surfeando", "Mujer surfeando", "Hombre bailando", "mujer bailando"];
  
  $codigo = ["#x1f3c4;&#x200d;&#x2642;", "#x1f3c4;&#x200d;&#x2640;", "#x1F57A;&#x1F3FB;", "#x1F483;&#x1F3FB"];

  $NumAleatorio = mt_rand(0,3);

  printf("<h1><b>%s</b></h1> <p class='estilo'>%s</p> <br/> <h2><b>Secuencia Unicode del emoji</b></h2> &amp%s", $valor[$NumAleatorio], $emoji[$NumAleatorio], $codigo[$NumAleatorio]);
?>

  <footer>
    <p>Fran Morales</p>
  </footer>
</body>
</html>

