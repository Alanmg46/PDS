<?php
            $id = filter_input(INPUT_POST, 'id');
            $nome = filter_input(INPUT_POST, 'nome');
            $datanasc = filter_input(INPUT_POST, 'datanasc');
            $cpf = filter_input(INPUT_POST, 'cpf');
?>
<?php include '../base/header/header.php'; ?>
    <body>
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Deseja realmente excluir?</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="../Dados/remover_fornecedor.php" method="post">
                        <table>
                            <tr>
                                <td>ID:</td>
                                <td><input type="text" readonly="true" name="id" value="<?php echo $id; ?>"></td>
                            </tr>
                            <tr>
                                <td>Nome:</td>
                                <td><input type="text" readonly="true" name="nome" size="60" value="<?php echo $nome; ?>"></td>
                            </tr>
                            <tr>
                                <td>Data de Nascimento:</td>
                                <td><input type="text" readonly="true" name="datanasc" value="<?php echo $datanasc; ?>"></td>
                            </tr>
                            <tr>
                                <td>CPF: </td>
                                <td><input type="text" readonly="true" name="cpf" value="<?php echo $cpf; ?>"></td>
                            </tr>
                        </table>
                    <input class="btn btn-success" type="submit" name="gravar" value="Excluir">
                    <input type="button" value="Cancelar" onClick="JavaScript: window.history.back();" class="btn btn-danger">
                </form>
        </body>
<?php include '../base/footer/footer.php'; ?>