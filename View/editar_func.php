<?php 
            //Recebe os dados a serem editados
            $id = filter_input(INPUT_POST, 'id');
            $nome = filter_input(INPUT_POST, 'nome');
            $identidade = filter_input(INPUT_POST, 'identidade');
            $carteira = filter_input(INPUT_POST, 'carteira');
            $salario = filter_input(INPUT_POST, 'salario');
            $funcao = filter_input(INPUT_POST, 'funcao');
            $conta = filter_input(INPUT_POST, 'conta');
            $datanasc = filter_input(INPUT_POST, 'datanasc');
            $telefone = filter_input(INPUT_POST, 'telefone');
            $cep = filter_input(INPUT_POST, 'cep');
            $endereco = filter_input(INPUT_POST, 'endereco');
            $email = filter_input(INPUT_POST, 'email');
            $cpf = filter_input(INPUT_POST, 'cpf');
            $cnpj = filter_input(INPUT_POST, 'cnpj');
            $observacao = filter_input(INPUT_POST, 'observacao');
?>
<?php include '../base/header/header.php'; ?>
    <body>
        <div >
            <div style="top: 1em; text-align:center; font-weight: bold;">Editar: <?php echo $nome; ?></div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px; height: 700px;">
                <form action="../Dados/salvar_funcionario.php" method="post">
                <table>
            <table>
                    <tr>
                        <td>ID:</td>
                        <td><input type="text" readonly="true" name="id" value="<?php echo $id; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome" id="nome" value="<?php echo $nome; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Identidade:</td>
                        <td><input type="text" name="identidade" id="identidade" value="<?php echo $identidade; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Carteira de trabalho:</td>
                        <td><input type="text" name="carteira" id="carteira" value="<?php echo $carteira; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Salário:</td>
                        <td><input type="text" name="salario" id="salario" value="<?php echo $salario; ?>"/></td>
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
                        <td><input type="text" name="cpf" id="cpf" value="<?php echo $cpf; ?>"/></td>
                    </tr>
                    <tr>
                        <td>CNPJ (Somente números): </td>
                        <td><input type="text" name="cnpj" id="cnpj" value="<?php echo $cnpj; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Data de Nascimento:</td>
                        <td><input type="text" name="data" id="data" value="<?php echo $datanasc; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Conta Bancária:</td>
                        <td><input type="text" name="conta" id="conta" value="<?php echo $conta; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Telefone: </td>
                        <td><input type="text" name="telefone" value="<?php echo $telefone; ?>"/></td>
                    </tr>
                     <tr>
                        <td>CEP (Somente números):</td>
                        <td><input type="text" name="cep" id="cep" value="<?php echo $cep; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Endereço: </td>
                        <td><input type="text" name="rua" id="rua" size="45" value="<?php echo $endereco; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="text" name="email" id="email" value="<?php echo $email; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Observação:</td>
                        <td><textarea name="observacao" id="obs" rows="6" cols="50" maxlength="200"
                  wrap="hard" value="<?php echo $observacao; ?>"></textarea></td>
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