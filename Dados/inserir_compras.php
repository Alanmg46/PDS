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

require_once('../model/Compra.php');

$data = $_POST['data'];
$quantidade = $_POST['quantidade'];
$preco_unit = $_POST['preco_unit'];
$valorTotal = ($preco_unit * $quantidade);
$desconto = $_POST['desconto'];
$produtoId = $_POST['produto'];
$fornecedor_id = $_POST['fornecedor'];

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql = "INSERT INTO `compras` (`id`, `data_compra`, `quantidade`, `preco_unit`, `valor_total`, `desconto`, `produto_id`, `fornecedor_id`) VALUES (NULL, '$data', '$quantidade', '$preco_unit', '$valorTotal', '$desconto', '$produtoId', '$fornecedor_id')";


// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
// MOSTRA A MENSAGEM DE SUCESSO
header("Location:../view/confirmar_cadastro.php");

mysqli_close($con);

?>