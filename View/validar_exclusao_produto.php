<?php
            $id = filter_input(INPUT_POST, 'id');
            $descricao = filter_input(INPUT_POST, 'descricao');
            include '../base/header/header.php';
?>
    <body>
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Exclusão de Produto</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="../dados/remover_produto.php" method="post">
                        <table>
                            <tr>
                                <td>Código:</td>
                                <td><input type="text" readonly="true" name="id" value="<?php echo $id; ?>"></td>
                            </tr>
                            <tr>
                                <td>Descrição:</td>
                                <td><input type="text" readonly="true" name="descricao" size="60" value="<?php echo $descricao; ?>"></td>
                            </tr>
                        </table>
                    <input class="btn btn-success" type="submit" name="gravar" value="Excluir">
                    <input type="button" value="Cancelar" onClick="JavaScript: window.history.back();" class="btn btn-danger">
                </form>
        </body>
<?php include '../base/footer/footer.php'; ?>