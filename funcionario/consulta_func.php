<?php

include("../conexao.php");
$consulta = "SELECT * FROM funcionario";
$con = $mysqli->query($consulta) or die($mysqli->error);
header('Content-Type: text/html; charset=utf-8');
?>

<html>
    <head>
         <title>Projeto de Desenvolvimento de Sistemas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta http-equiv=”content-type” content=”text/html; charset=UTF-8″ />
        <style>
           table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
        </style>
        <meta charset="UTF-8">
    </head>


<body style="background-color: #ededed;">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div style="z-index: 1; background-image: linear-gradient(to left, #3c82eb, #00adff, #00cdde, #00e389, #a8eb12); width: 100%; height: 3em; font-size: 1.5em; font-family: 'Raleway', sans-serif;"><div style="
    top: 20%; text-align: center; font-weight: bold; color: white;">Projeto de Desenvolvimento de Sistemas</div></div>
    </div>
  </div>
  <div class="row" style="width: 100%;">
    <div class="col-md-12">
      <div align="center" style="top: 5em; width: 100%;">
        <table class="blueTable">
            <thead>
            <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data de Nascimento</th> 
            <th>CPF</th>
            <th>CNPJ</th>
            <th>Ações</th>
            </tr>
            </thead>
            <?php 
                while($dados = mysqli_fetch_assoc($con)){
                echo "<tr>";
                echo "<td>" .$dados['id']. "</td>";
                echo "<td>" .$dados['nome']. "</td>";
                echo "<td>" .$dados['datanasc']. "</td>";
                echo "<td>" .$dados['cpf']. "</td>";
                echo "<td>" .$dados['cnpj']. "</td>";
                
                // Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
                echo "<td>";
                echo "<form action='detalhar_func.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='nome' type='hidden' value='" .$dados['nome']. "'>";
                echo "<input name='identidade' type='hidden' value='" .$dados['identidade']. "'>";
                echo "<input name='carteira' type='hidden' value='" .$dados['carteira']. "'>";
                echo "<input name='salario' type='hidden' value='" .$dados['salario']. "'>";
                echo "<input name='funcao' type='hidden' value='" .$dados['funcao']. "'>";
                echo "<input name='conta' type='hidden' value='" .$dados['conta']. "'>";
                echo "<input name='datanasc' type='hidden' value='" .$dados['datanasc']. "'>";
                echo "<input name='telefone' type='hidden' value='" .$dados['telefone']. "'>";
                echo "<input name='cep' type='hidden' value='" .$dados['cep']. "'>";
                echo "<input name='endereco' type='hidden' value='" .$dados['endereco']. "'>";
                echo "<input name='email' type='hidden' value='" .$dados['email']. "'>";
                echo "<input name='cpf' type='hidden' value='" .$dados['cpf']. "'>";
                echo "<input name='cnpj' type='hidden' value='" .$dados['cnpj']. "'>";
                echo "<input name='observacao' type='hidden' value='" .$dados['observacao']. "'>";
                echo "<button>Detalhar Funcionário</button>";
                echo "</form>";
                echo "<form action='editar_func.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='nome' type='hidden' value='" .$dados['nome']. "'>";
                echo "<input name='identidade' type='hidden' value='" .$dados['identidade']. "'>";
                echo "<input name='carteira' type='hidden' value='" .$dados['carteira']. "'>";
                echo "<input name='salario' type='hidden' value='" .$dados['salario']. "'>";
                echo "<input name='funcao' type='hidden' value='" .$dados['funcao']. "'>";
                echo "<input name='conta' type='hidden' value='" .$dados['conta']. "'>";
                echo "<input name='datanasc' type='hidden' value='" .$dados['datanasc']. "'>";
                echo "<input name='telefone' type='hidden' value='" .$dados['telefone']. "'>";
                echo "<input name='cep' type='hidden' value='" .$dados['cep']. "'>";
                echo "<input name='endereco' type='hidden' value='" .$dados['endereco']. "'>";
                echo "<input name='email' type='hidden' value='" .$dados['email']. "'>";
                echo "<input name='cpf' type='hidden' value='" .$dados['cpf']. "'>";
                echo "<input name='cnpj' type='hidden' value='" .$dados['cnpj']. "'>";
                echo "<input name='observacao' type='hidden' value='" .$dados['observacao']. "'>";
                echo "<button>Editar</button>";
                echo"</form>";
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<form action='validar_exclusao.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='nome' type='hidden' value='" .$dados['nome']. "'>";
                echo "<input name='cpf' type='hidden' value='" .$dados['cpf']. "'>";
                echo "<input name='cnpj' type='hidden' value='" .$dados['cnpj']. "'>";
                echo "<button>Remover</button>";
                echo "</form>";
                echo "</td>";

                echo "</tr>";
            }?>
            </tr>
            <tr>
              <td><a href="../index.php"><button type="button" class="btn btn-info">Retornar</button></a></td>
              <td><a href="cadastro_func.php"><button type="button" class="btn btn-info">Cadastrar Funcionário</button></a></td>
            </tr>
            </table>
          </div>
    </div>
  </div>
  <div class="row" style="bottom:0; left:0; background-color: #d6d6d6; width: 100%; height: 5em; text-align: center;">
    <div class="col-md-12">
      Desenvolvido por Alan M, Ana T, Anne G e Ramon V</br> © 2018</br><a href="https://www.dokuwiki.org/template:bootstrap3" title="Bootstrap template for DokuWiki" target="" class="navbar-link">
      <img src="http://diatinf.ifrn.edu.br/lib/tpl/bootstrap3/images/bootstrap.png" width="20" alt="Bootstrap template for DokuWiki">
    </a><a href="https://www.php.net/" title="Bootstrap template for DokuWiki" target="" class="navbar-link">
      <img src="http://diatinf.ifrn.edu.br/lib/tpl/bootstrap3/images/php.png" width="20" alt="Bootstrap template for DokuWiki">
    </a>
    </div>
  </div>
</div>
</body>
</html>