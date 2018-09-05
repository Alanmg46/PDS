<?php 
include("../conexao.php");
$consulta = "SELECT * FROM funcionario";
$con = $mysqli->query($consulta) or die($mysqli->error);
header('Content-Type: text/html; charset=utf-8');
    //Recebe os dados com as alterações feitas
            $id = filter_input(INPUT_POST, 'id');
            $_nome = filter_input(INPUT_POST, 'nome');
            $_identidade = filter_input(INPUT_POST, 'identidade');
            $_carteira = filter_input(INPUT_POST, 'carteira');
            $_salario = filter_input(INPUT_POST, 'salario');
            $_funcao = filter_input(INPUT_POST, 'funcao');
            $_conta = filter_input(INPUT_POST, 'conta');
            $_datanasc = filter_input(INPUT_POST, 'data');
            $_telefone = filter_input(INPUT_POST, 'telefone');
            $_cep = filter_input(INPUT_POST, 'cep');
            $_endereco = filter_input(INPUT_POST, $endereco);
            $_email = filter_input(INPUT_POST, 'email');
            $_cpf = filter_input(INPUT_POST, 'cpf');
            $_cnpj = filter_input(INPUT_POST, 'cnpj');
            $_observacao = filter_input(INPUT_POST, 'observacao');

    //Estabelece a conexão com o mysql
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt update query execution
$sql = "UPDATE funcionario SET nome='$_nome', identidade = '$_identidade', carteira = '$_carteira', salario = '$_salario', funcao = '$_funcao', conta = '$_conta', datanasc = '$_datanasc', telefone = '$_telefone', cep = '$_cep', endereco = '$_endereco', email = '$_email', cpf = '$_cpf', cnpj = '$_cnpj', observacao = '$_observacao' WHERE id= $id";
if($mysqli->query($sql) === true){
    header('location: consulta_func.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>