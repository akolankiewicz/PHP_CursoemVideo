<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_REQUEST); // junçao de get post e cookies
            $nome = $_GET['nome'] ?? "visitante"; //?? qndo for vazio recebe os valores dps dos dois interrogacao 
            $sobrenome = $_GET['sobrenome'] ?? "";
            echo "bem vindo <strong>$nome $sobrenome</strong>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>
</html>