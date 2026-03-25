<?php
$sql = "SELECT * FROM produtos OSDER BY id Desc";
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>]

    <form action="salvar,php" method="post">
    <label>Nome</label>
    <input type="text" name="nome" required>    
</body>
</html>