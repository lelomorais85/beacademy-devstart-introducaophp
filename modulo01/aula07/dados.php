<?php

//array associativo
$dados = [
    'nome' => 'Huguinho',
    'sobrenome' => 'Talles',
    'cidade' => 'Patolândia',
    'idade' => 22,
    'ano_formacao' => 2021,
    'cor_favorita' => 'Azul',
];

echo "Nome: " .$dados['nome']." "  . $dados['sobrenome']. "<br>";
echo "Cidade: " .$dados['cidade'] . "<br>";
echo "Idade: " .$dados['idade'] . "<br>";
echo "Ano de Formação: " .$dados['ano_formacao'] . "<br>";
echo "Cor favorita: " .$dados['cor_favorita'] . "<br>";