<!DOCTYPE html>
<html lang="en" class="bg-danger bg-gradient">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="apple-touch-icon" sizes="57x57" href="imgs/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="imgs/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="imgs/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="imgs/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="imgs/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="imgs/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="imgs/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="imgs/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/apple-icon-180x180.png">
    <link rel="icon" type="imgs/png" sizes="192x192"  href="imgs/android-icon-192x192.png">
    <link rel="icon" type="imgs/png" sizes="32x32" href="imgs/favicon-32x32.png">
    <link rel="icon" type="imgs/png" sizes="96x96" href="imgs/favicon-96x96.png">
    <link rel="icon" type="imgs/png" sizes="16x16" href="imgs/favicon-16x16.png">
    <link rel="manifest" href="imgs/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="imgs/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    

    <title>Loja Noite do Prazer!</title>
  </head>
  

<?php

$prod1 = [
    'nome' => "Pop Toy Vibrador Shmily",
    'descricao' => "Vibrador com 10 modos de vibração, função vai e vem do eixo e estimulador de clitóris que vai deixar seu momento de prazer ainda mais intenso. ",
    'preco' =>"R$ 498,75",
    'foto' => "<img width='100px' src='imgs/Poptoy-Vibrador-Shmily.jpg'>",
];

$prod2 = [
    'nome' => "Satisfyer Double Fun",
    'descricao' => "Esse incrível vibrador para casal estimula os dois e possui diversas possibilidades através do uso com o aplicativo Satisfyer ou com uso com controle remoto. ",
    'preco' =>"R$ 560,88",
    'foto' => "<img width='100px' src='imgs/Satisfyer-Double-Fun.jpg'>",
];

$prod3 = [
    'nome' => "Power Licking Intt Luxury",
    'descricao' => "O power licking é um vibrador 3 em 1 que leva qualquer mulher a um outro patamar de prazer. De em lado um vibrador com 7 modos diferentes de vibração e pulsação.",
    'preco' =>"R$ 492,77",
    'foto' => "<img width='100px' src='imgs/Power-Licking-Intt-Luxury.jpg'>",
];

$prod4 = [
    'nome' => "Satisfyer Dual Pleasure Mauve",
    'descricao' => "O Dual pleasure é um estimulador com tecnologia exclusiva Air-Pulse (estimula o clitóris, usando ondas de pressão intensas sem contato direto).",
    'preco' =>"R$ 479,50",
    'foto' => "<img width='100px' src='imgs/Satisfyer-Dual-Pleasure-Mauve.jpg'>",
];

$prod5 = [
    'nome' => "Pretty Love Vibrador Bruno",
    'descricao' => "Este vibrador giratório de silicone suave tem 7 funções de frequência de vibração para lhe dar um nível intenso de prazer sempre que desejar. ",
    'preco' =>"R$ 150,10",
    'foto' => "<img width='100px' src='imgs/Pretty-Love-Vibrador-Bruno.jpg'>",
];

$prod6 = [
    'nome' => "Satisfyer Pro 2",
    'descricao' => "O Pro 2 é um estimulador com tecnologia exclusiva Air-Pulse (estimula o clitóris, usando ondas de pressão intensas sem contato direto). ",
    'preco' =>"R$ 440,00",
    'foto' => "<img width='100px' src='imgs/Satisfyer-Pro-2.jpg'>",
];

$prod7 = [
    'nome' => "Paname Intt",
    'descricao' => "Vibrador e estimulador de clitóris controlado por controle remoto sem fio. O Paname se encaixa perfeitamente na calcinha, estimulando a mulher de uma maneira totalmente inovadora.  ",
    'preco' =>"R$ 290,61",
    'foto' => "<img width='100px' src='imgs/Paname-Intt.jpg'>",
];

$prod8 = [
    'nome' => "Sugator 2 Intt ",
    'descricao' => "O sugador 2 em 1 que não pode faltar em sua cabeceira. De um lado um sugador perfeito com 7 intensidades de sucção.",
    'preco' =>"R$ 326,80",
    'foto' => "<img width='100px' src='imgs/Sugator-2-Intt .jpg'>",
];



$produtos = [
    $prod1,
    $prod2,
    $prod3,
    $prod4,
    $prod5,
    $prod6,
    $prod7,
    $prod8,
];

?>

<body class="bg-danger bg-gradient">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container mt-4 col-sm-9 bg-danger bg-gradient">
  <div class="row">
    <div class="col-4">
    <img src='imgs/logo-final-linktree.png' width='150px' alt="">
    </div>
    <div class="col-8 col-sm-6">
    <h1>Seu prazer é o nosso negócio!</h1>
    </div>
  </div>



<div class="container">
    <h3 class= 'mt-5'>Carrinho de compras</h3>
    <hr>
    <table class="table table-success table-striped">
        <thead class="table-dark" >
            <tr>
                <th width = 20%>Nome</th>
                <th width = 50%>Descrição</th>
                <th width = 15%>Preço</th>
                <th width = 15%>Foto</th>
        </thead>
        <tbody>
            <?php
                foreach ($produtos as $produtoIndividual) {
                    echo "<tr>";
                        echo '<td><h6>' . $produtoIndividual['nome'] . "</h6></td>";
                        echo '<td>' . $produtoIndividual['descricao'] . "</td>";
                        echo '<td>' . $produtoIndividual['preco'] . "</td>";
                        echo '<td>' . $produtoIndividual['foto'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <div class='container' style='text-align:right' style='padding:10px'>
        <button  type="button" style='margin:18px 1px' class="btn btn-success">Finalizar compra</button>
    </div>
</div>
            </body>
</html>