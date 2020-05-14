<?php
    include_once ('viacep.php');
    $addres = getAddres();
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
        <input type="text" placeholder="Digite um cep..." name="cep" value="<?php echo $addres->cep?>">
        <input type="submit"><br>
        <input type="text" placeholder="rua" name="rua" value="<?php echo $addres->logradouro?>"><br>
        <input type="text" placeholder="bairro" name="bairro" value="<?php echo $addres->bairro?>"><br>
        <input type="text" placeholder="cidade" name="cidade" value="<?php echo $addres->localidade ?>"><br>
        <input type="text" placeholder="estado" name="estado" value="<?php echo $addres->uf ?>"><br>
    </form>
</body>
</html>
