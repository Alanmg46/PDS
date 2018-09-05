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
            $endereco = filter_input(INPUT_POST, $endereco);
            $email = filter_input(INPUT_POST, 'email');
            $cpf = filter_input(INPUT_POST, 'cpf');
            $cnpj = filter_input(INPUT_POST, 'cnpj');
            $observacao = filter_input(INPUT_POST, 'observacao');
?>
<html>
    <head>
        <title>Projeto de Desenvolvimento de Sistemas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
        <script type='text/javascript' src='cep.js'></script>
        </head>
    <div style="position: relative; z-index: 1; background-image: linear-gradient(to left, #3c82eb, #00adff, #00cdde, #00e389, #a8eb12); width: 100%; height: 3em; font-size: 1.5em; font-family: 'Raleway', sans-serif;"><div style="position: relative;
    top: 20%; text-align: center; font-weight: bold; color: white;">Projeto de Desenvolvimento de Sistemas</div></div>
    <body style="position: relative; background-color: #ededed; height: 100%">
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Editar: <?php echo $nome; ?></div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="salvar_func.php" method="post">
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
                        <select name="funcao">
                          <option value="Motorista">Motorista</option>
                          <option value="Técnico">Técnico</option>
                        </select>
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
                <button type="button" class="btn btn-danger">Cancelar</button>
            </form>
            </div>
        </div>
    </body>
    <footer style="position: relative; bottom:0; left:0; background-color: #d6d6d6; width: 100%; height: 5em; text-align: center;">
        Desenvolvido por Alan M, Ana T, Anne G e Ramon V</br> © 2018</br><a href="https://www.dokuwiki.org/template:bootstrap3" title="Bootstrap template for DokuWiki" target="" class="navbar-link">
      <img src="http://diatinf.ifrn.edu.br/lib/tpl/bootstrap3/images/bootstrap.png" width="20" alt="Bootstrap template for DokuWiki">
    </a><a href="https://www.php.net/" title="Bootstrap template for DokuWiki" target="" class="navbar-link">
      <img src="http://diatinf.ifrn.edu.br/lib/tpl/bootstrap3/images/php.png" width="20" alt="Bootstrap template for DokuWiki">
    </a>
    </footer>
</html>