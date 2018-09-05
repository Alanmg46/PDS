<?php

include("../conexao.php");
$consulta = "SELECT * FROM produto";
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
                  background-color: #ffffff;
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
    <div style="background-image: linear-gradient(to left, #3c82eb, #00adff, #00cdde, #00e389, #a8eb12); width: 100%; height: 3em; font-size: 1.5em; font-family: 'Raleway', sans-serif;"><div style="position: relative;
    top: 20%; text-align: center; font-weight: bold; color: white;">Projeto de Desenvolvimento de Sistemas</div></div>
    <body style="background-color: #ededed;">
      <div style="position: relative; top: 5em; left: 3.4em; width: 90%;">
        <table class="blueTable">
            <thead>
            <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th></th>
            </tr>
            </thead>
            <?php
                while($dados = mysqli_fetch_assoc($con)){
                echo "<tr>";
                echo "<td>" .$dados['id']. "</td>";
                echo "<td>" .$dados['descricao']. "</td>";
                
                // Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
                echo "<td>";
                echo "<form action='editar_produto.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='descricao' type='hidden' value='" .$dados['descricao']. "'>";
                echo "<button>Editar</button>";
                echo "</form>";
                
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<form action='validar_exclusao.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='descricao' type='hidden' value='" .$dados['descricao']. "'>";
                echo "<button>Remover</button>";
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
    <footer style="position: fixed; bottom:0; left:0; background-color: #d6d6d6; width: 100%; height: 5em; text-align: center;">
        Desenvolvido por Alan M, Ana T, Anne G e Ramon V</br> © 2018</br><a href="https://www.dokuwiki.org/template:bootstrap3" title="Bootstrap template for DokuWiki" target="" class="navbar-link">
      <img src="http://diatinf.ifrn.edu.br/lib/tpl/bootstrap3/images/bootstrap.png" width="20" alt="Bootstrap template for DokuWiki">
    </a><a href="https://www.php.net/" title="Bootstrap template for DokuWiki" target="" class="navbar-link">
      <img src="http://diatinf.ifrn.edu.br/lib/tpl/bootstrap3/images/php.png" width="20" alt="Bootstrap template for DokuWiki">
    </a>
    </footer>
</html>