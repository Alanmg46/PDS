<?php
    include("../conexao.php");
    $id = filter_input(INPUT_POST, 'id'); 
    //recebe o id dos dados que serão apagados
    //estabelece a conexão
    $conexao = mysqli_connect("localhost","root","","pds");
    if( !$conexao ){
        echo "Ops.. Erro na conexão.";
        exit;
    }
    //Executa a query
    $sql = "DELETE FROM compras WHERE id = $id";
    $remove = mysqli_query($conexao, $sql);
    //Se falhou, redireciona pra exibe.php com remove igual a false 
    if( !$remove ){
        echo($id);
        exit;
    }
    //se tudo deu certo, redireciona pra exibe.php com remove igual a true
    header("Location:../view/confirmar_exclusao.php");
?>