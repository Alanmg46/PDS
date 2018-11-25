<?php 
            //Recebe os dados a serem editados
            $id = filter_input(INPUT_POST, 'id');
            $nome = filter_input(INPUT_POST, 'nome');
            $telefone = filter_input(INPUT_POST, 'telefone');
            $cidade = filter_input(INPUT_POST, 'cidade');
            $estado = filter_input(INPUT_POST, 'estado');
            $endereco = filter_input(INPUT_POST, 'endereco');
            $email = filter_input(INPUT_POST, 'email');
            $cpf = filter_input(INPUT_POST, 'cpf');
            $cnpj = filter_input(INPUT_POST, 'cnpj');
?>
<?php include '../base/header/header.php'; ?>
    <body>
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Edição de Fornecedor</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="../dados/salvar_fornecedor.php" method="post">
                <table>
            <table>
                    <tr>
                        <td>ID:</td>
                        <td><input type="text" readonly="true" name="id" value="<?php echo $id; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome" size="60" value="<?php echo $nome; ?>"></td>
                    </tr>
                    <tr>
                        <td>Telefone:</td>
                        <td><input type="text" name="telefone" value="<?php echo $telefone; ?>"></td>
                    </tr>
                    <tr>
                        <td>Cidade: </td>
                        <td><input type="text" name="cidade" value="<?php echo $cidade; ?>"></td>
                    </tr>
                     <tr>
                        <td>Estado:</td>
                        <td><input type="text" name="cep" value="<?php echo $estado; ?>"></td>
                    </tr>
                    <tr>
                        <td>Endereço: </td>
                        <td><input type="text" name="endereco" size="60" value="<?php echo $endereco; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="email" name="email" size="60" value="<?php echo $email; ?>"></td>
                    </tr>
                    <tr>
                        <td>CPF (Somente números): </td>
                        <td><input type="text" name="cpf" value="<?php echo $cpf; ?>"></td>
                    </tr>
                    <tr>
                        <td>CNPJ (Somente números): </td>
                        <td><input type="text" name="cnpj" value="<?php echo $cnpj; ?>"></td>
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