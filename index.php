<?php

//conexao como banco de dados//

$conn = new mysqli('localhost', 'root','','cadastro');  

//CRUD//



//CRIAR UM REGISTRO NA TABELA//

// $sql = "INSERT INTO Clientes VALUES('','AUGUSTO', 'PEDRO@GMAIL.COM', 'SAO ROQUE', 'SP')";
// $conn->query($sql);

//LER UMA TABELA//

$sql = 'SELECT * FROM Clientes';
$result = $conn->query($sql);

//ATUALIZANDO UM REGISTRO NA TABELA//

$sql = "UPDATE Clientes SET nome = 'ROGER' WHERE nome = 'MARTA'";
$conn->query($sql);

//DELETAR UM REGISTRO DA TABELA//
$sql = "DELETE FROM Clientes WHERE id = 4";
$conn->query($sql);

while($rs = $result->fetch_object()) {

    var_dump($rs);
}

?>