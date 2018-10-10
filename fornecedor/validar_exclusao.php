<?php
            $id = filter_input(INPUT_POST, 'id');
            $nome = filter_input(INPUT_POST, 'nome');
            $cpf = filter_input(INPUT_POST, 'cpf');
?>
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
            <div style="position: relative; top: 1em; text-align:center; font-weight: bold;">Exclusão de Fornecedor</div>
            <div style="position: relative; top: 3em; left: 35em; width: 700px;">
                <form action="remover_forn.php" method="post">
                        <table>
                            <tr>
                                <td>ID:</td>
                                <td><input type="text" readonly="true" name="id" value="<?php echo $id; ?>"></td>
                            </tr>
                            <tr>
                                <td>Nome:</td>
                                <td><input type="text" readonly="true" name="nome" size="60" value="<?php echo $nome; ?>"></td>
                            </tr>
                            <tr>
                                <td>CPF: </td>
                                <td><input type="text" readonly="true" name="cpf" value="<?php echo $cpf; ?>"></td>
                            </tr>
                        </table>
                    <input class="btn btn-success" type="submit" name="gravar" value="Excluir">
                    <input type="button" value="Cancelar" onClick="JavaScript: window.history.back();" class="btn btn-danger">
                </form>
        </body>
     <footer style="position: fixed; bottom:0; left:0; background-color: #d6d6d6; width: 100%; height: 5em; text-align: center;">
        Desenvolvido por Alan M, Ana T, Anne G e Ramon V</br> © 2018</br><a href="https://www.dokuwiki.org/template:bootstrap3" title="Bootstrap template for DokuWiki" target="" class="navbar-link">
      <img src="http://diatinf.ifrn.edu.br/lib/tpl/bootstrap3/images/bootstrap.png" width="20" alt="Bootstrap template for DokuWiki">
    </a><a href="https://www.php.net/" title="Bootstrap template for DokuWiki" target="" class="navbar-link">
      <img src="http://diatinf.ifrn.edu.br/lib/tpl/bootstrap3/images/php.png" width="20" alt="Bootstrap template for DokuWiki">
    </a>
    </footer>
</html>