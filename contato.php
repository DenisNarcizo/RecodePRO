<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
    </head>

    <body>
        <!-- Incio do menu-->
        <?php
            include('menu.html');
        ?>
        <!-- Fim do menu-->
        <h2>Contato</h2>
        <hr>
        <table border="0" width="100%" cellpadding="20">
            <td width="50%" align="center">
                <img src="./imagens/whatsapp.png" width="160px">
                <font face="Arial" size="4">contato@fullstackeletro.com</font>
            </td>
            <td width="50%" align="center">
                <img src="./imagens/email.png" width="80px">
                <font face="Arial" size="4">(11) 99999-9999</font>
            </td>
        </table>
        <form>
            <h4>Nome: </h4>
            <input type="text" style="width: 400px;">
            <h4>Mensagem: </h4>
            <textarea style="width: 400px;"></textarea>]
            <input type="submit" value="Enviar">
        </form>
        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamentos:</b></p>
            <img src="./imagens/formas-pagamentos.png">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>

</html>