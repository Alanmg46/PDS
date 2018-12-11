<?php include '../base/header/header.php'; ?>
    <body>
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Cadastro de Produtos</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="../Dados/inserir_produto.php" method="post">
                <table>
                    <tr>
                        <td>Descrição:</td>
                        <td><input type="text" name="descricao" id="nome" placeholder="Descrição" /></td>
                    </tr>
                    <tr>
                        <td>Valor Unitário:</td>
                        <td><b>R$</b><input type="text" name="valor" id="valor" placeholder="Valor Unitário R$" /></td>
                    </tr>
                </table>
                <br><br>
                <input class="btn btn-success" type="submit" name="gravar" value="Cadastrar">
                <input type="button" value="Cancelar" onClick="JavaScript: window.history.back();" class="btn btn-danger">
            </form>
            </div>
        </div>
            
    </body>
<?php include '../base/footer/footer.php'; ?>