<?php

$bandas = [
    'Bob Marley',
    'Mettalica',
    'Aerosmith',
    'Ponto de Equilibrio',
    'Mato Seco',
    'Plannet Hemp',
    'Raimundos'
];

$bandas [100] = 'Art Popular';
$bandas [9] = 'Katingulê';


$n = 0;

echo '<ul>';
/* aqui consigo listar todas as bandas definidas na array, porém a cada nova banda preciso alterar o limite
máximo na variável $b para ser exibida na página, por isso vamos usar o foreach daqui adiante.
    for ($b = 0; $b <= 4; $b++) {
    echo '<li>' . $bandas[$b] . '</li>';
} */

foreach ($bandas as $cadaBanda) {
    echo "<li>{$cadaBanda}</li>";
}

echo '</ul>';