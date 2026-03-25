<?php
$servidor =  "localhost";
$usuario = "root";
$senha = "";
$banco = "produ";

$conexao = myqli_ connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("Erro de conexao:".mysqli_connetc_erro());
}
?>