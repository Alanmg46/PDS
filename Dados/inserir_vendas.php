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

require_once('../model/Venda.php');

$data_venda = $_POST['data'];
$cliente = $_POST['cliente'];
$_produto = $_POST['produto'];
$produto = implode(", ", $_produto);
$_valor = $_POST['valor'];
$valor = implode("+=", $_valor);
$desconto = $_POST['desconto'];
$valorTotal = $valor;

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql = "INSERT INTO `vendas` (`id`, `data_venda`, `cliente`, `produto`, `desconto`, `valor_total`) VALUES (NULL, '$data_venda', '$cliente', '$produto', '$desconto', '$valorTotal')";


// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
// MOSTRA A MENSAGEM DE SUCESSO
header("Location:../view/confirmar_cadastro.php");

mysqli_close($con);

?>