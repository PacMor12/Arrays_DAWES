<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada de dados.
    Matrices (1). Sin formularios.
    Fran Morales
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicios.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
  $dados = [
    "1"=> mt_rand(2,6),
    "2"=> mt_rand(2,6),
    "3"=> mt_rand(2,6)
  ];

?>
<img src="img/<?php echo $dados[1] ?>.svg" alt=""/>
<img src="img/<?php echo $dados[2] ?>.svg" alt=""/>
<img src="img/<?php echo $dados[3] ?>.svg" alt=""/>
<?php
  printf("<p> Los valores obtenidos son: %d, %d, %d </p>", $dados[1], $dados[2], $dados[3]);
?>
  <footer>
    <p>Fran Morales</p>
  </footer>
</body>
</html>
