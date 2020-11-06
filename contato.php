<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullstack_eletro";

    //Criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Verificando a conexão
    if (!$conn){
        die("A conexão ao BD falhou". mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome','$msg')";
        $result = $conn->query($sql);
    }
?>

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
        <form method="post" action="">
            Nome:<br>
            <input type="text" name="nome" style="width: 500px;"><br>
            Mensagem:<br>
            <input type="text" name="msg" style="width: 500px;"><br>
            <input type="submit" name="submit" value="Enviar"><br>
        </form>

        <?php

            $sql = "select * from comentarios";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";
                echo "<hr>";
            }
        } else {
            echo "Nenhum comentário ainda!!";
        }
        ?>

        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamentos:</b></p>
            <img src="./imagens/formas-pagamentos.png">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>

</html>
