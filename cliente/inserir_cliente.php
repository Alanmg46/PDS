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


$nome = $_POST['nome'];
$data = mask($_POST['data'], '##/##/####');
$telefone = $_POST['telefone'];
$cep = mask($_POST['cep'], '#####-###');
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $rua. ', '.$numero.', '.$bairro.', '.$cidade.', '.$estado;
$email = $_POST['email'];
$cpf = mask($_POST['cpf'], '###.###.###-##');
$cnpj = mask($_POST['cnpj'], '##.###.###/####-##');

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql = "INSERT INTO cliente (id, nome, datanasc, telefone, cep, endereco, email, cpf, cnpj) VALUES (NULL, '$nome', '$data', '$telefone', '$cep', '$endereco', '$email', '$cpf', '$cnpj')";


// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
// MOSTRA A MENSAGEM DE SUCESSO
header("Location:confirmar_cadastro.php");

mysqli_close($con);

?>