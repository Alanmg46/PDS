<?php include '../base/header/header.php'; ?>
    <body>
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Cadastro de Fornecedor</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="../Dados/inserir_fornecedor.php" method="post">
                <table>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome" id="nome" placeholder="Nome" /></td>
                    </tr>
                    <tr>
                        <td>Telefone: </td>
                        <td><input type="text" name="telefone" placeholder="Telefone"/></td>
                    </tr>
                     <tr>
                        <td>Cidade:</td>
                        <td><input type="text" name="cidade" placeholder="Cidade"/></td>
                    </tr>
                    <tr>
                        <td>Estado: </td>
                        <td><input type="text" name="estado" id="rua" size="45" placeholder="Estado"/></td>
                    </tr>
                    <tr>
                        <td>Endereco: </td>
                        <td><input type="text" name="endereco" id="numero" size="5" placeholder="Número"/></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="text" name="email" id="email" placeholder="Email"/></td>
                    </tr>
                    <tr>
                        <td>CPF (Somente números): </td>
                        <td><input type="text" name="cpf" id="cpf" placeholder="CPF (Somente números)"/></td>
                    </tr>
                    <tr>
                        <td>CNPJ (Somente números): </td>
                        <td><input type="text" name="cnpj" id="cnpj" placeholder="CNPJ (Somente números)"/></td>
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