<?php
            $id = filter_input(INPUT_POST, 'id');
            $produto = filter_input(INPUT_POST, 'produto_id');
            include '../base/header/header.php';
?>
<html>
    <body>
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Exclusão de Compras</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="../dados/remover_compras.php" method="post">
                        <table>
                            <tr>
                                <td>ID:</td>
                                <td><input type="text" readonly="true" name="id" value="<?php echo $id; ?>"></td>
                            </tr>
                            <tr>
                                <td>Produto:</td>
                                <td><input type="text" readonly="true" name="produto" size="60" value="<?php echo $produto; ?>"></td>
                            </tr>
                        </table>
                    <input class="btn btn-success" type="submit" name="gravar" value="Excluir">
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </form>
        </body>
<?php include '../base/footer/footer.php';?>