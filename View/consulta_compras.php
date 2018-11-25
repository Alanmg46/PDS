<?php

include("../conexao.php");
$consulta = "SELECT * FROM compras";
$con = $mysqli->query($consulta) or die($mysqli->error);
header('Content-Type: text/html; charset=utf-8');

include '../base/header/header.php';
?>
    <body>
      <div style="position: relative; top: 5em; left: 3.4em; width: 90%;">
        <b>Compras</b>
        <table class="blueTable">
            <thead>
            <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Quantidade</th>
            <th>Preço Unitário</th>
            <th>Valor total</th>
            <th>Desconto</th>
            <th>Produto</th>
            <th>Fornecedor</th>
            <th></th>
            </tr>
            </thead>
            <?php
                while($dados = mysqli_fetch_assoc($con)){
                echo "<tr>";
                echo "<td>" .$dados['id']. "</td>";
                echo "<td>" .$dados['data_compra']. "</td>";
                echo "<td>" .$dados['quantidade']. "</td>";
                echo "<td>" .$dados['preco_unit']. "</td>";
                echo "<td>" ."R$".$dados['valor_total']. "</td>";
                echo "<td>" ."R$ -".$dados['desconto']. "</td>";
                echo "<td>" .$dados['produto_id']. "</td>";
                echo "<td>" .$dados['fornecedor_id']. "</td>";

                // Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
                echo "<td>";
                echo "<form action='editar_compras.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='data_compra' type='hidden' value='" .$dados['data_compra']. "'>";
                echo "<input name='quantidade' type='hidden' value='" .$dados['quantidade']. "'>";
                echo "<input name='preco_unit' type='hidden' value='" .$dados['preco_unit']. "'>";
                echo "<input name='valor_total' type='hidden' value='" .$dados['valor_total']. "'>";
                echo "<input name='desconto' type='hidden' value='" .$dados['desconto']. "'>";
                echo "<input name='produto_id' type='hidden' value='" .$dados['produto_id']. "'>";
                echo "<input name='fornecedor_id' type='hidden' value='" .$dados['fornecedor_id']. "'>";
                echo "<button class='btn btn-success' value='Editar'>Editar</button>";
                echo "</form>";
                
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<form action='validar_exclusao_compras.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='produto_id' type='hidden' value='" .$dados['produto_id']. "'>";
                echo "<input name='valor_total' type='hidden' value='" .$dados['valor_total']. "'>";
                echo "<button class='btn btn-danger'>Remover</button>";
                echo "</form>";
                echo "</td>";

                echo "</tr>";
            }

?>
            </tr>
            <tr>
              <td><a href="../index.php"><button type="button" class="btn btn-info">Retornar</button></a></td>
              <td><a href="cadastro_compras.php"><button type="button" class="btn btn-info">Cadastrar Compras</button></a></td>
            </table>
          </div>
    </body>
<?php include '../base/footer/footer.php'; ?>