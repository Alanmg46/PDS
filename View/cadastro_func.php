<?php include '../base/header/header.php'; ?>
    <body class="box" style="background-color: #ededed;">
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Cadastro de Funcionários</div>
            <div style="position: relative; top: 4em; left: 35em; width: 700px; height: 850px;">
                <form action="../Dados/inserir_funcionario.php" method="post">
                <table>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome" id="nome" /></td>
                    </tr>
                    <tr>
                        <td>Identidade:</td>
                        <td><input type="text" name="identidade" id="identidade" /></td>
                    </tr>
                    <tr>
                        <td>Carteira de trabalho:</td>
                        <td><input type="text" name="carteira" id="carteira" /></td>
                    </tr>
                    <tr>
                        <td>Salário:</td>
                        <td><input type="text" name="salario" id="salario" /></td>
                    </tr>
                    <tr>
                        <td>Motorista</td>
                        <td><input type="checkbox" name="funcao[]" value="Motorista"></td>
                    </tr>
                    <tr>
                        <td>Técnico</td>
                        <td><input type="checkbox" name="funcao[]" value="Técnico"></td>
                    </tr>
                    </tr>
                    <tr>
                        <td>CPF (Somente números): </td>
                        <td><input type="text" name="cpf" id="cpf"/></td>
                    </tr>
                    <tr>
                        <td>CNPJ (Somente números): </td>
                        <td><input type="text" name="cnpj" id="cnpj"/></td>
                    </tr>
                    <tr>
                        <td>Data de Nascimento:</td>
                        <td><input type="text" name="data" id="data" /></td>
                    </tr>
                    <tr>
                        <td>Conta Bancária:</td>
                        <td><input type="text" name="conta" id="conta" /></td>
                    </tr>
                    <tr>
                        <td>Telefone: </td>
                        <td><input type="text" name="telefone" /></td>
                    </tr>
                     <tr>
                        <td>CEP (Somente números):</td>
                        <td><input type="text" name="cep" id="cep" /></td>
                    </tr>
                    <tr>
                        <td>Rua: </td>
                        <td><input type="text" name="rua" id="rua" size="45" /></td>
                    </tr>
                    <tr>
                        <td>Número: </td>
                        <td><input type="text" name="numero" id="numero" size="5" /></td>
                    </tr>
                    <tr>
                        <td>Bairro: </td>
                        <td><input type="text" name="bairro" id="bairro" size="25" /></td>
                    </tr>
                    <tr>
                        <td>Cidade: </td>
                        <td><input type="text" name="cidade" id="cidade" size="25" /></td>
                    </tr>
                    <tr>
                        <td>Estado: </td>
                        <td><input type="text" name="estado" id="estado" size="50" /></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="text" name="email" id="email"/></td>
                    </tr>
                    <tr>
                        <td>Observação:</td>
                        <td><textarea name="observacao" id="obs" rows="6" cols="50" maxlength="200"
                  wrap="hard"></textarea></td>
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