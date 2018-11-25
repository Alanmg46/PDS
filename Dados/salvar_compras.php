<?php 
include("../conexao.php");
$consulta = "SELECT * FROM cliente";
$con = $mysqli->query($consulta) or die($mysqli->error);
header('Content-Type: text/html; charset=utf-8');
    //Recebe os dados com as alterações feitas
    $id = filter_input(INPUT_POST, 'id');
    $_data = filter_input(INPUT_POST, 'data_compra');
    $_quantidade = filter_input(INPUT_POST, 'quantidade');
    $_preco = filter_input(INPUT_POST, 'preco_unit');
    $_valorT = filter_input(INPUT_POST, 'valor_total');
    $_desconto = filter_input(INPUT_POST, 'desconto');
    $_produto = filter_input(INPUT_POST, 'produto');
    $_fornecedor = filter_input(INPUT_POST, 'fornecedor');

    //Estabelece a conexão com o mysql
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt update query execution
$sql = "UPDATE `compras` SET `data_compra` = '$_data', `preco_unit` = '$_preco', `valor_total` = '$_valorT', `desconto` = '$_desconto', `produto_id` = '$_produto', `fornecedor_id` = '$_fornecedor' WHERE `compras`.`id` = '$id';";
if($mysqli->query($sql) === true){
    header('Location:../view/confirmar_edicao.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>