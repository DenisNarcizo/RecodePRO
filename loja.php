<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Nossas lojas - Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
    </head>

    <body>
        <!-- Incio do menu-->
        <?php
            include('menu.html');
        ?>
        <!-- Fim do menu-->
        <h2>Nossas Lojas</h2>
        <hr>
        <table border="0" width="100%" cellpadding="20" class="lojas">
            <tr>
                <td width="33%">
                    <h3>Rio de Janeiro</h3>
                    <p>Avenida Presidente Vargas, 5000</p>
                    <p>10 &ordm; andar</p>
                    <p>Centro</p>
                    <p>(21) 3333-3333</p>
                </td>
                <td width="33%">
                    <h3>São Paulo</h3>
                    <p>Avenida Paulista, 985</p>
                    <p>3 &ordm; andar</p>
                    <p>Jardins</p>
                    <p>(11) 4444-4444</p>
                </td>
                <td width="33%">
                    <h3>Santa Catarina</h3>
                    <p>Rua Major &Aacute;, Vila , 370</p>
                    <p>Vila Mariana</p>
                    <p>(47) 5555-5555</p>
                </td>
            </tr>

        </table>
        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamentos:</b></p>
            <img src="./imagens/formas-pagamentos.png">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>

</html>
