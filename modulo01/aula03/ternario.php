<?php

$idade = 17;

$nome = "Lelo";



echo $idade >= 18 ? "de maior" : "de menor";

echo "<br>";

echo isset($nome) ? $nome : "nome não definido";
echo $nome ?? 'nome não definido';