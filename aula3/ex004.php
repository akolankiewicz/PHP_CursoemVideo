<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nome = "querido"; // pode mudar
    $sobrenome = "visitante";
    const PAIS = 'Brasil'; // nunca muda 
    echo "bem vindo $nome $sobrenome, você mora no " . PAIS;

    // "" pede interpretação de conteudo
    // '' não pede interpretação, só reescreve exatamante
    // $nom = 'arthur';
    // $sob = 'kolank';
    // $nomComp = "arthur $sob \n\t"; // interpreta
    // $nomCompleto = 'arthur + $sob\n'; // so reescreve
    // echo $nomComp, $nomCompleto;
    echo <<< TESTE
        ola 
        como ta
        tudo certo
    TESTE;


    ?>
</body>
</html>