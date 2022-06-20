<?php

include 'telas/menu.php';
include 'telas/head.php'; 
include 'acoes.php'; 

$url = $_SERVER['REQUEST_URI'];


match ($url) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    default => erro404(),
};


include 'telas/footer.php';

