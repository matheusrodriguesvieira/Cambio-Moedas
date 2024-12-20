<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Moedas</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    try {
        $wsdl ='https://www3.bcb.gov.br/sgspub/JSP/sgsgeral/FachadaWSSGS.wsdl';
        $client = new SoapClient($wsdl);

        $result = $client->getUltimoValorVO(10813);
        $valorDolar = $result->ultimoValor->valor;

    } catch (SoapFault $e) {
        echo $e->getMessage();
    }
    ?>
    <div class="main-container">
        <div class="left-container">
            <h1>Digite o valor em Reais</h1>
            <div class="label-container">
                <label for="valor-reais">R$</label>
                <input id="valor-reais" type="number">
            </div>
        </div>
        <div class="right-container">
            <h1>Este é o valor em dolar</h1>
            <div class="label-container">
                <label for="valor-dolar">US$</label>
                <input id="valor-dolar" type="number" disabled>
            </div>
        </div>
    </div>
</body>
<script>
    const valorDolar = <?php echo $valorDolar?>
</script>
<script src="index.js"></script>
</html>