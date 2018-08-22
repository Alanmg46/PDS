<?php
include("conexao.php");
$conexao = mysqli_connect("localhost","root","","pds");
$sql = "SELECT * FROM cliente";
$consulta = mysqli_query($conexao, $sql);
?>
<html>
    <head>
        <title>Projeto de Desenvolvimento de Sistemas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
        <script type='text/javascript' src='id.js'></script>
    </head>
    <div style="background-image: linear-gradient(to left, #3c82eb, #00adff, #00cdde, #00e389, #a8eb12); width: 100%; height: 3em; font-size: 1.5em; font-family: 'Raleway', sans-serif;"><div style="position: relative;
    top: 20%; text-align: center; font-weight: bold; color: white;">Projeto de Desenvolvimento de Sistemas</div></div>
    <body class="box" style="background-color: #ededed;">
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Editar cliente</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px; height: 800px;">
                <table>
                <?php
                while( $dados = mysqli_fetch_assoc($consulta) ){
                echo "<tr>";
                echo "<td>" .$dados['id']. "</td>";
                echo "<td>" .$dados['nome']. "</td>";
                echo "<td>" .$dados['data']. "</td>";
                echo "<td>" .$dados['telefone']. "</td>";
                echo "<td>" .$dados['cep']. "</td>";
                echo "<td>" .$dados['endereco']. "</td>";
                echo "<td>" .$dados['email']. "</td>";
                echo "<td>" .$dados['cpf']. "</td>";
                echo "<td>" .$dados['cnpj']. "</td>";
                
                // Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
                echo "<td>";
                echo "<form action='edita.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='nome' type='hidden' value='" .$dados['nome']. "'>";
                echo "<input name='email' type='hidden' value='" .$dados['data']. "'>";
                echo "<input name='email' type='hidden' value='" .$dados['telefone']. "'>";
                echo "<input name='email' type='hidden' value='" .$dados['cep']. "'>";
                echo "<input name='email' type='hidden' value='" .$dados['endereco']. "'>";
                echo "<input name='email' type='hidden' value='" .$dados['email']. "'>";
                echo "<input name='email' type='hidden' value='" .$dados['cpf']. "'>";
                echo "<input name='email' type='hidden' value='" .$dados['cnpj']. "'>";
                echo "<button>Editar</button>";
                echo "</form>";
                echo "</td>";
                
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<td>";
                echo "<form action='remove.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<button>Remover</button>";
                echo "</form>";
                echo "</td>";

                echo "</tr>";
            }

?>
</table>
            </div>
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