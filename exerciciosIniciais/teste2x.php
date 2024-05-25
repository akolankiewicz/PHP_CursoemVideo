<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aula4/css.css">
</head>
<body>
    <h1>Gerador de número aleatoório</h1>
<?php
    $ini = $_GET['ini'] ?? "digite os valores antes de pedir resultado";
    $fin = $_GET['fin'] ?? ""; 
	echo rand($ini, $fin);
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>


</body>
</html>