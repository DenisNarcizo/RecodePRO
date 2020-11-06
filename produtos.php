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
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
        <script src="JS/funcoes.js"></script>
    </head>

    <body>
        <!-- Incio do menu-->
        <?php
            include('menu.html');
        ?>
        <!-- Fim do menu-->
        <header>
            <h1>Produtos</h1>
        </header>
        <hr>
        <section class="categorias">
            <h3>Categorias</h3>
            <ul>
                <li onclick="exibir_todos()">Todos (12)</li>
                <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
                <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                <li onclick="exibir_categoria('lavaroupa')">Lavadora de roupas (2)</li>
                <li onclick="exibir_categoria('lavaloucas')">Lava louças (2)</li>
            </ul>
        </section>

        
        <?php

            $sql = "select * from produtos";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                    

        ?>

        <div class="box_produto" style="display:inline-block" id="<?php echo $rows["nome"];?>">
            <img src="<?php echo $rows["nome_imagem"];?>" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao"><?php echo $rows["descricao"];?></p>
            <hr>
            <p class="descricao"><strike><?php echo $rows["preco_normal"];?></strike></p>
            <p class="preco"><?php echo $rows["preco_venda"];?></p>
        </div>

        <?php
                }
            } else{
                echo "Nenhum produto cadastrado!";
            }        
                    
        ?>
        <!--

        <div class="box_produto" id="geladeira" style="display:inline-block;">
            <img src="./imagens/Produtos/geladeira_brastemp.PNG" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao">Geladeira Frost Free Brastemp Side Inverse 540 litros</p>
            <hr>
            <p class="descricao"><strike>R$ 6.389,00</strike></p>
            <p class="preco">R$ 5.019,00</p>
        </div>

        <div class="box_produto" id="geladeira" style="display:inline-block;">
            <img src="./imagens/Produtos/Geladeira_eletrolux.PNG" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao">Geladeira Electrolux Cycle Defrost 362 Litros DC44 Branco - 127V</p>
            <hr>
            <p class="descricao"><strike>R$ 2.099,50</strike></p>
            <p class="preco">R$ 1.850,50</p>
        </div>

        <div class="box_produto" id="geladeira" style="display:inline-block;">
            <img src="./imagens/Produtos/Geladeira_samsung.PNG" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao">Geladeira Samsung Family Hub Frost Free French Door Inverse 582 Litros Inox</p>
            <hr>
            <p class="descricao"><strike>R$ 21.339,00</strike></p>
            <p class="preco">R$ 19.000,00</p>
        </div>

        <div class="box_produto" id="fogao" style="display:inline-block;">
            <img src="./imagens/Produtos/fogão_brastemp.PNG" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao">Fogão Brastemp 5 Bocas Inox Com Botões Removíveis e Exclusivo Aro Protetor</p>
            <hr>
            <p class="descricao"><strike>R$ 1.359,99</strike></p>
            <p class="preco">R$ 1.199,00</p>
        </div>

        <div class="box_produto" id="fogao" style="display:inline-block;">
            <img src="./imagens/Produtos/Fogão_eletrolux.JPG" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao">Fogão 5 Bocas Electrolux Branco Automático com Tripla Chama e Painel Completo</p>
            <hr>
            <p class="descricao"><strike>R$ 1.299,00</strike></p>
            <p class="preco">R$ 1.099,00</p>
        </div>

        <div class="box_produto" id="microondas" style="display:inline-block;">
            <img src="./imagens/Produtos/microondas_eletrolux.JPG" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao">Forno micro-ondas Electrolux Mdiv30 20 litros 220v</p>
            <hr>
            <p class="descricao"><strike>R$ 469,99</strike></p>
            <p class="preco">R$ 299,00</p>
        </div>

        <div class="box_produto" id="microondas" style="display:inline-block;">
            <img src="./imagens/Produtos/microondas_philco.JPG" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao">Micro-ondas Philco Pmo21e 21l - Prata 220v</p>
            <hr>
            <p class="descricao"><strike>R$ 429,99</strike></p>
            <p class="preco">R$ 399,99</p>
        </div>

        <div class="box_produto" id="microondas" style="display:inline-block;">
            <img src="./imagens/Produtos/microondas_midea.JPG" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao">Micro-ondas Midea 20L MTFB21 - Branco</p>
            <hr>
            <p class="descricao"><strike>R$ 499,00</strike></p>
            <p class="preco">R$ 377,91</p>
        </div>

        <div class="box_produto" id="lavaroupa" style="display:inline-block;">
            <img src="./imagens/Produtos/lavadora_samsung.JPG" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao">Lavadora Samsung com Motor Digital Inverter Branca – 11Kg</p>
            <hr>
            <p class="descricao"><strike>R$ 3.899,00</strike></p>
            <p class="preco">R$ 2.924,10</p>
        </div>

        <div class="box_produto" id="lavaroupa" style="display:inline-block;">
            <img src="./imagens/Produtos/lavadora_eletrolux.JPG" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao">Lavadora Turbo Electrolux 17 Kg Branca com Capacidade Premium e Cesto Inox</p>
            <hr>
            <p class="descricao"><strike>R$ 1.799,00</strike></p>
            <p class="preco">R$ 1.709,05</p>
        </div>

        <div class="box_produto" id="lavaloucas" style="display:inline-block;">
            <img src="./imagens/Produtos/loucas_eletrolux.png" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao">Lava Louças Inox 10 Serviços (LV10X) - 220V</p>
            <hr>
            <p class="descricao"><strike>R$ 3.999,00</strike></p>
            <p class="preco">R$ 3.134,05</p>
        </div>

        <div class="box_produto" id="lavaloucas" style="display:inline-block;">
            <img src="./imagens/Produtos/louca_brastemp.JPG" width="80px" onmouseover="aumenta(this)"
                onmouseout="diminui(this)">
            <br>
            <p class="descricao">Lava Louça Compacta 8 Serviços Branca - 127V Brastemp</p>
            <hr>
            <p class="descricao"><strike>R$ 1.699,99</strike></p>
            <p class="preco">R$ 1.599,00</p>
        </div>
        -->
        
        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamentos:</b></p>
            <img src="./imagens/formas-pagamentos.png">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>

</html>
