<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Animales.
    Matrices (1). Sin formularios.
    Fran Morales
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php
  $animales = ["ballena", "caballito-mar","camello", "cebra", "elefante", "hipopotamo", "jirafa", "leon", "leopardo", "medusa",
  "mono","oso-blanco", "oso", "pajaro", "pinguino", "rinoceronte", "serpiente", "tigre", "tortuga-marina", "tortuga"];
  $aleatorio = mt_rand(0,19);


?>
<img src="img/animales/<?php echo $animales[$aleatorio] ?>.svg" alt=""/>
  <footer>
    <p>Fran Morales</p>
  </footer>
</body>
</html>
