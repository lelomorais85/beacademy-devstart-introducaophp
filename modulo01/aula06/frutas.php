<?php

$frutas = [
    'Laranja',
    'Abacate',
    'Maça',
];

// adicionando uma nova fruta no array
$frutas [] = 'Melância'; // pega a última posição maior e adiciona um, então Melância vira o item 3

$frutas [10] = 'Banana'; //força a inserir na posição definida

$frutas [7] = 'Pêra';

$frutas [] = 'Morango';

?>

<!--<ul> //jeito manual de inserir as arrays dentro dos itens de lita, porém nada prático
    <li><?php echo $frutas [0];?></li>
    <li><?php echo $frutas [1];?></li>
    <li><?php echo $frutas [2];?></li>
    <li><?php echo $frutas [3];?></li>
    <li><?php echo $frutas [7];?></li>
    <li><?php echo $frutas [10];?></li>
    <li><?php echo $frutas [11];?></li>
</ul>!--> 


