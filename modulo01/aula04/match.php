<?php

$mes = 4;

echo match ($mes) {
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',
    9 => 'Setembro',
    default => 'Mês inválido'
};