<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <main>
    <h1>Calculando sua Idade</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="get">
    Preço: <input type="number" step="0.001" name="preco"> <br><br>

    Percentual de aumento:  <span id="p">?</span>%<input oninput="mudaValor()" type="range" min="0" max="100" step="1" name="reajuste" id="reaj">  <br><br>
   
    <input type="submit" value="Mostrar Divisão">
    </main>

    <?php 
    $preco1 = $_REQUEST['preco'] ?? 0;
    $preco = intval($preco1);
    $reajuste = $_REQUEST['reajuste'] ?? 0;
    $reaj = intval($reajuste);
    $reajustado = $preco*(1+($reaj/100)) ?? 0;
    
    ?>
    <section>
        <h1>Resultados</h1>
        <p><?php echo "A porcentagem de aumento foi de <strong>R$$reajuste</strong>"?></p>
        <p><?php echo "O Produto passa a valer <strong>R$$reajustado</strong>"?></p>
</form>
<script>
    function mudaValor(){
        p.innerText = reaj.value
    }
</script>
</body>
</html>