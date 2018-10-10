<?php

include("../conexao.php");
// INICIA LIGAÇÃO À BASE DE DADOS
$con=mysqli_connect("localhost","root","","pds");

// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$descricao = $_POST['descricao'];
$valor = $_POST['valor'];

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql = "INSERT INTO produto (id, descricao, valor) VALUES (NULL, '$descricao', '$valor')";


// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
// MOSTRA A MENSAGEM DE SUCESSO

mysqli_close($con);
header("location:confirmar_cadastro.php");

?>