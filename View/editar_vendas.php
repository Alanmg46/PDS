<?php 
            //Recebe os dados a serem editados
            $id = filter_input(INPUT_POST, 'id');
            $data = filter_input(INPUT_POST, 'data_venda');
            $produto = filter_input(INPUT_POST, 'produto');
            $cliente = filter_input(INPUT_POST, 'cliente');
            $desconto = filter_input(INPUT_POST, 'desconto');
            $valor_total = filter_input(INPUT_POST, 'valor_total');
include '../base/header/header.php';
?>
    <body>
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Edição de Venda</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="../dados/salvar_vendas.php" method="post">
                <table>
            <table>
                    <tr>
                        <td>ID:</td>
                        <td><input type="text" readonly="true" name="id" value="<?php echo $id; ?>"></td>
                    </tr>
                    <tr>
                        <td>Data:</td>
                        <td><input type="text" name="data_venda" value="<?php echo $data; ?>"></td>
                    </tr>
                    <tr>
                        <td>Cliente:</td>
                        <td><input type="text" name="cliente" value="<?php echo $cliente; ?>"></td>
                    </tr>
                    <tr>
                        <td>Produto</td>
                        <td><input type="text" name="produto" value="<?php echo $produto; ?>"></td>
                    </tr>
                    <tr>
                        <td>Desconto R$ -: </td>
                        <td><input type="text" name="desconto" value="<?php echo $desconto; ?>"></td>
                    </tr>
                     <tr>
                        <td>Valor Total R$:</td>
                        <td><input type="text" name="valor_total" value="<?php echo $valor_total; ?>"></td>
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