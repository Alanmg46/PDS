<?php 
            //Recebe os dados a serem editados
            $id = filter_input(INPUT_POST, 'id');
            $descricao = filter_input(INPUT_POST, 'descricao');
            $valor = filter_input(INPUT_POST, 'valor');
            include '../base/header/header.php';
?>
    <body>
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Edição de Produtos</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="../dados/salvar_produto.php" method="post">
                <table>
            <table>
                    <tr>
                        <td>Código:</td>
                        <td><input type="text" readonly="true" name="id" value="<?php echo $id; ?>"></td>
                    </tr>
                    <tr>
                        <td>Descrição:</td>
                        <td><input type="text" name="descricao" size="60" value="<?php echo $descricao; ?>"></td>
                    </tr>
                    <tr>
                        <td>Valor Unitário:</td>
                        <td><b>R$</b><input type="text" name="valor" size="60" value="<?php echo $valor; ?>"></td>
                    </tr>
                </table>
                <br><br>
                <input class="btn btn-success" type="submit" name="gravar" value="Editar">
                <input type="button" value="Cancelar" onClick="JavaScript: window.history.back();" class="btn btn-danger">
            </form>
            </div>
        </div>
    </body>
<?php include '../base/footer/footer.php'; ?>