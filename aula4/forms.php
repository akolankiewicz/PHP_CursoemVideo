<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css.css">
    <style>
    </style>
</head>
<body>
    <section>
        <h1>Apresente-se para nós</h1>
        <form action="cad.php" method="get"> <!-- importantissimo -->
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="idnome">     
            <label for="sobrenome">Sobrenome</label> 
            <input type="text" name="sobrenome" id="idsobrenome">       
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>