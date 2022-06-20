<?php

/* forma de criar variáveis que por serem usadas em escala não fica bem organizado para a memória
$aluno1 = 'Huguinho';
$aluno2 = 'Zézinho';
$aluno4 = 'Luizinho'; */

/* Forma antiga de criar array
$alunos2 = array (
    'Huguinho',
    'Zézinho',
    'Luizinho'
); */


// nova e mais prática forma de criar array no php
$alunos = [
    'Huguinho', //0
    'Zézinho', //1
    'Luizinho' //2
];

echo "<h1>A segunda posição é do aluno ".$alunos[1]."<h1>";