<?php
    include_once ('postmon.php');
    $address = getAddress();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumindo API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="." method="post">
        <p>Digite o CEP para encontrar o endereço.</p>
        <input type="text" placeholder="Digite um cep..." name="cep" value="<?php echo $address->cep?>">
        <input type="submit"><br>
        <input type="text" placeholder="rua" name="rua" value="<?php echo $address->logradouro?>"><br>
        <input type="text" placeholder="bairro" name="bairro" value="<?php echo $address->bairro?>"><br>
        <input type="text" placeholder="cidade" name="cidade" value="<?php echo isset($address->localidade) ? $address->localidade : $address->cidade?>"><br>
        <input type="text" placeholder="estado" name="estado" value="<?php echo isset($address->uf) ? $address->uf : $address->estado?>"><br>
    </form>
</body>
</html>