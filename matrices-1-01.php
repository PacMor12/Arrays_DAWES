
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dado.
    Matrices (1). Sin formularios.
    Fran Morales
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Dado</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
  $dado = ["uno", "dos", "tres", "cuatro", "cinco", "seis"];
  $aleatorio = mt_rand(1,6);

?>
<img src="img/<?php echo $aleatorio ?>.svg" alt=""/>
<?php
  printf("<br/> Has sacado un <b>%s</b>",$dado[$aleatorio-1]);
?>
  <footer>
    <p>Fran Morales</p>
  </footer>
</body>
</html>
