<?php 
include("../conexao.php");
$consulta = "SELECT * FROM produto";
$con = $mysqli->query($consulta) or die($mysqli->error);
header('Content-Type: text/html; charset=utf-8');
    //Recebe os dados com as alterações feitas
    $id = filter_input(INPUT_POST, 'id');
    $_descricao = filter_input(INPUT_POST, 'descricao');

    //Estabelece a conexão com o mysql
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt update query execution
$sql = "UPDATE produto SET nome='$_nome', descricao = '$_descricao' WHERE id= $id";
if($mysqli->query($sql) === true){
    header('location: consulta_produto.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>