<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Dólar para Real</title>
</head>

<body>
    <h2>Conversor de Dólar para Real</h2>
    <form method="POST" action="">
        <label for="valorDolar">Digite o valor em dólares:</label>
        <input type="number" name="valorDolar" id="valorDolar" step="any" required>
        <br><br>
        <input type="submit" value="Converter">
    </form>

    <?php
    
    function converterDolarParaReal($valorEmDolar) {
        $cotacaoDolar = 5.48;
        $valorEmReal = $valorEmDolar * $cotacaoDolar;

       
        return round($valorEmReal, 2);
    }

 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorDolar = floatval($_POST['valorDolar']);

    
        if ($valorDolar > 0) {
            $valorConvertido = converterDolarParaReal($valorDolar);
            echo "<h3>O valor de $ " . number_format($valorDolar, 2, ',', '.') . " equivale a R$ " . number_format($valorConvertido, 2, ',', '.') . "</h3>";
        } else {
            echo "<h3>Por favor, insira um valor positivo.</h3>";
        }
    }
    ?>

</body>

</html>
