<?php

include("../conexao.php");
$consulta = "SELECT * FROM produto";
$con = $mysqli->query($consulta) or die($mysqli->error);
header('Content-Type: text/html; charset=utf-8');
include '../base/header/header.php';
?>

    <body>
      <div style="position: relative; top: 5em; left: 3.4em; width: 90%;">
        <b>Produtos</b>
        <table class="blueTable">
            <thead>
            <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Fornecedor</th>
            <th>Valor Unitário</th>
            <th></th>
            </tr>
            </thead>
            <?php
                while($dados = mysqli_fetch_assoc($con)){
                echo "<tr>";
                echo "<td>" .$dados['id']. "</td>";
                echo "<td>" .$dados['descricao']. "</td>";
                echo "<td>" .$dados['fornecedor']. "</td>";
                echo "<td>" ."R$ ".$dados['valor']. "</td>";
                
                // Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
                echo "<td>";
                echo "<form action='editar_produto.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='descricao' type='hidden' value='" .$dados['descricao']. "'>";
                echo "<input name='valor' type='hidden' value='" .$dados['valor']. "'>";
                echo "<button class='btn btn-success' value='Editar'>Editar</button>";
                echo "</form>";
                
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<form action='validar_exclusao.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='descricao' type='hidden' value='" .$dados['descricao']. "'>";
                echo "<button class='btn btn-danger'>Remover</button>";
                echo "</form>";
                echo "</td>";

                echo "</tr>";
            }

?>
            </tr>
            <tr>
              <td><a href="../index.php"><button type="button" class="btn btn-info">Retornar</button></a></td>
              <td><a href="cadastro_produto.php"><button type="button" class="btn btn-info">Cadastrar Produto</button></a></td>
            </table>
          </div>
    </body>
<?php include '../base/footer/footer.php'; ?>