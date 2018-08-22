<?php
include("conexao.php");
$conexao = mysqli_connect("localhost","root","","pds");
$sql = "SELECT * FROM cliente";
$consulta = mysqli_query($conexao, $sql);
?>
<table>
<?php
while( $dados = mysqli_fetch_assoc($consulta) ){
                echo "<tr>";
                echo "<td>" .$dados['id']. "</td>";
                echo "<td>" .$dados['nome']. "</td>";
                echo "<td>" .$dados['email']. "</td>";
                
                // Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
                echo "<td>";
                echo "<form action='edita.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='nome' type='hidden' value='" .$dados['nome']. "'>";
                echo "<input name='email' type='hidden' value='" .$dados['email']. "'>";    
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