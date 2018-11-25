<?php 
include("../conexao.php");
$consulta = "SELECT * FROM cliente";
$con = $mysqli->query($consulta) or die($mysqli->error);
header('Content-Type: text/html; charset=utf-8');
    //Recebe os dados com as alterações feitas
    $id = filter_input(INPUT_POST, 'id');
    $_data = filter_input(INPUT_POST, 'data_venda');
    $_cliente = filter_input(INPUT_POST, 'cliente');
    $_produto = filter_input(INPUT_POST, 'produto');
    $_desconto = filter_input(INPUT_POST, 'desconto');
    $_valorT = filter_input(INPUT_POST, 'valor_total');

    //Estabelece a conexão com o mysql
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt update query execution
$sql = "UPDATE `vendas` SET `data_venda` = '$_data', `cliente` = '$_cliente', `produto` = '$_produto', `desconto` = '$_desconto', `valor_total` = '$_valorT' WHERE `vendas`.`id` = '$id';";
if($mysqli->query($sql) === true){
    header('Location:../view/confirmar_edicao.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>