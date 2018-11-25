<?php

include("../conexao.php");
$consulta = "SELECT * FROM vendas";
$con = $mysqli->query($consulta) or die($mysqli->error);
header('Content-Type: text/html; charset=utf-8');

include '../base/header/header.php';
?>
    <body>
      <div style="position: relative; top: 5em; left: 3.4em; width: 90%;">
        <b>Vendas</b>
        <table class="blueTable">
            <thead>
            <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Produto</th>
            <th>Cliente</th>
            <th>Desconto</th>
            <th>Valor total</th>
            <th></th>
            </tr>
            </thead>
            <?php
                while($dados = mysqli_fetch_assoc($con)){
                echo "<tr>";
                echo "<td>" .$dados['id']. "</td>";
                echo "<td>" .$dados['data_venda']. "</td>";
                echo "<td>" .$dados['produto']. "</td>";
                echo "<td>" .$dados['cliente']. "</td>";
                echo "<td>" ."R$ -".$dados['desconto']. "</td>";
                echo "<td>" ."R$".$dados['valor_total']. "</td>";
                // Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
                echo "<td>";
                echo "<form action='editar_vendas.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='data_venda' type='hidden' value='" .$dados['data_venda']. "'>";
                echo "<input name='produto' type='hidden' value='" .$dados['produto']. "'>";
                echo "<input name='cliente' type='hidden' value='" .$dados['cliente']. "'>";
                echo "<input name='desconto' type='hidden' value='" .$dados['desconto']. "'>";
                echo "<input name='valor_total' type='hidden' value='" .$dados['valor_total']. "'>";
                echo "<button class='btn btn-success' value='Editar'>Editar</button>";
                echo "</form>";
                
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<form action='validar_exclusao_vendas.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='data_venda' type='hidden' value='" .$dados['data_venda']. "'>";
                echo "<input name='produto' type='hidden' value='" .$dados['produto']. "'>";
                echo "<input name='cliente' type='hidden' value='" .$dados['cliente']. "'>";
                echo "<button class='btn btn-danger'>Remover</button>";
                echo "</form>";
                echo "</td>";

                echo "</tr>";
            }

?>
            </tr>
            <tr>
              <td><a href="../index.php"><button type="button" class="btn btn-info">Retornar</button></a></td>
              <td><a href="cadastro_vendas.php"><button type="button" class="btn btn-info">Cadastrar Vendas</button></a></td>
            </table>
          </div>
    </body>
<?php include '../base/footer/footer.php'; ?>