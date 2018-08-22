<html>
    <head>
        <title>Projeto de Desenvolvimento de Sistemas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
        <script type='text/javascript' src='cep.js'></script>
    </head>
    <div style="background-image: linear-gradient(to left, #3c82eb, #00adff, #00cdde, #00e389, #a8eb12); width: 100%; height: 3em; font-size: 1.5em; font-family: 'Raleway', sans-serif;"><div style="position: relative;
    top: 20%; text-align: center; font-weight: bold; color: white;">Projeto de Desenvolvimento de Sistemas</div></div>
    <body class="box" style="background-color: #ededed;">
        <div >
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Cadastro de Clientes</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="inserir.php" method="post">
                <table>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome" id="nome" /></td>
                    </tr>
                    <tr>
                        <td>Data de Nascimento:</td>
                        <td><input type="text" name="data" id="data" /></td>
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
                        <td>CPF (Somente números): </td>
                        <td><input type="text" name="cpf" id="cpf"/></td>
                    </tr>
                    <tr>
                        <td>CNPJ (Somente números): </td>
                        <td><input type="text" name="cnpj" id="cnpj"/></td>
                    </tr>
                </table>
                <br><br>
                <input class="btn btn-success" type="submit" name="gravar" value="Cadastrar">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </form>
            </div>
        </div>
            
    </body>
    <footer style="position: fixed; bottom:0; left:0; background-color: #d6d6d6; width: 100%; height: 5em; text-align: center;">
        Desenvolvido por Alan M, Ana T, Anne G e Ramon V</br> © 2018</br><a href="https://www.dokuwiki.org/template:bootstrap3" title="Bootstrap template for DokuWiki" target="" class="navbar-link">
      <img src="http://diatinf.ifrn.edu.br/lib/tpl/bootstrap3/images/bootstrap.png" width="20" alt="Bootstrap template for DokuWiki">
    </a><a href="https://www.php.net/" title="Bootstrap template for DokuWiki" target="" class="navbar-link">
      <img src="http://diatinf.ifrn.edu.br/lib/tpl/bootstrap3/images/php.png" width="20" alt="Bootstrap template for DokuWiki">
    </a>
    </footer>
</html>