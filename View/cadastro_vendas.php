<?php include '../base/header/header.php';?>
    <body>
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Cadastro de Vendas</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="../dados/inserir_vendas.php" method="post">
                <table>
                    <tr>
                        <td>Data:</td>
                        <td><input type="date" name="data" id="example1"></td>
                    </tr>
                    <tr>
                        <td>Produto:</td>
                        <td><input type="text" name="produto" id="quantidade"></td>
                    </tr>
                    <tr>
                        <td>Cliente:</td>
                        <td><input type="text" name="cliente" id="quantidade"></td>
                    </tr>
                    <tr>
                        <td>Desconto:</td>
                        <td><input type="text" name="desconto" id="preco_unit"></td>
                    </tr>
                    <tr>
                        <td>Valor total</td>
                        <td><input type="text" name="valor_total" placeholder="Valor total"/></td>
                    </tr>
                </table>
                <br><br>
                <input class="btn btn-success" type="submit" name="gravar" value="Cadastrar">
                <input type="button" value="Cancelar" onClick="JavaScript: window.history.back();" class="btn btn-danger">
            </form>
            </div>
        </div>
            
    </body>
<?php include '../base/footer/footer.php';?>