<?php
function mask($val, $mask)
{
 $maskared = '';
 $k = 0;
 for($i = 0; $i<=strlen($mask)-1; $i++)
 {
 if($mask[$i] == '#')
 {
 if(isset($val[$k]))
 $maskared .= $val[$k++];
 }
 else
 {
 if(isset($mask[$i]))
 $maskared .= $mask[$i];
 }
 }
 return $maskared;
}
include("../conexao.php");
// INICIA LIGAÇÃO À BASE DE DADOS
$con=mysqli_connect("localhost","root","","pds");

// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_errno())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

require_once("../Model/Fornecedor.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cidade = $_POST['telefone'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$cpf = mask($_POST['cpf'], '###.###.###-##');
$cnpj = mask($_POST['cnpj'], '##.###.###/####-##');

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql = "INSERT INTO fornecedor (id, nome, telefone, cidade, estado, endereco, email, cpf, cnpj) VALUES (NULL, '$nome', '$telefone', '$cidade', '$estado', '$endereco', '$email', '$cpf', '$cnpj')";


// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
// MOSTRA A MENSAGEM DE SUCESSO

mysqli_close($con);
header("Location:../View/confirmar_cadastro.php");

?>