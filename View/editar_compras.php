<?php 
            //Recebe os dados a serem editados
            $id = filter_input(INPUT_POST, 'id');
            $data = filter_input(INPUT_POST, 'data_compra');
            $quantidade = filter_input(INPUT_POST, 'quantidade');
            $preco_unit = filter_input(INPUT_POST, 'preco_unit');
            $valor_total = filter_input(INPUT_POST, 'valor_total');
            $desconto = filter_input(INPUT_POST, 'desconto');
            $produto = filter_input(INPUT_POST, 'produto_id');
            $fornecedor = filter_input(INPUT_POST, 'fornecedor_id');
include '../base/header/header.php';
?>
    <body>
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Edição de Produto</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="../dados/salvar_compras.php" method="post">
                <table>
            <table>
                    <tr>
                        <td>ID:</td>
                        <td><input type="text" readonly="true" name="id" value="<?php echo $id; ?>"></td>
                    </tr>
                    <tr>
                        <td>Data:</td>
                        <td><input type="text" name="data_compra" value="<?php echo $data; ?>"></td>
                    </tr>
                    <tr>
                        <td>Quantidade:</td>
                        <td><input type="text" name="quantidade" value="<?php echo $quantidade; ?>"></td>
                    </tr>
                    <tr>
                        <td>Preço Unitário R$: </td>
                        <td><input type="text" name="preco_unit" value="<?php echo $preco_unit; ?>"></td>
                    </tr>
                     <tr>
                        <td>Valor Total R$:</td>
                        <td><input type="text" name="valor_total" value="<?php echo $valor_total; ?>"></td>
                    </tr>
                    <tr>
                        <td>Desconto R$ -: </td>
                        <td><input type="text" name="desconto" value="<?php echo $desconto; ?>"></td>
                    </tr>
                    <tr>
                        <td>Produto: </td>
                        <td><input type="text" name="produto" value="<?php echo $produto; ?>"></td>
                    </tr>
                    <tr>
                        <td>Fornecedor: </td>
                        <td><input type="text" name="fornecedor" value="<?php echo $fornecedor; ?>"></td>
                    </tr>
                </table>
                <br><br>
                <input class="btn btn-success" type="submit" name="gravar" value="Editar">
                <input type="button" value="Cancelar" onClick="JavaScript: window.history.back();" class="btn btn-danger">
            </form>
            </div>
        </div>
    </body>
<?php include '../base/footer/footer.php';?>