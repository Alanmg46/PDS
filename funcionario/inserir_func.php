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

$_funcao = $_POST['funcao'];
$funcao = implode(",", $_funcao);
$nome = $_POST['nome'];
$identidade = $_POST['identidade'];
$carteira = $_POST['carteira'];
$salario = $_POST['salario'];
$conta = $_POST['conta'];
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
$observacao = $_POST['observacao'];

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql = "INSERT INTO funcionario (id, nome, identidade, carteira, salario, funcao, conta, datanasc, telefone, cep, endereco, email, cpf, cnpj, observacao) VALUES (NULL, '$nome', '$identidade', '$carteira', '$salario', '$funcao', '$conta', '$data', '$telefone', '$cep', '$endereco', '$email', '$cpf', '$cnpj', '$observacao')";


// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
// MOSTRA A MENSAGEM DE SUCESSO
header("Location:confirmar_cadastro.php");

mysqli_close($con);

?>