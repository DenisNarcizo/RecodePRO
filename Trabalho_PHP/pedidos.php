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

    if(isset($_POST['produto']) && isset($_POST['quantidade']) && isset($_POST['total'])){
        $produto = $_POST['produto'];
        $quantidade = $_POST['quantidade'];
        $total = $_POST['total'];
        
        $sql = "insert into vendas (produto, quantidade, total) values ('$produto','$quantidade','$total')";
        $result = $conn->query($sql);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Full Stack Eletro</title>
        <link rel="stylesheet" href="CSS/estilo.css">

    </head>

    <body>
        <?php
            include('menu.html');
        ?>
        <main>
            <h1>
                Faça seu pedido!
            </h1>
            <p>Aproveite nossas promoções!</p>
        </main>
        </table>
        <form method="post" action="">
            Produto:<br>
            <input type="text" name="produto" style="width: 500px;"><br>
            Quantidade:<br>
            <input type="text" name="quantidade" style="width: 500px;"><br>
            Total:<br>
            <input type="text" name="total" style="width: 500px;"><br>
            <input type="submit" name="submit" value="Enviar"><br>
        </form>

        <?php

            $sql = "select * from vendas";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                echo "Data: ", $rows['data'], "<br>";
                echo "Produto: ", $rows['produto'], "<br>";
                echo "Quantidade: ", $rows['quantidade'], "<br>";
                echo "Total: ", $rows['total'], "<br>";
                echo "<hr>";
            }
        } else {
            echo "Nenhuma venda ainda!!";
        }
        ?>

        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br>
        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamentos:</b></p>
            <img src="./imagens/formas-pagamentos.png">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>

</html>
