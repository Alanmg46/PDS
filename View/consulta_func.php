<?php

include("../conexao.php");
$consulta = "SELECT * FROM funcionario";
$con = $mysqli->query($consulta) or die($mysqli->error);
header('Content-Type: text/html; charset=utf-8');
?>

<?php include '../base/header/header.php'; ?>
    <body>
      <div style="position: relative; top: 5em; left: 3.4em; width: 90%;">
        <b>Funcionários</b>
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
                echo "<button class='btn btn-info'>Detalhar Funcionário</button>";
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
                echo "<button class='btn btn-success' value='Editar'>Editar</button>";
                echo"</form>";
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<form action='validar_exclusao_func.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='nome' type='hidden' value='" .$dados['nome']. "'>";
                echo "<input name='cpf' type='hidden' value='" .$dados['cpf']. "'>";
                echo "<input name='cnpj' type='hidden' value='" .$dados['cnpj']. "'>";
                echo "<button class='btn btn-danger'>Remover</button>";
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
<?php include '../base/footer/footer.php'; ?>